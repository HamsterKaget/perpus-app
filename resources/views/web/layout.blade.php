<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Perpus App | Perpustakaan Digital')</title>

        @vite(['resources/css/app.css','resources/js/app.js'])

        @stack('pre-css')
        @stack('post-css')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>


    <body class="dark bg-slate-800">
        @include('web.layout.navbar')

        @yield('content')

        @include('web.layout.footer')

        @stack('pre-js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
        @stack('post-js')
      </body>
</html>
