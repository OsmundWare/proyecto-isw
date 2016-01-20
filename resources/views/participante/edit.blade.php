@extends('participante.master')
@section('contenido')

    <h1>Editar usuario: {{$participante->nombre}}</h1>

    {!! Form::model($participante,['method'=>'PATCH', 'action'=>['ParticipanteController@update',$participante->id ]]) !!}

    <div class="form-group">

        {!! Form::label('Rut:') !!}
        {!! Form::text('rut_usuario',null,
        ['class'=>'form-control','placeholder'=>'texto',]) !!}
    </div>

    <div class="form-group">

        {!! Form::label('Nombre') !!}
        {!! Form::text('nombre',null,
        ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('Apellido Paterno') !!}
        {!! Form::text('apellido_paterno',null,
        ['class'=>'form-control']) !!}
    </div>

    <div class="form-group ">

        {!! Form::label('Apellido Materno') !!}
        {!! Form::text('apellido_materno',null,
        ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">

        {!! Form::label('Correo') !!}
        {!! Form::text('correo',null,
        ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">

        {!! Form::label('Asignatura') !!}
        {!! Form::text('asignatura',null,
        ['class'=>'form-control']) !!}
    </div>



    <div class="form-group">

        {!! Form::label('Aprobar Usuario') !!}
        {!! Form::checkbox('aprobacion', 'Aprobado') !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Modificar',['class'=>'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}


    {!! Form::open(['method'=>'DELETE', 'action'=>['ParticipanteController@destroy',$participante->id]]) !!}
    <div class="form-group">
        {!! Form::submit('Eliminar Usuario',['class'=>'btn btn-danger form-control']) !!}

    </div>
    {!!Form::close()!!}

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li> {{$error}} </li>
            @endforeach
        </ul>
    @endif

@stop