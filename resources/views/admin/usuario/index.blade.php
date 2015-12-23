@extends('admin.template.main')
@section('contenido')
@section('title','Lista de Usuarios')

<!-- en href se enlazan las url se direcionan-->
   <a href="{{route('admin.usuario.create')}}" class="btn btn-info">Registrar Nuevo Usuario</a><hr>
    <!--SE CREA EL ESQUEMA DE LA TABLA-->
   <div class="container-fluid"> <table class="table table-bordered" >
        <th>Rut</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Correo</th>
        <th>Asignatura</th>
        <th>Acciones</th>
        <tbody><div/>

        @foreach($varuser as $usuario)
            <tr>
                <td>{!!  $usuario->rut_usuario !!}</td>
                <td>{!!  $usuario->nombre !!}</td>
                <td>{!!  $usuario->apellido_paterno !!}</td>
                <td>{!!  $usuario->apellido_materno !!}</td>
                <td>{!!  $usuario->correo !!}</td>
                <td>{!!  $usuario->asignatura !!}</td>
                <td> <a href="{{route('admin.usuario.edit',$usuario->rut_usuario)}}" class="btn btn-warning">Editar</a><a href="{{route('admin.usuario.destroy',$usuario->rut_usuario)}}" onclick="return confirm('¿Seguro Desea Eliminar al Usuario ?')" class="btn btn-danger">Eliminar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!-- Paginacion -->
    <div class="text-center"> {!! $varuser->render() !!}</div>
        </div>
@endsection('contenido')

