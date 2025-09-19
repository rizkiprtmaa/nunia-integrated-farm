<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nunia Integrated Farm</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marmelad&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marmelad&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Livewire Styles -->
    @livewireStyles
</head>

<body class="min-h-screen bg-white pt-20">
    {{-- WhatsApp Button Component --}}
    <livewire:layout.navigation />
    <x-whatsapp-button />

    {{ $slot }}
    <!-- Footer Component -->
    <x-layouts.footer />

    {{-- @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif --}}

    <!-- Livewire Scripts -->
    @livewireScripts
    @fluxScripts
</body>

</html>
