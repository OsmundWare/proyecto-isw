<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateParticipanteRequest;
use App\Http\Controllers\Controller;

use App\Usuario;
use Request;
use App\Participante;

class ParticipanteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$participante = Usuario::all();
		return view('participante.index', compact('participante'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$participante  = Usuario::find($id);
		return view('participante.show',compact('participante'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$participante = Usuario::find($id);
		return view('participante.edit',compact('participante'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CreateParticipanteRequest $request)
	{
		$participante = Usuario::find($id);
		$participante->update($request->all());
		return redirect('admin/participante');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$participante = Usuario::find($id);
		$participante->delete();
		return redirect('admin/participante');
	}

}

