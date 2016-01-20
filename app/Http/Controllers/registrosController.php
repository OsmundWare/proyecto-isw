<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Usuario;// LLAMA AL MODELO QUE VA A CONTROLAR PARA GUARDAR
use App\Http\Requests\UserRequest; //LLAMA AL REQUEST QUE VA A UTILIZAR


class RegistrosController extends Controller
{



	// MUESTRA LISTA DE USUARIOS
	public function index()
	{
		$varuser = Usuario::orderBy('apellido_paterno', 'ASC')->paginate(2);

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
		//Llama al modelo para guardar
		//Varuser  es una variable local
		// El request trae todos los datos del formulario
		$varuser = new Usuario($request->all());
		$varuser->password = bcrypt($request->password);// bcrypt sirve para encriptar la contraseña
		$exito =$varuser->save();

		if ($exito) {
			$varuser = Usuario::orderBy('apellido_paterno', 'ASC')->paginate(2);

			return view('admin.usuario.index', compact('varuser'));//return 'se guardo con exito';

		} else {
			return view('admin.usuario.create');
		}


	}

	// MUESTRA A UN USUARIO POR SU RUT
	public function show($id)
	{
		$varuser = Usuario::find($id);

		return view('admin.usuario.show', compact('varuser'));
	}


	//FORMULARIO EDITA UN USUARIO POR SU RUT
	public function edit($id)
	{

		$usuario = Usuario::find($id);
		return view('admin.usuario.edit', compact('usuario', $usuario));
	}

	// ACTUALIZA LA INFORMACION DEl FORMULARIO EDITA
	public function update(UserRequest $request, $id)
	{
		$varuser = Usuario::find($id);
		$varuser->nombre = $request->nombre;
		$varuser->apellido_paterno = $request->apellido_paterno;
		$varuser->apellido_materno = $request->apellido_materno;
		$varuser->asignatura = $request->asignatura;
		$varuser->save();

		return redirect()->route('admin.usuario.index');
	}


	// ELIMINA UN USUARIO
	public function destroy($id)
	{
		$varuser = Usuario::find($id);
		$varuser -> delete();

		return redirect()->route('admin.usuario.index');
	}

}
