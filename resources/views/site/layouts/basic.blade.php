<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('title')</title>
        <meta charset="utf-8">
        <link rel='stylesheet' href="{{ asset('css/base.css') }}"/>
    </head>

    <body>
        @include('site.components.top')
        @yield('content')
    </body>
</html>
