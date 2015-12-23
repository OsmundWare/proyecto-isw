<?php namespace App\Http\Controllers;

use App\grupo;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\participante;
use App\usuario;
use Illuminate\Http\Request;

class GruposController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return('');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('grupos.create');
	}

	public function store(Request $request)
	{
		$grupo = new grupo();
		$grupo->nombre_grupo=\Input::get('nombre');
		if($grupo->save()){
			return 'Grupo creado';
		}
		else{
			return 'fallo creacion de grupo';
	}


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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		grupos::destroy(id_grupo);
	}

	public function agregar($id){
		$participante=participante::where('rut_usuario','=',\Input::get(rut))->first();
		$participante->id_grupo = $id;
		$participante->save();
	}
}
