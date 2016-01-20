@extends('admin.template.main')
@section('contenido')
    <div class="panel panel-default">

        <br>

        <div class="panel-heading">Solicitudes de proyectos</div>

        <table class="table table-responsive table-bordered">

            <thead>
            <tr>
                <th> ID </th>
                <th> Nombre Grupo </th>
                <th> Titulo Proyecto </th>
                <th> Tipo  </th>
                <th> Descripcion </th>
                <th> Estado </th>
            </tr>


            </thead>

            <body>

            @foreach($sproyecto as $sproyectos)
                <tr>

                    <td>{{$sproyectos->id}}</td>
                    <td>{{$sproyectos->nombre_grupo}}</td>
                    <td>{{$sproyectos->titulo_sp}}</td>
                    <td>{{$sproyectos->tipo_sp}}</td>
                    <td>{{$sproyectos->descripcion_sp}}</td>
                    <td>{{$sproyectos->aprobacion_sp}}</td>



            @endforeach
            </body>

        </table>
    </div>

@stop