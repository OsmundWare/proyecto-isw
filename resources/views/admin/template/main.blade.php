<!doctype html>
<html lang="es" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- FORMATO QUE RECONOCE TILDES Y ALFABETO LATINO-->
    <meta charset="UTF-8">
    <!--CON EL YIELD SE PUEDE DEFINIR EL TITULO DE LA PESTAÑA E IR UNIENDOLA CON LAS DEMAS VISTAS-->
    <title>@yield('title','Default') | Panel de administración</title>
    <!-- INTEGRAMOS BOOTSTRAP css AL PROYECTO-->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>

<body>
    <!--permite incluir en la plantilla otra vista en este caso la de navegacion -->
    @include('admin.template.partial.nav')
    <section>
        @yield('content')

    </section>

    <!-- Integrando bootstrap javascript y jquery -->
    {!! Html::script('plugins/jquery/js/jquery-2.1.4.js') !!}
    {!! Html::script('plugins/bootstrap/js/bootstrap.js') !!}


    <div class="container">
        @yield('contenido')
    </div>
</body>

</html>