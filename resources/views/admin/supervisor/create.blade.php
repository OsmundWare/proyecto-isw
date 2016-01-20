@extends('admin.template.main')

@section('title','Formulario')

@section('contenido')

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
            {!! Form::open(['route' => 'admin.supervisor.store', 'method' => 'POST']) !!}


            <div class="form-group">
                {!! Form::label('rut_usuario','rut') !!}
                {!! Form::text('rut_usuario',null,['class'=>'form-control','required']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
            </div>

            {!! Form::close() !!}

        </div>
@endsection

