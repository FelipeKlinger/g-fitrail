<x-guest-layout>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Archivo:wght@300;400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap');
        .ds-page { font-family: 'Space Grotesk', sans-serif; color: #09090B; }
        .ds-page h1, .ds-page h2, .ds-page h3 { font-family: 'Archivo', sans-serif; }
    </style>
    <div class="ds-page w-full rounded-[28px] border border-white/10 bg-black px-6 py-10 shadow-[0_20px_60px_rgba(15,23,42,0.35)] sm:px-10">
        <section class="reveal text-center space-y-3">
            <p class="text-xs uppercase tracking-[0.4em] text-violet-300">Membresías</p>
            <h1 class="text-4xl sm:text-5xl font-semibold text-white">Planes para cada objetivo</h1>
            <p class="text-sm text-zinc-400 max-w-2xl mx-auto">Escoge el plan ideal para tu ritmo y evoluciona con constancia.</p>
        </section>

        @php
            $beneficios = ['Acceso a sala fitness', 'Clases dirigidas', 'Soporte de entrenadores'];
        @endphp
        <section class="mt-10 grid grid-cols-1 gap-6 lg:grid-cols-3">
            
            @foreach($planes as $plan)
                <article class="reveal rounded-2xl border border-white/10 bg-zinc-900 p-6 shadow-[0_10px_30px_rgba(15,23,42,0.35)]">
      
                    
                    <div class="flex items-start justify-between">
                        <h3 class="text-lg font-semibold text-white">{{ $plan->nombre }}</h3>
                        <span class="rounded-full border border-white/10 px-2.5 py-1 text-xs text-zinc-300">Mensual</span>
                    </div>
                    <p class="mt-2 text-sm text-zinc-400">{{ $plan->descripcion }}</p>
                    <p class="mt-5 text-3xl font-semibold text-white">
                        {{ $plan->precio }} €<span class="text-sm text-zinc-400">/mes</span>
                    </p>
                    <ul class="mt-5 space-y-2 text-sm text-zinc-300">
                        @foreach($beneficios as $beneficio)
                            <li class="flex items-center gap-2">
                                <span class="inline-flex h-1.5 w-1.5 rounded-full bg-violet-400"></span>
                                {{ $beneficio }}
                            </li>
                        @endforeach
                    </ul>
                    <a href="{{ route('register') }}"
                        class="mt-6 inline-flex w-full cursor-pointer items-center justify-center rounded-xl border border-violet-500/40 bg-violet-500/20 px-4 py-2.5 text-sm font-semibold text-white transition duration-200 hover:border-violet-400/60 hover:bg-violet-500/30 focus:outline-none focus-visible:ring-2 focus-visible:ring-violet-400/40">
                        Seleccionar
                    </a>
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
