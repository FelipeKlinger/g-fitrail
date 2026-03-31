<x-app-layout>


    <div class="mx-auto w-full max-w-7xl px-4 py-8 sm:px-6 lg:px-8">

        @if(auth()->user()->client->plans()->count() > 0)
            <div class="mb-6 rounded-lg bg-violet-100 p-4 text-black-800">
                <p class="text-sm font-medium">¡Tienes una suscripción activa! Disfruta de tus beneficios.</p>
                <h2 class="text-xl font-bold text-black-800">Plan: {{ auth()->user()->client->plans()->first()->nombre }}</h2> 
                {{-- <h2 class="text-lg font-semibold text-black-800">estado: {{ auth()->user()->client->plans()->first()->plan()->estado }}</h2> --}}
                <h2 class="text-xl font-semibold text-black-800">Plan: {{ auth()->user()->client->plans()->first()->descripcion }}</h2> 


            </div>
        @endif

        <section id="planes" class="space-y-6">
            <div class="flex flex-col justify-between gap-3 md:flex-row md:items-end">
                <div>
                    <p class="text-sm text-violet-300">Membresías</p>
                    <h2 class="text-3xl font-semibold text-white">Planes para cada objetivo</h2>
                </div>
                <p class="max-w-xl text-sm text-zinc-400">Precios y beneficios de ejemplo para mostrar la estructura de
                    una sección comercial.</p>
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
        </section>


    </div>

    {{-- <form action="{{ route('checkout', $plan->id) }}" method="POST">
        @csrf
        <button type="submit"
            class="mt-7 w-full rounded-xl bg-rose-500 px-4 py-3 text-sm font-semibold text-white transition hover:bg-rose-400">Comprar</button>
    </form> --}}
</x-app-layout>