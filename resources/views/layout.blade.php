<!doctype html>
<html lang="{{ $site->short_locale }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? $site->name }}</title>
        @vite(['resources/css/site.css', 'resources/js/site.js'])
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
    </head>
    <body class="bg-gray-900 font-sans leading-normal text-white antialiased scroll-smooth box-border text-pretty">
        @include('layout.header')
        {{-- <div class="mx-auto px-2 lg:min-h-screen flex flex-col items-center justify-center"> --}}
        <main>
            @yield("body")
        </main>
        @include('layout.footer')
    </body>
</html>
