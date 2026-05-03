<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $appName = 'Fitrail';
        $pageTitle = match (true) {
            request()->routeIs('inicio') => 'Inicio',
            request()->routeIs('planes') => 'Planes',
            request()->routeIs('clases') => 'Clases',
            request()->routeIs('entrenadores') => 'Entrenadores',
            request()->routeIs('sedes') => 'Sedes',
            request()->routeIs('faq') => 'FAQ',
            request()->routeIs('contacto') => 'Contacto',
            request()->routeIs('login') => 'Iniciar sesión',
            request()->routeIs('register') => 'Registrarse',
            request()->routeIs('password.request', 'password.reset') => 'Recuperar contraseña',
            request()->routeIs('verification.notice') => 'Verificar email',
            default => null,
        };
    @endphp

    <title>{{ $pageTitle ? "$pageTitle | $appName" : $appName }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="flex min-h-screen flex-col bg-black text-white">
        <nav x-data="{ open: false }" class="sticky top-0 z-40 border-b border-white/10 bg-black/95 backdrop-blur">
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

                <div class="hidden items-center gap-3 md:flex">
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

                <button @click="open = !open" class="rounded-lg p-2 text-zinc-300 hover:bg-white/10 md:hidden">
                    <svg class="h-5 w-5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div x-cloak :class="open ? 'block' : 'hidden'" class="border-t border-white/10 bg-black/95 md:hidden">
                <div class="space-y-1 px-4 py-3">
                    <a href="{{ route('inicio') }}"
                        class="block rounded-lg px-3 py-2 text-sm {{ request()->routeIs('inicio') ? 'bg-violet-500/20 text-violet-200' : 'text-zinc-300 hover:bg-white/10 hover:text-white' }}">
                        Inicio
                    </a>
                    <a href="{{ route('planes') }}"
                        class="block rounded-lg px-3 py-2 text-sm {{ request()->routeIs('planes') ? 'bg-violet-500/20 text-violet-200' : 'text-zinc-300 hover:bg-white/10 hover:text-white' }}">
                        Planes
                    </a>
                    <a href="{{ route('clases') }}"
                        class="block rounded-lg px-3 py-2 text-sm {{ request()->routeIs('clases') ? 'bg-violet-500/20 text-violet-200' : 'text-zinc-300 hover:bg-white/10 hover:text-white' }}">
                        Clases
                    </a>
                    <a href="{{ route('entrenadores') }}"
                        class="block rounded-lg px-3 py-2 text-sm {{ request()->routeIs('entrenadores') ? 'bg-violet-500/20 text-violet-200' : 'text-zinc-300 hover:bg-white/10 hover:text-white' }}">
                        Entrenadores
                    </a>
                    <a href="{{ route('sedes') }}"
                        class="block rounded-lg px-3 py-2 text-sm {{ request()->routeIs('sedes') ? 'bg-violet-500/20 text-violet-200' : 'text-zinc-300 hover:bg-white/10 hover:text-white' }}">
                        Sedes
                    </a>
                    <a href="{{ route('faq') }}"
                        class="block rounded-lg px-3 py-2 text-sm {{ request()->routeIs('faq') ? 'bg-violet-500/20 text-violet-200' : 'text-zinc-300 hover:bg-white/10 hover:text-white' }}">
                        FAQ
                    </a>
                    <a href="{{ route('contacto') }}"
                        class="block rounded-lg px-3 py-2 text-sm {{ request()->routeIs('contacto') ? 'bg-violet-500/20 text-violet-200' : 'text-zinc-300 hover:bg-white/10 hover:text-white' }}">
                        Contacto
                    </a>

                    <div class="mt-3 flex flex-col gap-2">
                        @if (request()->routeIs('login'))
                        <a href="{{ route('register') }}"
                            class="rounded-lg border border-violet-500/30 bg-violet-500/15 px-3 py-2 text-sm text-zinc-200 transition duration-300 hover:border-violet-400/40 hover:bg-violet-600/10">
                            Registrarse
                        </a>
                        @elseif (request()->routeIs('register'))
                        <a href="{{ route('login') }}"
                            class="rounded-lg border border-violet-500/30 bg-violet-500/15 px-3 py-2 text-sm text-zinc-200 transition duration-300 hover:border-violet-400/40 hover:bg-violet-600/10">
                            Iniciar sesión
                        </a>
                        @else
                        <a href="{{ route('login') }}"
                            class="rounded-lg border border-violet-500/30 bg-violet-500/15 px-3 py-2 text-sm text-zinc-200 transition duration-300 hover:border-violet-400/40 hover:bg-violet-600/10">
                            Iniciar sesión
                        </a>
                        <a href="{{ route('register') }}"
                            class="rounded-lg border border-violet-500/30 bg-violet-500/15 px-3 py-2 text-sm text-zinc-200 transition duration-300 hover:border-violet-400/40 hover:bg-violet-600/10">
                            Registrarse
                        </a>
                        @endif
                    </div>
                </div>
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