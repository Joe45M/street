<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/901ce00d8f.js" crossorigin="anonymous"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <div class="flex">
                <nav class=" border-b-gray-200 border-r h-screen w-[260px] bg-white pt-10">
                    <a href="{{ route('dashboard') }}" class="flex items-center py-3 px-10 hover:bg-purple-50 hover:text-white hover:text-purple-400 gap-3">
                        <i class="fa-duotone fa-solid fa-rocket"></i>
                        Dashboard
                    </a>
                    <a href="{{ route('homes.index') }}" class="flex items-center py-3 px-10 hover:bg-purple-50 hover:text-white hover:text-purple-400 gap-3">
                        <i class="fa-duotone fa-solid fa-house"></i>
                        Homes
                    </a>
                </nav>
                <main class="p-10 lg:w-[900px]">
                    {{ $slot }}
                </main>
            </div>

            <!-- Page Content -->

        </div>
    </body>
</html>
