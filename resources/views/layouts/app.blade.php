<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Novato pro is a tech website, developed generally for learning purposes.">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/jpg" href="/img/logo-white.png">
    <meta property="og:title" content="Novato.pro - Desarrollo de Software, Programación e Informática">
    <meta property="og:description"
        content="Novato.pro es un sitio web enfocado en el desarrollo de software, programación e informática, y es desarrollado y mantenido por Jhordy Barrera en su tiempo libre.">
    <meta property="og:image" content="https://novato.pro/img/logo-white.png">
    <meta property="og:url" content="https://novato.pro">
    
    <!-- Etiquetas para Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@novato_pro">
    <meta property="twitter:title" content="Novato.pro - Desarrollo de Software, Programación e Informática">
    <meta property="twitter:description"
        content="Novato.pro es un sitio web enfocado en el desarrollo de software, programación e informática, y es desarrollado y mantenido por Jhordy Barrera en su tiempo libre.">
    <meta property="twitter:image" content="https://novato.pro/img/logo-white.png">

    <!-- Etiquetas para Facebook -->
    <meta property="fb:app_id" content="1234567890">
    <meta property="article:author" content="https://facebook.com/jhordybarrera">
    <meta property="article:publisher" content="https://facebook.com/novatopro">

    <!-- Etiquetas para LinkedIn -->
    <meta property="linkedin:title" content="Novato.pro - Desarrollo de Software, Programación e Informática">
    <meta property="linkedin:description"
        content="Novato.pro es un sitio web enfocado en el desarrollo de software, programación e informática, y es desarrollado y mantenido por Jhordy Barrera en su tiempo libre.">
    <meta property="linkedin:image" content="https://novato.pro/img/logo-white.png">

    <!-- Etiquetas para Pinterest -->
    <meta property="pinterest:description"
        content="Novato.pro es un sitio web enfocado en el desarrollo de software, programación e informática, y es desarrollado y mantenido por Jhordy Barrera en su tiempo libre.">
    <meta property="pinterest:image" content="https://novato.pro/img/logo-white.png">
    <meta property="pinterest:domain_verify" content="1234567890abcdefg">

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
    <x-footer />

    @stack('modals')
    @livewireScripts
</body>

</html>
