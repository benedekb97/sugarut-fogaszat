<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Sugárút Fogászat @yield('title')</title>
        @vite(['resources/css/app.scss'])
    </head>
    <body>
        @include('partials.header')
        <div class="divider"></div>
        @yield('body')
        <div class="divider"></div>
        @include('partials.footer')
    </body>
    @vite(['resources/js/app.js'])
</html>
