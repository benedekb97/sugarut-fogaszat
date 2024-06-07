<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="title" content="Sug&aacute;r&uacute;t Fog&aacute;szat Debrecen">
        <meta name="description" content="Megnyugtat&oacute;, bar&aacute;ts&aacute;gos k&ouml;rnyezetben v&aacute;rjuk betegeinket, Debrecen k&ouml;zpontjában l&eacute;v&odblac; mag&aacute;nrendel&odblac;nkben.">
        <meta name="keywords" content="sug&aacute;r&uacute;t,fog&aacute;szat,fogorvos,debrecen,fogp&oacute;tl&aacute;s,gy&ouml;k&eacute;rkezel&eacute;s,fogszab&aacute;lyoz&aacute;s,fogszab&aacute;lyz&oacute;,prot&eacute;zis">
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
