<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\View;
use Illuminate\Support\Facades;

use App\Projeto;
use App\Image;

class ProjetoImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($idProjeto)
    {
        $images = Image::where('projeto_id',$idProjeto)->orderBy('id', 'desc')->paginate(10);

        return view('projetos.images.index',['images'=>$images]);
    }

    public function create($idProjeto)
    {
        $projeto = Projeto::findOrFail($idProjeto);

        return view('projetos.images.create',['projeto'=>$projeto]);
    }

    public function edit($idProjeto, $id)
    {
        $image = Image::findOrFail($id);
        $projeto = Projeto::findOrFail($idProjeto);

        return view('projetos.images.edit',['projeto'=>$projeto, 'image'=>$image]);
    }

    public function show($idProjeto, $id)
    {
        $image = Image::findOrFail($id);

        return view('projetos.images.show', ['image' => $image]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request, $idProjeto)
    {
        $image = new Image();
        $image->fill($request->all());

        $projeto = Projeto::findOrFail($idProjeto);

        if(isset($projeto))
        {
            $image->projeto()->associate($projeto);
        }

        // Salva o registro da imagem relacionada ao projeto
        $image->save();

        // Processar a imagem
        $upload= $request->file('arquivo');
        
        if(isset($upload) && $upload->isValid())
        {
            // Verifica se existe a pasta do projeto
            if(!$projeto->hasFolder())
            {
                $projeto->createFolder();
            }

            // Agora temos uma pasta, coloca arquivo no pasta
            $destino = $projeto->getFolder();
            $ext = $upload->getClientOriginalExtension();
            $arquivo = 'projeto-img-' . $image->id . '.' . $ext;

            $upload->move($destino,$arquivo);

            // Atualiza o campo arquivo para facilitar a busca pelas imagens
//            $image->arquivo = $destino . $arquivo;
            $image->arquivo = $projeto->getAssetFolder() . $arquivo;

            $image->save();
        }
        else
        {
            // do nothing
        }

        // Salva a imagem relacionada ao projeto
//        $image->save();

        return view('projetos.edit', ['projeto'=>$projeto]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */

    public function update(Request $request, $idProjeto, $id)
    {
        $image = Image::findOrFail($id);
        $image->fill($request->all());

        $projeto = Projeto::findOrFail($idProjeto);

        if(isset($projeto))
        {
            $image->projeto()->associate($projeto);
        }

        // Salva o registro da imagem relacionada ao projeto
        $image->save();

        // Processar a imagem
        $upload= $request->file('arquivo');

        if(isset($upload) && $upload->isValid())
        {
            // Apaga a imagem existente - somente se houver nova imagem
            $image->deleteFile();

            // Verifica se existe a pasta do projeto
            if(!$projeto->hasFolder())
            {
                $projeto->createFolder();
            }

            // Agora temos uma pasta, coloca arquivo no pasta
            $destino = $projeto->getFolder();
            $ext = $upload->getClientOriginalExtension();
            $arquivo = 'projeto-img-' . $image->id . '.' . $ext;

            $upload->move($destino,$arquivo);

            // Atualiza o campo arquivo para facilitar a busca pelas imagens
//            $image->arquivo = $destino . $arquivo;
            $image->arquivo = $projeto->getAssetFolder() . $arquivo;

            $image->save();
        }
        else
        {
            // do nothing
        }

        // Salva a imagem relacionada ao projeto
//        $image->save();

        return view('projetos.edit', ['projeto'=>$projeto]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($idProjeto, $id)
    {
        $projeto = Projeto::findOrFail($idProjeto);

        $image = Image::findOrFail($id);

        $image->deleteRecord();


        return view('projetos.edit', ['projeto'=>$projeto]);
    }
}
