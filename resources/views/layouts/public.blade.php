<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', config('app.name', 'Medical Store'))</title>

        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
        <link rel="alternate icon" href="{{ asset('favicon.ico') }}">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .gradient-text {
                background: linear-gradient(135deg, #0d9488 0%, #0284c7 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }
            .hero-bg {
                background: linear-gradient(135deg, #f0fdfa 0%, #e0f2fe 50%, #f0fdf4 100%);
            }
            .card-hover {
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            }
            .card-hover:hover {
                transform: translateY(-8px);
                box-shadow: 0 20px 40px -10px rgba(13, 148, 136, 0.15);
            }
            .btn-primary {
                background: linear-gradient(135deg, #0d9488 0%, #14b8a6 100%);
                transition: all 0.3s ease;
            }
            .btn-primary:hover {
                transform: translateY(-2px);
                box-shadow: 0 10px 25px -5px rgba(13, 148, 136, 0.4);
            }
            .float-animation {
                animation: float 6s ease-in-out infinite;
            }
            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-20px); }
            }
            .pulse-ring {
                animation: pulse-ring 2s cubic-bezier(0.215, 0.61, 0.355, 1) infinite;
            }
            @keyframes pulse-ring {
                0% { transform: scale(0.8); opacity: 1; }
                100% { transform: scale(1.4); opacity: 0; }
            }
        </style>
    </head>
    <body class="font-sans antialiased text-slate-600 bg-white">
        @include('layouts.public-navigation')

        <x-toast-container top="top-24" />

        <main>
            @yield('content')
        </main>

        @include('layouts.public-footer')

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
                easing: 'ease-out-cubic'
            });
        </script>
    </body>
</html>
