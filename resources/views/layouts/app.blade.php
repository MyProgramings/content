<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Cairo&family=Noto+Kufi+Arabic&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body{
                /* font-family: 'Cairo', sans-serif; */
                font-family: 'Noto Kufi Arabic', sans-serif;
                background-color: #f5f8fb;
            }
            .bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}
            .images{
                width: 150px;
            }
        </style>
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="Noto Kufi Arabic">
        <x-banner />

        <div class="min-h-screen  bg-dots-darker bg-center">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                        {{ $header }}
            @endif

            <!-- Page Content -->
            <main class="mt-10 pb-2">
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
            {{-- FontAwesomeKit --}}
    <script src="https://kit.fontawesome.com/71cf089bc4.js" crossorigin="anonymous"></script> 
    </body>
</html>
