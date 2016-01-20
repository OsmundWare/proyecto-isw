@extends('participante.master')

@section('contenido')


    <div class="panel panel-default">
        <div class="panel-heading"> Detalles</div>

        <table class="table table-responsive table-bordered">
            <thead>

            <tr>
                <th> Rut usuario </th>
                <th> Nombre </th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno </th>
                <th>Correo</th>
                <th>asignatura</th>
                <th>Aprobacion</th>


            </tr>

            </thead>

            <body>
            <tr>


                <td>{{$participante->rut_usuario}}</td>
                <td>{{$participante->nombre}}</td>
                <td>{{$participante->apellido_paterno}}</td>
                <td>{{$participante->apellido_materno}}</td>
                <td>{{$participante->correo}}</td>
                <td>{{$participante->asignatura}}</td>
                <td>{{$participante->aprobacion}}</td>

            </tr>

            </body>

        </table>



    </div>

@stop