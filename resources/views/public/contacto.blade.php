<x-guest-layout>
    <style>
        .ds-page { font-family: 'Geist', sans-serif; color: #09090B; }
        .ds-page h1, .ds-page h2, .ds-page h3 { font-family: 'Geist', sans-serif; }
    </style>
    <div class="ds-page w-full rounded-[28px] border border-white/10 bg-black px-6 py-10 shadow-[0_20px_60px_rgba(15,23,42,0.35)] sm:px-10">
        <section class="grid grid-cols-1 gap-10 lg:grid-cols-2">
            <div class="space-y-4 reveal">
                <p class="text-xs uppercase tracking-[0.4em] text-violet-300">Contacto</p>
                <h1 class="text-4xl sm:text-5xl font-semibold text-white">Conversemos sobre tu plan</h1>
                <p class="text-sm text-zinc-400">Completa el formulario y te ayudamos a elegir la sede y horario ideal.</p>

                @if(session('contacto_enviado'))
                    <div class="rounded-2xl border border-violet-500/30 bg-violet-500/10 p-4 text-sm text-violet-100">
                        Gracias, {{ session('contacto_nombre') }}. Recibimos tu mensaje y te responderemos pronto.
                    </div>
                @endif

                <form method="POST" action="{{ route('contacto.enviar') }}" class="space-y-4">
                    @csrf
                    <div>
                        <label class="text-xs uppercase tracking-widest text-zinc-400">Nombre completo</label>
                        <input name="nombre" value="{{ old('nombre') }}" required
                            class="mt-2 w-full rounded-xl border border-white/10 bg-zinc-900 px-4 py-3 text-sm text-white placeholder:text-zinc-500 focus:border-violet-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-violet-400/30" />
                        @error('nombre')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="text-xs uppercase tracking-widest text-zinc-400">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            class="mt-2 w-full rounded-xl border border-white/10 bg-zinc-900 px-4 py-3 text-sm text-white placeholder:text-zinc-500 focus:border-violet-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-violet-400/30" />
                        @error('email')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="text-xs uppercase tracking-widest text-zinc-400">Teléfono (opcional)</label>
                        <input name="telefono" value="{{ old('telefono') }}"
                            class="mt-2 w-full rounded-xl border border-white/10 bg-zinc-900 px-4 py-3 text-sm text-white placeholder:text-zinc-500 focus:border-violet-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-violet-400/30" />
                        @error('telefono')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="text-xs uppercase tracking-widest text-zinc-400">Mensaje</label>
                        <textarea name="mensaje" rows="5" required
                            class="mt-2 w-full rounded-xl border border-white/10 bg-zinc-900 px-4 py-3 text-sm text-white placeholder:text-zinc-500 focus:border-violet-400 focus:outline-none focus-visible:ring-2 focus-visible:ring-violet-400/30">{{ old('mensaje') }}</textarea>
                        @error('mensaje')
                            <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit"
                        class="inline-flex w-full cursor-pointer items-center justify-center rounded-xl border border-violet-500/40 bg-violet-500/20 px-4 py-3 text-sm font-semibold text-white transition duration-200 hover:border-violet-400/60 hover:bg-violet-500/30 focus:outline-none focus-visible:ring-2 focus-visible:ring-violet-400/40">
                        Enviar mensaje
                    </button>
                </form>
            </div>

            <div class="space-y-4">
                <div class="reveal rounded-2xl border border-white/10 bg-zinc-900 p-6 shadow-[0_10px_30px_rgba(15,23,42,0.35)]">
                    <h2 class="text-lg font-semibold text-white">Sedes y horarios</h2>
                    <p class="mt-1 text-sm text-zinc-400">Visítanos o escríbenos a la sede que prefieras.</p>
                    <div class="mt-4 space-y-4">
                        @foreach($sedes as $sede)
                            <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                                <h3 class="text-sm font-semibold text-white">{{ $sede->ciudad }}</h3>
                                <p class="text-xs text-zinc-400">{{ $sede->direccion }}</p>
                                <p class="mt-2 text-xs text-zinc-400">Horario: {{ $sede->horario_apertura }} - {{ $sede->horario_cierre }}</p>
                                <p class="mt-1 text-xs text-zinc-400">Teléfono: {{ $sede->telefono }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="reveal rounded-2xl border border-white/10 bg-zinc-900 p-6 shadow-[0_10px_30px_rgba(15,23,42,0.35)]">
                    <h2 class="text-lg font-semibold text-white">Mapa general</h2>
                    <p class="mt-1 text-sm text-zinc-400">Consulta ubicaciones en Google Maps.</p>
                    <a href="https://www.google.com/maps" target="_blank"
                        class="mt-4 inline-flex cursor-pointer items-center justify-center rounded-xl border border-white/10 bg-white/5 px-4 py-2 text-sm text-white transition duration-200 hover:border-violet-400/60 hover:text-violet-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-violet-400/40">
                        Abrir mapas
                    </a>
                </div>
            </div>
        </section>
    </div>
    <script src="https://unpkg.com/gsap@3.12.5/dist/gsap.min.js"></script>
    <script>
        if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
            gsap.fromTo('.reveal', { y: 24, opacity: 0 }, { y: 0, opacity: 1, duration: 0.8, stagger: 0.12, ease: 'power2.out' });
        }
    </script>
</x-guest-layout>
