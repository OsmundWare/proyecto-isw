@extends('admin.template.main')

@section('title','Formulario')

@section('content')

    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>

                @endforeach
            </ul>
        </div>
        @endif



                <!--creacion del formulario   'route' => 'admin.usuario.store', 'method' => 'POST'-->

<div class="container-fluid">
        {!! Form::open(['route' => 'admin.usuario.store', 'method' => 'POST']) !!}

        <div class="form-group">
            {!! Form::label('rut_usuario','Rut') !!}
            {!! Form::text('rut_usuario',null,['class'=>'form-control','placeholder'=> '11.111.111-1','required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('nombre','Nombre') !!}
            {!! Form::text('nombre',null,['class'=>'form-control','required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('apellido_paterno', 'Apellido Paterno',['class'=>'control-label']) !!}
            {!! Form::text('apellido_paterno', null,['class'=>'form-control','required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('apellido_materno', 'Apellido Materno',['class'=>'control-label']) !!}
            {!! Form::text('apellido_materno', null,['class'=>'form-control','required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('correo','Email') !!}
            {!! Form::email('correo',null,['class'=>'form-control','placeholder'=> 'ejemplo@gmail.com','required']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('asignatura', 'Asignatura',['class'=>'control-label']) !!}
            {!! Form::text('asignatura', null,['class'=>'form-control','required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password','Password') !!}
            {!! Form::password('password',['class'=>'form-control','placeholder'=> '*************','required']) !!}
        </div>



        <div class="form-group">
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

</div>
@endsection