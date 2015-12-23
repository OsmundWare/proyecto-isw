@extends('admin.template.main')

@section('title','Editando Usuario'.$usuario->nombre)

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



                <!--creacion del formulario   'route' => 'admin.users.store', 'method' => 'POST'-->

        <div class="container-fluid">
            {!! Form::open(['route' => 'admin.usuario.update', 'method' => 'PUT']) !!}

            <div class="form-group">
                {!! Form::label('rut_usuario','Rut') !!}
                {!! Form::number('rut_usuario',$usuario->rut_usuario,['class'=>'form-control','placeholder'=> '11.111.111-1','required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('nombre','Nombre') !!}
                {!! Form::text('nombre',$usuario->nombre,['class'=>'form-control','required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('apellido_paterno', 'Apellido Paterno',['class'=>'control-label']) !!}
                {!! Form::text('apellido_paterno', $usuario->apellido_paterno,['class'=>'form-control','required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('apellido_materno', 'Apellido Materno',['class'=>'control-label']) !!}
                {!! Form::text('apellido_materno',$usuario->apellido_materno,['class'=>'form-control','required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('correo','Email') !!}
                {!! Form::email('correo',$usuario->correo,['class'=>'form-control','placeholder'=> 'ejemplo@gmail.com','required']) !!}

            </div>

            <div class="form-group">
                {!! Form::label('asignatura', 'Asignatura',['class'=>'control-label']) !!}
                {!! Form::text('asignatura', $usuario->asignatura,['class'=>'form-control','required']) !!}
            </div>




            <div class="form-group">
                {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
            </div>

            {!! Form::close() !!}

        </div>
@endsection