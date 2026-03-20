<x-app-layout>
    <div class="mx-auto w-full max-w-[1600px] px-4 py-6 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-12">
            <aside class="rounded-2xl border border-white/10 bg-zinc-950 p-5 lg:col-span-3 xl:col-span-2">
                <h3 class="mt-2 text-lg font-semibold text-white">Control central</h3>
                <p class="mt-1 text-sm text-zinc-400">Resumen y accesos rápidos del gimnasio.</p>

                <div class="mt-6 space-y-2">
                    <a href="{{ route('entrenadors.dashboard') }}"
                        class="block rounded-xl border border-violet-500/30 bg-violet-500/15 px-4 py-2.5 text-sm font-medium text-violet-200 transition hover:bg-violet-500/25">
                        Dashboard
                    </a>
                    <a href="{{ route('profile.edit') }}"
                        class="block rounded-xl border border-violet-500/30 bg-violet-500/15 px-4 py-2.5 text-sm font-medium text-violet-200 transition hover:bg-violet-500/25">
                        Mi perfil
                    </a>
                    <a href="{{ route('entrenamientos.index') }}"
                        class="block rounded-xl border border-white/10 bg-white/5 px-4 py-2.5 text-sm text-zinc-200 transition hover:border-violet-400/40 hover:bg-violet-500/10">
                        Entrenamientos
                    </a>
                </div>

                <div
                    class="mt-8 rounded-2xl border border-white/10 bg-gradient-to-br from-violet-500/20 via-purple-500/15 to-fuchsia-500/10 p-4">
                    <p class="text-xs uppercase tracking-wide text-violet-200/80">Estado del sistema</p>
                    <p class="mt-2 text-sm text-white">Todos los módulos operativos</p>
                    <p class="mt-1 text-xs text-zinc-300">Última actualización: {{ now()->format('d/m/Y H:i') }}</p>
                </div>
            </aside>
        </div>
</x-app-layout>