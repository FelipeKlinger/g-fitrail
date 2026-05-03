<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $appName = 'Fitrail';
        $pageTitle = match (true) {
            request()->routeIs('admin.dashboard') => 'Panel administrador',
            request()->routeIs('admin.users.index') => 'Usuarios',
            request()->routeIs('admin.entrenadors.index') => 'Entrenadores',
            request()->routeIs('admin.entrenamientos.index') => 'Entrenamientos',
            request()->routeIs('admin.reservas.index') => 'Reservas',
            request()->routeIs('admin.seguimientos.index') => 'Seguimientos',
            request()->routeIs('admin.plans.index') => 'Planes',
            request()->routeIs('admin.sedes.index') => 'Sedes',
            request()->routeIs('clients.dashboard') => 'Mi panel',
            request()->routeIs('clients.reservas') => 'Mis reservas',
            request()->routeIs('entrenadors.dashboard') => 'Panel entrenador',
            request()->routeIs('profile.edit') => 'Perfil',
            default => null,
        };
    @endphp

    <title>{{ $pageTitle ? "$pageTitle | $appName" : $appName }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-black">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
        <header class="bg-black shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
        <df-messenger chat-title="FitrailBot" agent-id="73854d41-2ac8-4a60-8ab6-3592706a3646" language-code="es">
        </df-messenger>
    </div>
</body>

</html>