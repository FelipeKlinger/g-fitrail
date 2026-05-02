<x-guest-layout>
    <style>
        .ds-page { font-family: 'Geist', sans-serif; color: #09090B; }
        .ds-page h1, .ds-page h2, .ds-page h3 { font-family: 'Geist', sans-serif; }
    </style>
    <div class="ds-page w-full rounded-[28px] border border-white/10 bg-black px-6 py-10 shadow-[0_20px_60px_rgba(15,23,42,0.35)] sm:px-10">
        <section class="reveal text-center space-y-3">
            <p class="text-xs uppercase tracking-[0.4em] text-violet-300">Coaches</p>
            <h1 class="text-4xl sm:text-5xl font-semibold text-white">Entrenadores que guían tu progreso</h1>
            <p class="text-sm text-zinc-400 max-w-2xl mx-auto">Especialistas que combinan técnica, motivación y seguimiento real.</p>
        </section>

        <section class="mt-10 grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
            @foreach($entrenadores as $entrenador)
                <article class="reveal rounded-2xl border border-white/10 bg-zinc-900 p-6 shadow-[0_10px_30px_rgba(15,23,42,0.35)]">
                    <div class="flex items-center gap-3">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border border-white/10 bg-white/5 text-lg font-semibold text-white">
                            {{ strtoupper(substr($entrenador->nombre, 0, 1)) }}{{ strtoupper(substr($entrenador->apellido, 0, 1)) }}
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">{{ $entrenador->nombre }} {{ $entrenador->apellido }}</h3>
                            <p class="text-xs text-zinc-400">{{ $entrenador->especialidad }}</p>
                        </div>
                    </div>
                    <div class="mt-4 space-y-2 text-sm text-zinc-300">
                        <p>Email: {{ $entrenador->email }}</p>
                        <p>Teléfono: {{ $entrenador->telefono }}</p>
                        @if($entrenador->sede)
                            <p>Sede: {{ $entrenador->sede->ciudad }}</p>
                        @endif
                    </div>
                </article>
            @endforeach
        </section>
    </div>
    <script src="https://unpkg.com/gsap@3.12.5/dist/gsap.min.js"></script>
    <script>
        if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            gsap.fromTo('.reveal', { y: 24, opacity: 0 }, { y: 0, opacity: 1, duration: 0.8, stagger: 0.12, ease: 'power2.out' });
        }
    </script>
</x-guest-layout>
