<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tipo_de_documentos.index') }}">{{ __('T documento') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ciudads.index') }}">{{ __('Ciudad') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tipo_articulos.index') }}">{{ __('T articulo') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('forma_de_pagos.index') }}">{{ __('Forma pago') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('clientes.index') }}">{{ __('Cliente') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('proveedors.index') }}">{{ __('Proveedor') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('articulos.index') }}">{{ __('Articulo') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('facturas.index') }}">{{ __('Factura') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('detalle_facturas.index') }}">{{ __('Detalle Factura') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('devolucions.index') }}">{{ __('Devolucion') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
