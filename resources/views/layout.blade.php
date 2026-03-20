<!doctype html>
<html class="scroll-smooth" lang="{{ $site->short_locale }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Michael Kierspe | Web Developer</title>
        @vite(['resources/css/site.css', 'resources/js/site.js'])
        @livewireStyles
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=close,menu" />
    </head>
    <body class="bg-gray-900 font-sans leading-normal text-white antialiased scroll-smooth box-border text-pretty">
        @include('layout.header')
        {{-- <div class="mx-auto px-2 lg:min-h-screen flex flex-col items-center justify-center"> --}}
        <main>
            @yield("body")
        </main>
        @include('layout.footer')
        @livewireScriptConfig
    </body>
</html>
