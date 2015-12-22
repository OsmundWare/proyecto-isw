@extends('admin.template.main')

@section('title','crear usuario')

@section('content')

    <!--creacion del formulario   'route' => 'admin.users.store', 'method' => 'POST'-->
    {!! Form::open([]) !!}

        <div class="form-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=> 'nombrecompleto','required']) !!}

        </div>
<div class="form-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name',null,['class'=>'form-control','placeholder'=> 'nombrecompleto','required']) !!}

</div>


    {!! Form::close() !!}

    @endsection