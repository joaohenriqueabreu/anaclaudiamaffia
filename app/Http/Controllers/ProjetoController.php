<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Projeto;
use App\Categoria;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\View;
use Illuminate\Support\Facades;

class ProjetoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		$projetos = Projeto::orderBy('id', 'desc')->paginate(10);
//        $limit=6;
//        $projetos = Projeto::orderBy(DB::raw('RAND()'))->take($limit)->get();
		return view('projetos.index')->with('projetos',$projetos);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('projetos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$projeto = new Projeto();

		$projeto->fill($request->all());

		$categoria = Categoria::findOrFail($request->input('categoria_id'));

		if(isset($categoria))
		{
			$projeto->categoria()->associate($categoria);
		}

		$projeto->save();

		return redirect()->route('projetos.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$projeto = Projeto::findOrFail($id);

		return view('projetos.show', ['projeto' => $projeto]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$projeto = Projeto::findOrFail($id);

		return view('projetos.edit', ['projeto' => $projeto ]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$projeto = Projeto::findOrFail($id);

		$projeto->fill($request->all());

		$categoria = Categoria::findOrFail($request->input('categoria_id'));

		if(isset($categoria))
		{
			$projeto->categoria()->associate($categoria);
		}

		$projeto->save();

		return redirect()->route('projetos.index', ['message' =>'Item updated successfully.']);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	    $projeto = Projeto::findOrFail($id);

//      Apaga o projeto
		$projeto->deleteRecord();

		return redirect()->route('projetos.index', ['message'=>'Item deleted successfully.']);
	}

}
