<x-guest-layout>
    <style>
        .ds-page { font-family: 'Geist', sans-serif; color: #09090B; }
        .ds-page h1, .ds-page h2, .ds-page h3 { font-family: 'Geist', sans-serif; }
    </style>
    <div class="ds-page w-full rounded-[28px] border border-white/10 bg-black px-6 py-10 shadow-[0_20px_60px_rgba(15,23,42,0.35)] sm:px-10">
        <section class="reveal text-center space-y-3">
            <p class="text-xs uppercase tracking-[0.4em] text-violet-300">Entrenamientos</p>
            <h1 class="text-4xl sm:text-5xl font-semibold text-white">Clases y sesiones activas</h1>
            <p class="text-sm text-zinc-400 max-w-2xl mx-auto">Encuentra la clase perfecta para ti y reserva tu lugar.</p>
        </section>

        <section class="mt-10 grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
            @foreach($entrenamientos as $entrenamiento)
                <article class="reveal rounded-2xl border border-white/10 bg-zinc-900 p-6 shadow-[0_10px_30px_rgba(15,23,42,0.35)]">
                    <div class="flex items-center justify-between">
                        <p class="text-xs uppercase tracking-[0.2em] text-zinc-400">{{ $entrenamiento->capacidad }} cupos</p>
                        <span class="rounded-full border border-white/10 px-2 py-1 text-xs text-zinc-300">Activo</span>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-white">{{ $entrenamiento->nombre }}</h3>
                    <p class="mt-2 text-sm text-zinc-400">{{ $entrenamiento->descripcion }}</p>
                    <div class="mt-4 space-y-1 text-sm text-zinc-400">
                        <p>Inicio: {{ \Illuminate\Support\Carbon::parse($entrenamiento->fecha_inicio)->format('d M Y · H:i') }}</p>
                        <p>Fin: {{ \Illuminate\Support\Carbon::parse($entrenamiento->fecha_fin)->format('d M Y · H:i') }}</p>
                    </div>
                    @if($entrenamiento->entrenador)
                        <p class="mt-4 text-xs text-zinc-500">Coach: {{ $entrenamiento->entrenador->nombre }} {{ $entrenamiento->entrenador->apellido }}</p>
                    @endif
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
