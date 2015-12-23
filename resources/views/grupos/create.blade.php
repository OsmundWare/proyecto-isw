@extends('admin.template.main')

@section('contenido')
    <div class="container">
    <ol class="breadcrumb">
        <li class="active">Crear Grupo</li>
    </ol>
    </div>


    {!! Form::open(['url' => 'grupos','class'=>'form-inline']) !!}
        <div class="form-group">
            {!! Form::label('nombre', 'ingrese nombre de grupo',['class'=>'control-label']) !!}
            {!! Form::text('nombre', null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('ingresar',['class'=>'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

@endsection