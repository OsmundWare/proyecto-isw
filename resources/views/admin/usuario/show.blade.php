@extends('admin.template.main')

@section('contenido')
    <ol class="breadcrumb">
        <li><a href="{!! route('admin.usuario.index') !!}">Usuarios</a></li>
        <li class="active">{!! $varuser->nombre !!}</li>
    </ol>

    <div class="well span6">
        <div class="row-fluid">
            <div class="span2" >
                <img src="{!! $usuario->url_avatar !!}" width="100" alt="avatar" class="img-thumbnail">
            </div> <!-- /span2 -->

            <div class="span8">
                <h3>Usuario:          {!! $varuser->nombre !!}</h3>
                <h6>Apellido Paterno: {!! $varuser->apellido_paterno !!}</h6>
                <h6>Apellido Materno: {!! $varuser->apellido_materno!!}</h6>
                <h6>Email:            {!! $varuser->correo !!}</h6>
            </div> <!-- /span8 -->

            <div class="span2">
                <div class="btn-group">
                    <a class="btn dropdown-toggle btn-primary" data-toggle="dropdown" href="#">Acci�n
                        <span class="icon-cog icon-white"></span><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{!! URL::to('usuarios/'.$usuario->id.'/edit')!!}"><span class="glyphicon glyphicon-edit"></span> Editar</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-trash"></span> Eliminar</a></li>
                    </ul>
                </div> <!-- /btn-group -->
            </div> <!-- /span2 -->
        </div> <!-- /row-fluid -->
    </div> <!-- /well span6 -->
@stop('contenido')
