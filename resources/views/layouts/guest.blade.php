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
                    <span class="inline-block h-2.5 w-2.5 rounded-full bg-violet-500"></span>
                    <span class="text-sm font-semibold tracking-wide text-white">Fitrail</span>
                </a>

                @if (request()->routeIs('login'))
                    <a href="{{ route('register') }}" class="rounded-lg border border-white/10 bg-white/5 px-3 py-1.5 text-sm text-zinc-200 hover:bg-white/10">
                        Register
                    </a>
                @elseif (request()->routeIs('register'))
                    <a href="{{ route('login') }}" class="rounded-lg border border-white/10 bg-white/5 px-3 py-1.5 text-sm text-zinc-200 hover:bg-white/10">
                        Login
                    </a>
                @endif
            </div>
        </nav>

        <main class="mx-auto flex w-full max-w-[1600px] flex-1 items-start justify-center px-4 py-10 sm:px-6 lg:px-8">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
