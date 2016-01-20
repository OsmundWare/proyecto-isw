<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\proyecto;
use Illuminate\Http\Request;
use App\Http\Requests\ProyectoRequest;


class ProyectosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$varpro = proyecto::orderBy('id_proyecto','ASC')->paginate(2);

		return view('admin.proyecto.index', compact('varpro'));
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.proyecto.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProyectoRequest $request)
	{
		//Llama al modelo para guardar
		//Varuser  es una variable local
		// El request trae todos los datos del formulario

		$varpro = new proyecto($request->all());
		$varpro->save();

		/*if ($exito) {
			$varpro = proyecto::orderBy('id_proyecto','ASC')->paginate(2);

			return view('admin.proyecto.index', compact('varpro'));//return 'se guardo con exito';

		} else {
			return view('admin.proyecto.create');
		}*/

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$proyecto = proyecto::find($id);
		return view('admin.proyecto.edit', compact('proyecto', $proyecto));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ProyectoRequest $request,$id)
	{
		$proyecto = proyecto::find($id);
		$proyecto->titulo=$request->titulo;
		$proyecto->tipo_proyecto=$request->tipo_proyecto;
		$proyecto->descripcion=$request->descripcion;
		$proyecto->save();

		return redirect()->route('admin.proyecto.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$proyecto = proyecto::find($id);
		$proyecto -> delete();

		return redirect()->route('admin.proyecto.index');
	}


	public function gestion()
	{
		$varpro = proyecto::orderBy('id_proyecto','ASC')->paginate(2);

		return view('admin.proyecto.gestion', compact('varpro'));
	}
}


