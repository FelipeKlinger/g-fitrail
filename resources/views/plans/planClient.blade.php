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
            <article class="relative overflow-hidden rounded-2xl border border-zinc-800 bg-zinc-900/80 p-6 shadow-[0_16px_50px_-24px_rgba(0,0,0,0.85)] backdrop-blur">
                <div class="mb-4 inline-flex items-center rounded-full border border-cyan-400/20 bg-cyan-500/10 px-3 py-1 text-xs font-medium text-cyan-300">
                    Plan Inicial
                </div>
                <h2 class="text-2xl font-semibold text-white">Start Fit</h2>
                <p class="mt-2 text-sm text-zinc-400">Ideal para empezar una rutina y crear constancia.</p>

                <div class="mt-6 flex items-end gap-1">
                    <span class="text-4xl font-bold text-white">S/ 89</span>
                    <span class="pb-1 text-sm text-zinc-400">/mes</span>
                </div>

                <ul class="mt-6 space-y-3 text-sm text-zinc-300">
                    <li class="flex items-center gap-2"><span class="text-cyan-300">●</span> Acceso a sala de musculación</li>
                    <li class="flex items-center gap-2"><span class="text-cyan-300">●</span> 2 clases grupales por semana</li>
                    <li class="flex items-center gap-2"><span class="text-cyan-300">●</span> Evaluación física inicial</li>
                </ul>

                <button type="button" class="mt-7 w-full rounded-xl bg-cyan-500 px-4 py-3 text-sm font-semibold text-zinc-950 transition hover:bg-cyan-400">
                    Comprar plan
                </button>
            </article>

            <article class="relative overflow-hidden rounded-2xl border border-violet-500/30 bg-zinc-900/80 p-6 shadow-[0_16px_50px_-24px_rgba(76,29,149,0.65)] backdrop-blur">
                <div class="absolute -right-10 -top-10 h-28 w-28 rounded-full bg-violet-500/20 blur-2xl"></div>
                <div class="mb-4 inline-flex items-center rounded-full border border-violet-400/30 bg-violet-500/15 px-3 py-1 text-xs font-medium text-violet-200">
                    Más elegido
                </div>
                <h2 class="text-2xl font-semibold text-white">Pro Training</h2>
                <p class="mt-2 text-sm text-zinc-400">Para mejorar rendimiento con seguimiento continuo.</p>

                <div class="mt-6 flex items-end gap-1">
                    <span class="text-4xl font-bold text-white">S/ 139</span>
                    <span class="pb-1 text-sm text-zinc-400">/mes</span>
                </div>

                <ul class="mt-6 space-y-3 text-sm text-zinc-300">
                    <li class="flex items-center gap-2"><span class="text-violet-300">●</span> Acceso total a áreas de entrenamiento</li>
                    <li class="flex items-center gap-2"><span class="text-violet-300">●</span> 5 clases grupales por semana</li>
                    <li class="flex items-center gap-2"><span class="text-violet-300">●</span> Rutina personalizada mensual</li>
                </ul>

                <button type="button" class="mt-7 w-full rounded-xl bg-violet-500 px-4 py-3 text-sm font-semibold text-white transition hover:bg-violet-400">
                    Comprar plan
                </button>
            </article>

            <article class="relative overflow-hidden rounded-2xl border border-zinc-800 bg-zinc-900/80 p-6 shadow-[0_16px_50px_-24px_rgba(0,0,0,0.85)] backdrop-blur">
                <div class="mb-4 inline-flex items-center rounded-full border border-rose-400/25 bg-rose-500/10 px-3 py-1 text-xs font-medium text-rose-200">
                    Premium
                </div>
                <h2 class="text-2xl font-semibold text-white">Elite Performance</h2>
                <p class="mt-2 text-sm text-zinc-400">Experiencia completa para objetivos exigentes.</p>

                <div class="mt-6 flex items-end gap-1">
                    <span class="text-4xl font-bold text-white">S/ 199</span>
                    <span class="pb-1 text-sm text-zinc-400">/mes</span>
                </div>

                <ul class="mt-6 space-y-3 text-sm text-zinc-300">
                    <li class="flex items-center gap-2"><span class="text-rose-300">●</span> Entrenador personalizado (2 sesiones/sem)</li>
                    <li class="flex items-center gap-2"><span class="text-rose-300">●</span> Acceso ilimitado a todas las clases</li>
                    <li class="flex items-center gap-2"><span class="text-rose-300">●</span> Plan nutricional básico incluido</li>
                </ul>

                <button type="button" class="mt-7 w-full rounded-xl bg-rose-500 px-4 py-3 text-sm font-semibold text-white transition hover:bg-rose-400">
                    Comprar plan
                </button>
            </article>
        </div>
    </section>
</x-app-layout>