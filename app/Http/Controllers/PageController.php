<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Projeto;
use App\Categoria;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Finder\Exception\AccessDeniedException;

//use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    //
    public function main($message=null)
//    public function main()
    {
        // seleciona as categorias
//        $categorias = Categoria::all();
        $categorias = Categoria::whereTipo('projetos')->get();

        // seleciona os projetos
//        $limit=6;
        $limit=999;

        $projetos = Projeto::orderBy(DB::raw('RAND()'))->take($limit)->get();
//        $projetos = Projeto::all();
        // seleciona os posts do blog

        return view('landing.main', ['projetos' => $projetos, 'categorias' =>$categorias, 'message'=>$message]);
//        return view('landing.main', ['projetos' => $projetos, 'categorias' =>$categorias]);
    }

    public function mini($id)
    {
        $projeto = Projeto::findOrFail($id);

        return view('landing.parts.projeto.mini', compact('projeto'));
    }

    public function blog()
    {
        return view('blog.index');
    }
}
