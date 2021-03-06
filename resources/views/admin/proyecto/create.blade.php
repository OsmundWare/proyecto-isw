@extends('admin.template.main')

@section('title','Proyecto')

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
            {!! Form::open(['route' => 'admin.proyecto.store', 'method' => 'POST']) !!}



            <div class="form-group">
                {!! Form::label('titulo','Titulo Proyecto') !!}
                {!! Form::text('titulo',null,['class'=>'form-control','required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('tipo_proyecto', 'Tipo Proyecto',['class'=>'control-label']) !!}
                {!! Form::text('tipo_proyecto', null,['class'=>'form-control','required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('descripcion', 'Descripcion') !!}
                {!! Form::textarea('descripcion', null,['class'=>'form-control','required']) !!}
            </div>




            <div class="form-group">
                {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
            </div>

            {!! Form::close() !!}

        </div>
@endsection

