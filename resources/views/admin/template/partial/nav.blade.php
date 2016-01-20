<nav class="navbar navbar-inverse">
    <div class="container-fluid">



<a aria-haspopup="true" aria-expanded="true">
        <h2 class="text-center">Gestion de Proyectos Ingenieria de Software</h2>
        <a href="{{route('welcome')}}">Inicio</a>

</a>


        <!-- OPCIONES BAYRON-->
        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">GESTION DE PARTICIPANTES<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('admin.usuario.create')}}">Registrar Participante </a></li>
                    <li><a href="http://146.83.198.35/~ieci1/index.php/admin/participante">Aprobar Registro Participantes</a></li>
                    <li role="separator" class="divider"></li>
                </ul>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">GESTION DE PROYECTOS DE USUARIOS<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('sproyectos.create')}}">Crear Proyecto </a></li>
                    <li><a href="{{route('sproyectos.index')}}">Listar Proyectos </a></li>
                    <li role="separator" class="divider"></li>
                </ul>
            </li>
        </ul>





        <!-- OPCIONES MARCOS-->
                <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">GESTION DE GRUPOS<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('grupos.create')}}">Crear Grupos</a></li>
                    <li><a href="{{route('grupos.index')}}">Listar Grupos</a></li>
                    <li role="separator" class="divider"></li>
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
                </ul>
            </li>
        </ul>


        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">ADMINISTRADOR<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('admin.proyecto.create')}}">Crear idea de Proyecto </a></li>
                    <li><a href="{{route('admin.proyecto.index')}}">Mostrar Lista De Proyectos</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{route('admin.proyecto.gestion')}}">Gestionar Proyectos</a></li>
                </ul>
            </li>
        </ul>


    </div>

</nav>