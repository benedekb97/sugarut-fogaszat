<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="title" content="Sugárút Fogászat Debrecen">
        <meta name="description" content="Megnyugtató, barátságos környezetben várjuk betegeinket, Debrecen központjában lévő magánrendelőnkben.">
        <meta name="keywords" content="sugárút,fogászat,fogorvos,debrecen,fogpótlás,gyökérkezelés,fogszabályozás,fogszabályzó,protézis">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="revisit-after" content="10 days">
        <meta name="author" content="Burgess Benedek">

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
