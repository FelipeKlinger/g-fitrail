<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="flex min-h-screen flex-col bg-black text-white">
        <nav class="sticky top-0 z-40 border-b border-white/10 bg-black/95 backdrop-blur">
            <div class="mx-auto flex h-16 w-full max-w-[1600px] items-center justify-between px-4 sm:px-6 lg:px-8">
                <a href="{{ url('/') }}" class="flex items-center gap-2">
                    <span class="text-2xl font-semibold tracking-wide text-white">G-Fitrail</span>
                </a>

                <div class="hidden items-center gap-2 md:flex">
                    <a href="{{ route('inicio') }}"
                        class="rounded-lg px-3 py-1.5 text-sm {{ request()->routeIs('inicio') ? 'bg-violet-500/20 text-violet-200' : 'text-zinc-300 hover:bg-white/10 hover:text-white' }}">
                        Inicio
                    </a>
                    <a href="{{ route('planes') }}"
                        class="rounded-lg px-3 py-1.5 text-sm {{ request()->routeIs('planes') ? 'bg-violet-500/20 text-violet-200' : 'text-zinc-300 hover:bg-white/10 hover:text-white' }}">
                        Planes
                    </a>
                    <a href="{{ route('clases') }}"
                        class="rounded-lg px-3 py-1.5 text-sm {{ request()->routeIs('clases') ? 'bg-violet-500/20 text-violet-200' : 'text-zinc-300 hover:bg-white/10 hover:text-white' }}">
                        Clases
                    </a>
                    <a href="{{ route('entrenadores') }}"
                        class="rounded-lg px-3 py-1.5 text-sm {{ request()->routeIs('entrenadores') ? 'bg-violet-500/20 text-violet-200' : 'text-zinc-300 hover:bg-white/10 hover:text-white' }}">
                        Entrenadores
                    </a>
                    <a href="{{ route('sedes') }}"
                        class="rounded-lg px-3 py-1.5 text-sm {{ request()->routeIs('sedes') ? 'bg-violet-500/20 text-violet-200' : 'text-zinc-300 hover:bg-white/10 hover:text-white' }}">
                        Sedes
                    </a>
                    <a href="{{ route('faq') }}"
                        class="rounded-lg px-3 py-1.5 text-sm {{ request()->routeIs('faq') ? 'bg-violet-500/20 text-violet-200' : 'text-zinc-300 hover:bg-white/10 hover:text-white' }}">
                        FAQ
                    </a>
                    <a href="{{ route('contacto') }}"
                        class="rounded-lg px-3 py-1.5 text-sm {{ request()->routeIs('contacto') ? 'bg-violet-500/20 text-violet-200' : 'text-zinc-300 hover:bg-white/10 hover:text-white' }}">
                        Contacto
                    </a>
                </div>

                @if (request()->routeIs('login'))
                <a href="{{ route('register') }}"
                    class="rounded-lg border border-violet-500/30 bg-violet-500/15 px-3 py-1.5 text-sm text-zinc-200 transition duration-300 hover:border-violet-400/40 hover:bg-violet-600/10">
                    Registrarse
                </a>
                @elseif (request()->routeIs('register'))
                <a href="{{ route('login') }}"
                    class="rounded-lg border border-violet-500/30 bg-violet-500/15 px-3 py-1.5 text-sm text-zinc-200 transition duration-300 hover:border-violet-400/40 hover:bg-violet-600/10">
                    Iniciar sesión
                </a>
                @elseif (request()->routeIs('inicio'))
                <div class="flex gap-3">
                    <a href="{{ route('login') }}"
                        class="rounded-lg border border-violet-500/30 bg-violet-500/15 px-3 py-1.5 text-sm text-zinc-200 transition duration-300 hover:border-violet-400/40 hover:bg-violet-600/10">
                        Iniciar sesión
                    </a>
                    <a href="{{ route('register') }}"
                        class="rounded-lg border border-violet-500/30 bg-violet-500/15 px-3 py-1.5 text-sm text-zinc-200 transition duration-300 hover:border-violet-400/40 hover:bg-violet-600/10">
                        Registrarse
                    </a>
                </div>
                @else
                <div class="flex gap-3">
                    <a href="{{ route('login') }}"
                        class="rounded-lg border border-violet-500/30 bg-violet-500/15 px-3 py-1.5 text-sm text-zinc-200 transition duration-300 hover:border-violet-400/40 hover:bg-violet-600/10">
                        Iniciar sesión
                    </a>
                    <a href="{{ route('register') }}"
                        class="rounded-lg border border-violet-500/30 bg-violet-500/15 px-3 py-1.5 text-sm text-zinc-200 transition duration-300 hover:border-violet-400/40 hover:bg-violet-600/10">
                        Registrarse
                    </a>
                </div>
                @endif
            </div>
        </nav>

        <main class="mx-auto flex w-full max-w-[1600px] flex-1 items-start justify-center px-4 py-10 sm:px-6 lg:px-8">
            {{ $slot }}
        </main>
        <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
        <df-messenger
            chat-title="FitrailBot"
            agent-id="73854d41-2ac8-4a60-8ab6-3592706a3646"
            language-code="es"
        ></df-messenger>
    </div>
</body>

</html>