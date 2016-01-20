@extends('sproyectos.master')

@section('contenido')
    <h1>Solicitud de proyecto</h1>

    {!! Form::open(['route'=>'sproyectos.store', 'method'=>'POST']) !!}

    <div class="form-group">

        {!! Form::label('Nombre grupo:') !!}
        {!! Form::text('nombre_grupo',null,
        ['class'=>'form-control','placeholder'=>'texto',]) !!}
    </div>

    <div class="form-group">

        {!! Form::label('Titulo :') !!}
        {!! Form::text('titulo_sp',null,
        ['class'=>'form-control','placeholder'=>'texto',]) !!}
    </div>

    <div class="form-group">

        {!! Form::label('Tipo de proyecto :') !!}
        {!! Form::text('tipo_sp',null,
        ['class'=>'form-control','placeholder'=>'texto',]) !!}
    </div>

    <div class="form-group">

        {!! Form::label('Descripcion :') !!}
        {!! Form::text('descripcion_sp',null,
        ['class'=>'form-control','placeholder'=>'texto',]) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}
        @if($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>
    @endif
</div>
@stop