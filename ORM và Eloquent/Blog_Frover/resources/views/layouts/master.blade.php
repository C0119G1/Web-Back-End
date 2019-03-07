<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @include('partials.head')

    </head>
    <body>
    @include('partials.nav')

            <div class="container">

            @yield('content')

            </div>
    </body>
</html>
