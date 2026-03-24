<x-app-layout>

    <section class="mx-auto w-full max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="mb-8">
            <p class="text-xs uppercase tracking-[0.22em] text-zinc-500">Fitrail · Planes</p>
            <h1 class="mt-2 text-3xl font-semibold tracking-tight text-white sm:text-4xl">Elige tu plan ideal</h1>
            <p class="mt-3 max-w-2xl text-sm text-zinc-400 sm:text-base">
                Vista previa de planes para clientes. Estos datos son de ejemplo para mostrar diseño.
            </p>
        </div>

        <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($planes as $plan)

            <article
                class="relative overflow-hidden rounded-2xl border border-zinc-800 bg-zinc-900/80 p-6 shadow-[0_16px_50px_-24px_rgba(0,0,0,0.85)] backdrop-blur">
                <div
                    class="mb-4 inline-flex items-center rounded-full border border-rose-400/25 bg-rose-500/10 px-3 py-1 text-xs font-medium text-rose-200">
                    Premium
                </div>
                <h2 class="text-2xl font-semibold text-white">{{ $plan->nombre }}</h2>
                <p class="mt-2 text-sm text-zinc-400">Experiencia completa para objetivos exigentes.</p>

                <div class="mt-6 flex items-end gap-1">
                    <span class="text-4xl font-bold text-white">{{ $plan->precio }} €</span>
                    <span class="pb-1 text-sm text-zinc-400">/mes</span>
                </div>


                <ul class="mt-6 space-y-3 text-sm text-zinc-300">
                    <li class="flex items-center gap-2"><span class="text-rose-300">●</span> {{ $plan->descripcion }}
                    </li>
                </ul>

                <form action="{{ route('checkout', $plan->id) }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="mt-7 w-full rounded-xl bg-rose-500 px-4 py-3 text-sm font-semibold text-white transition hover:bg-rose-400">Comprar</button>
                </form>
            </article>
            @endforeach

        </div>
    </section>
</x-app-layout>