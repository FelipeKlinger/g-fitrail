<x-guest-layout>


    <div class="mx-auto w-full max-w-7xl px-4 py-8 sm:px-6 lg:px-8">

        <div class="mx-auto mb-8 w-full max-w-2xl">
            <div class="rounded-2xl border border-white/10 bg-gradient-to-b from-white/5 to-transparent p-4 shadow-[0_0_30px_0_rgba(255,255,255,0.08)]">
                <div class="flex items-center justify-between gap-4">
                    <div class="flex items-center gap-3">
                        <div class="flex h-11 w-11 items-center justify-center rounded-full border border-violet-400/50 bg-violet-500/25 text-white shadow-[0_0_18px_rgba(139,92,246,0.35)]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M20 6 9 17l-5-5" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-[0.3em] text-violet-200">Paso 1</p>
                            <p class="text-sm font-semibold text-white">Tu información</p>
                        </div>
                    </div>

                    <div class="hidden items-center gap-3 sm:flex">
                        <div class="flex h-11 w-11 items-center justify-center rounded-full border border-violet-400/50 bg-violet-500/25 text-sm font-bold text-white shadow-[0_0_18px_rgba(139,92,246,0.35)]">
                            2
                        </div>
                        <div>
                            <p class="text-xs uppercase tracking-[0.3em] text-violet-200">Paso 2</p>
                            <p class="text-sm font-semibold text-white">Membresía</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4 h-2 w-full overflow-hidden rounded-full bg-white/10">
                    <div class="h-full w-full rounded-full bg-gradient-to-r from-violet-400 via-fuchsia-400 to-violet-500 shadow-[0_0_20px_rgba(139,92,246,0.6)]"></div>
                </div>

                <div class="mt-3 flex items-center justify-between text-xs text-zinc-400 sm:hidden">
                    <span>Tu información</span>
                    <span>Membresía</span>
                </div>
            </div>
        </div>

        <section id="planes" class="space-y-6">
            <div class="flex flex-col justify-between gap-3 md:flex-row md:items-end">
                <div>
                    <p class="text-sm text-violet-300">Membresías</p>
                    <h2 class="text-3xl font-semibold text-white">Planes para cada objetivo</h2>
                </div>
                <p class="max-w-xl text-sm text-zinc-400">Precios y beneficios oficiales con cualquier plan</p>
            </div>

            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3">
                <article class="rounded-2xl border border-white/10 bg-zinc-900 p-6">
                    <h3 class="text-lg font-semibold text-white">{{ $planes[0]->nombre }}</h3>
                    <p class="mt-1 text-sm text-zinc-400">{{ $planes[0]->descripcion }}</p>
                    <p class="mt-4 text-3xl font-semibold text-white">{{ $planes[0]->precio }} €<span
                            class="text-sm text-zinc-400">/mes</span></p>
                    <ul class="mt-5 space-y-2 text-sm text-zinc-300">
                        <li>• Acceso en horario estándar</li>
                        <li>• 2 clases grupales por semana</li>
                        <li>• Evaluación inicial</li>
                    </ul>
                    <form action="{{ route('checkout', $planes[0]->id) }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="mt-6 w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white transition hover:border-violet-400/40 hover:bg-violet-500/10">Seleccionar</button>
                    </form>
                </article>

                <article
                    class="rounded-2xl border border-violet-400/40 bg-gradient-to-b from-violet-500/20 to-zinc-900 p-6 shadow-[0_0_40px_rgba(139,92,246,0.25)]">
                    <p
                        class="w-fit rounded-full border border-violet-300/40 bg-violet-500/20 px-2.5 py-1 text-xs text-violet-100">
                        Más popular</p>
                    <h3 class="mt-3 text-lg font-semibold text-white">{{ $planes[1]->nombre }}</h3>
                    <p class="mt-1 text-sm text-zinc-300">{{ $planes[1]->descripcion }}</p>
                    <p class="mt-4 text-3xl font-semibold text-white">{{ $planes[1]->precio }} €<span
                            class="text-sm text-zinc-300">/mes</span></p>
                    <ul class="mt-5 space-y-2 text-sm text-zinc-200">
                        <li>• Acceso total al gimnasio</li>
                        <li>• Clases ilimitadas</li>
                        <li>• Rutina personalizada mensual</li>
                    </ul>
                    <form action="{{ route('checkout', $planes[1]->id) }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="mt-6 w-full rounded-xl border border-violet-400/40 bg-violet-500/20 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-violet-500/30">Elegir
                            Pro</button>
                    </form>
                </article>

                <article class="rounded-2xl border border-white/10 bg-zinc-900 p-6">
                    <h3 class="text-lg font-semibold text-white">{{ $planes[2]->nombre }}</h3>
                    <p class="mt-1 text-sm text-zinc-400">{{ $planes[2]->descripcion }}</p>
                    <p class="mt-4 text-3xl font-semibold text-white">{{ $planes[2]->precio }} €<span
                            class="text-sm text-zinc-400">/mes</span></p>
                    <ul class="mt-5 space-y-2 text-sm text-zinc-300">
                        <li>• Entrenador personal 1:1</li>
                        <li>• Nutrición y seguimiento semanal</li>
                        <li>• Zona recovery incluida</li>
                    </ul>
                    <form action="{{ route('checkout', $planes[2]->id) }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="mt-6 w-full rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-white transition hover:border-violet-400/40 hover:bg-violet-500/10">Seleccionar</button>
                    </form>

                </article>
            </div>

            <div class="pt-2 text-center">
                <form action="{{ route('register.cancel') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="inline-flex items-center justify-center rounded-xl border border-rose-400/50 bg-rose-500/10 px-5 py-2.5 text-sm font-semibold text-rose-200 transition hover:bg-rose-500/20">
                        Cancelar registro
                    </button>
                </form>
            </div>
        </section>


    </div>

    {{-- <form action="{{ route('checkout', $plan->id) }}" method="POST">
        @csrf
        <button type="submit"
            class="mt-7 w-full rounded-xl bg-rose-500 px-4 py-3 text-sm font-semibold text-white transition hover:bg-rose-400">Comprar</button>
    </form> --}}
</x-guest-layout>