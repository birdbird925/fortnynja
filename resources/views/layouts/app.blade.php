<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('seo_title')</title>

        <!-- Fonts -->
        <meta name="description" content="@yield('seo_description')">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div id="app">
            @include('layouts.partials.nav')
            @yield('content')
            @include('layouts.partials.contact_form')
            @include('layouts.partials.footer')
        </div>
        
        <script src="/js/app.js"></script>
    </body>
</html>
