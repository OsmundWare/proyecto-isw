@extends('admin.template.main')
@section('contenido')
@section('title','Gestion de Ideas de Proyecto')

        <!-- en href se enlazan las url se direcionan-->
<a href="{{route('admin.proyecto.create')}}" class="btn btn-info">Registrar Nuevo Proyecto</a><hr>
<!--SE CREA EL ESQUEMA DE LA TABLA-->
<div class="container-fluid"> <table class="table table-bordered" >
        <th>IDENTIFICADOR</th>
        <th>NOMBRE PROYECTO</th>
        <th>TIPO PROYECTO</th>
        <th>DESCRIPCION</th>
        <th>ACCIONES </th>
        <tbody><div/>

        @foreach($varpro as $proyecto)
            <tr>
                <td>{!!  $proyecto->id_proyecto !!}</td>
                <td>{!!  $proyecto->titulo !!}</td>
                <td>{!!  $proyecto->tipo_proyecto !!}</td>
                <td>{!!  $proyecto->descripcion !!}</td>
                <td> <a href="{{route('admin.proyecto.edit',$proyecto->id_proyecto)}}" class="btn btn-warning">Editar</a><a href="{{route('admin.proyecto.destroy',$proyecto->id_proyecto)}}" onclick="return confirm('¿Seguro Desea Eliminar idea de Proyecto ?')" class="btn btn-danger">Eliminar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!-- PAGINACION-->
    <div class="text-center"> {!! $varpro->render() !!}</div>
</div>
@endsection('contenido')