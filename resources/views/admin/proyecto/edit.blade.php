@extends('admin.template.main')

@section('title','Editando Proyecto ')

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




    <!--creacion del formulario   'route' => 'admin.users.store', 'method' => 'POST'-->

    <div class="container-fluid">
        {!! Form::open(['route' => ['admin.proyecto.update',$proyecto ],'method' => 'PUT']) !!}


        <div class="form-group">
            {!! Form::label('titulo','Titulo Proyecto',['class'=>'control-label']) !!}
            {!! Form::text('titulo',$proyecto->titulo,['class'=>'form-control','required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('tipo_proyecto', 'Tipo Proyecto',['class'=>'control-label']) !!}
            {!! Form::text('tipo_proyecto',$proyecto->tipo_proyecto,['class'=>'form-control','required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('descripcion', 'Descripcion',['class'=>'control-label']) !!}
            {!! Form::textarea('descripcion',$proyecto->descripcion,['class'=>'form-control','required']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection