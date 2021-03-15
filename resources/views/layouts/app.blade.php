<!DOCTYPE html class="h-100">
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

</head>
<body class="h-100" >
    <div id="app" class="h-100" >
        <b-navbar toggleable="sm" type="dark" variant="primary">
            <b-navbar-toggle target="nav-text-collapse"></b-navbar-toggle>

            <b-navbar-brand href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
            </b-navbar-brand>

            <b-collapse id="nav-text-collapse" is-nav>
                <b-navbar-nav class="ml-auto">
                    @guest
                    <b-nav-item href="{{ url('login') }}">Ingresar</b-nav-item>
                    <b-nav-item href="{{ url('registrar') }}">Registrar</b-nav-item>
                    @else
                    <b-nav-item-dropdown text="" right>
                        <b-dropdown-item href="#" @click="logout">
                        Cerrar Sesión
                        </b-dropdown-item>
                    </b-nav-item-dropdown>

                    <form id="logout-form" action="" method="POST" >
                                            {{ csrf_field() }}
                                            <button type="submit">Cerrar</button>
                    </form>

                    @endguest
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
        
        @yield('content')
        
        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
