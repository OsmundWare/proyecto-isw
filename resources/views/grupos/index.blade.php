@extends('admin.template.main')
@section('contenido')
@section('title','Lista de Grupos')

        <!-- en href se enlazan las url se direcionan-->
<a href="{{route('grupos.create')}}" class="btn btn-info">Registrar insertar nuevo grupo</a><hr>
<!--SE CREA EL ESQUEMA DE LA TABLA-->
<div class="container-fluid"> <table class="table table-bordered" >
        <th>ID_Grupo</th>
        <th>Nombre_Grupo</th>

        <tbody><div/>

        @foreach($idgroup as $grupo)
            <tr>
                <td>{!!  $grupo->id_grupo !!}</td>
                <td>{!!  $grupo->nombre_grupo !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
@endsection('contenido')