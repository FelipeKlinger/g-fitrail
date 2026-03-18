<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-white">Crear entrenamiento</h2>
    </x-slot>

    <div class="mx-auto w-full max-w-[1600px] px-4 py-6 sm:px-6 lg:px-8">
        <section class="mx-auto w-full max-w-3xl rounded-2xl border border-white/10 bg-zinc-950 p-6">
            <div class="mb-6 flex items-center justify-between">
                <div>
                    <p class="text-sm text-zinc-400">Administración de entrenamientos</p>
                    <h1 class="mt-1 text-2xl font-semibold text-white">Nuevo entrenamiento</h1>
                </div>
                <a href="{{ route('entrenamientos.index') }}" class="rounded-lg border border-white/10 bg-white/5 px-3 py-2 text-sm text-zinc-200 hover:bg-white/10">
                    Volver al listado
                </a>
            </div>

            <form action="{{ route('entrenamientos.store') }}" method="POST" class="space-y-5">
                @csrf
                @include('entrenamientos._form', compact('entrenadors'))
            </form>
        </section>
    </div>
</x-app-layout>