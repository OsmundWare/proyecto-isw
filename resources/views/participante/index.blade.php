@extends('participante.master')

@section('contenido')

    <div class="panel panel-default">

        <br>

        <div class="panel-heading">Lista de Usuarios</div>

        <table class="table table-responsive table-bordered">

            <thead>
            <tr>
                <th> ID </th>
                <th> Nombre </th>
                <th> Correo </th>
                <th> Estado de probacion </th>
            </tr>


            </thead>

            <body>

            @foreach($participante as $participantes)
                <tr>

                    <td>{{$participantes->id}}</td>
                    <td>{{$participantes->nombre}}</td>
                    <td>{{$participantes->correo}}</td>
                    <td>{{$participantes->aprobacion}}</td>

                    <td>
                        <a href="http://146.83.198.35/~ieci1/index.php/admin/participante/{{$participantes->id}}/edit"
                           class="btn btn-warning btn-xs">Editar </a>
                        <a href="http://146.83.198.35/~ieci1/index.php/admin/participante/{{$participantes->id}}"
                           class="btn btn-success btn-xs">Detalle </a>
                    </td>
                </tr>

            @endforeach
            </body>

        </table>
    </div>



@stop