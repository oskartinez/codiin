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
            <b-img src="{{ asset('images/logo-codiin-ico-png24.png') }}" fluid width="30" height="30" alt="Responsive image"  class="mr-2"></b-img>

            <b-navbar-brand href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
            </b-navbar-brand>

            <b-collapse id="navbar-toggle-collapse" is-nav>
                <b-navbar-nav class="ml-auto">
                    <b-nav-item disabled >
                        <span style="background: #6666; padding:3px; color:white">
                         mrodriguez - DCCION DE JUZGAMIENTO ADMINISTRATIVO 
                         </span>
                    </b-nav-item>
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
        <menu-component>
        </menu-component>
        
        @yield('content')
        
        
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
