<nav class="navbar navbar-inverse">
    <div class="container-fluid">

        <h3>Proyecto Ingenieria de Softeware</h3>








        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">GESTION DE PARTICIPANTES<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('admin.usuario.index')}}">Mostrar Lista Participantes</a></li>
                    <li><a href="{{route('admin.usuario.create')}}">Registrar Participante </a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Cerrar Sesión</a></li>
                </ul>
            </li>
        </ul>


        <!-- OPCIONES MARCOS-->
                <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">GESTION DE GRUPOS<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('admin.usuario.index')}}">Mostrar Lista Usuarios</a></li>
                    <li><a href="{{route('admin.usuario.create')}}">Registrar nuevo usuario</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Cerrar Sesión</a></li>
                </ul>
            </li>
        </ul>


        <!-- OPCIONES MIGUEL-->
        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">GESTION DE ASPIRANTES<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('admin.usuario.index')}}">Mostrar Lista de Aspirantes</a></li>
                    <li><a href="{{route('admin.usuario.create')}}">Registrar Nuevo Aspirante</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Cerrar Sesión</a></li>
                </ul>
            </li>
        </ul>



    </div><!-- /.navbar-collapse -->

</nav>