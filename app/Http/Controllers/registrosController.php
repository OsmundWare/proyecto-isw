<?php namespace App\Http\Controllers;

//use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\usuario;//usa al modelo para guardar
use App\Http\Requests\UserRequest;

class registrosController extends Controller {

	// MUESTRA LISTA DE USUARIOS
	public function index()
	{
		$varuser = usuario::orderBy('apellido_paterno','ASC')->paginate(2);

		return view('admin.usuario.index', compact('varuser'));
	}

	// MUESTRA FORMULARIO PARA CREAR USUARIOS
	public function create()
	{
		return view('admin.usuario.create');
	}




	// GUARDA LOS DATOS DEL CREATE DEL FORMULARIO
	public function store(UserRequest $request)
	{
		//llama al modelo para guardar
		//varuser  es una variable local
		// el request trae todos los datos del formulario
		$varuser = new usuario($request->all());
		// bcrypt sirve para encriptar la contraseña
		$varuser->password=bcrypt($request->password);
		$exito =$varuser->save();
		if ($exito) {
			return "Almacenado con exito";

		} else {
			return "No se guardo";
		}


	}

	// MUESTRA UN USUARIO POR SU RUT
	public function show($id)
	{
		//
	}

	//FORMULARIO EDITA UN USUARIO POR SU RUT
	public function edit($id)
	{
		$usuario = usuario::find($id);
		return view('admin.usuario.edit', compact('usuario', $usuario));
	}

	// ACTUALIZA LA INFORMACION DE UN USUARIO POR EL RUT
	public function update($id)
	{
			dd($id);
	}

	// ELIMINA UN USUARIO
	public function destroy($id)
	{
		$varuser = usuario::find($id);
		$varuser -> delete();

		return redirect()->route('admin.usuario.index');
	}

}
