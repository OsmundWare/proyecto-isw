@extends('admin.template.main')

@section('contenido')

        <div id="details" class="clearfix">
            <div id="invoice">
                <h1>Documento PDF</h1>
                <div class="date">Date of Invoice: {{ $date }}</div>
            </div>
        </div>

        <div class="container-fluid">
            <table class="table table-bordered" >
                <th>ID Grupo</th>
                <th>Nombre Grupo</th>
                <th>Integrantes</th>
                <tbody><div/>

                @foreach($view as $grupo)
                    <tr>
                        <td>{!!  $grupo->id_grupo !!}</td>
                        <td>{!!  $grupo->nombre_grupo !!}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <!-- PAGINACION-->
            <div class="text-center"> {!! $view->render() !!}</div>
        </div>

@endsection