<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Novato pro is a tech website, developed generally for learning purposes.">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/jpg" href="/img/logo.jpg">
    
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @vite(['resources/css/app.css'])
    <script src="{{ asset('js/script.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900">
    <x-menu />

    {{-- @livewire('navigation-menu') --}}

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main class=" ">
        {{ $slot }}
    </main>

    @stack('modals')
    @livewireScripts
</body>

</html>
