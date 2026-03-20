<x-guest-layout>
    <div class="w-full max-w-2xl pt-6">
        <div class="mx-auto mb-8 flex items-center justify-center gap-2 text-4xl font-semibold tracking-tight">
            <span class="text-3xl">Registrate en Fitrail</span>
        </div>

        <div class="relative mx-auto w-full max-w-xl">
            <div class="h-px w-full bg-gradient-to-r from-transparent via-violet-300 to-transparent"></div>
            <div
                class="mx-2 mt-0 rounded-xl border border-white/10 bg-zinc-900  shadow-[0_0_30px_0_rgba(255,255,255,0.08)] sm:mx-0">
                <div class="p-6">
                    <h3 class="text-3xl font-semibold tracking-tight text-white">Registrarse</h3>
                    <p class="mt-1.5 text-sm text-white/50">Crea tu cuenta y comienza tu viaje de entrenamiento.</p>
                </div>

                <div class="p-6 pt-0">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div
                            class="group relative px-3 pb-1.5 pt-2.5 ">
                            <label for="name"
                                class="text-xs font-medium text-gray-400 group-focus-within:text-white">Nombre</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Nombre"
                                required autofocus autocomplete="name"
                                class="block w-full rounded-lg bg-black" />
                        </div>
                        <x-input-error :messages="$errors->get('name')" class="mt-2 text-xs text-white" />

                        <div
                            class="mt-4 group relative px-3 pb-1.5 pt-2.5">
                            <label for="apellido"
                                class="text-xs font-medium text-gray-400 group-focus-within:text-white">Apellido</label>
                            <input id="apellido" type="text" name="apellido" value="{{ old('apellido') }}"
                                placeholder="Apellido" required autocomplete="apellido"
                                class="block w-full rounded-lg bg-black" />
                        </div>
                        <x-input-error :messages="$errors->get('apellido')" class="mt-2 text-xs text-white" />

                        <div
                            class="mt-4 group relative px-3 pb-1.5 pt-2.5">
                            <label for="email"
                                class="text-xs font-medium text-gray-400 group-focus-within:text-white">Email</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                                required autocomplete="username"
                                class="block w-full rounded-lg bg-black" />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-xs text-white" />

                        <div
                            class="mt-4 group relative px-3 pb-1.5 pt-2.5">
                            <label for="password"
                                class="text-xs font-medium text-gray-400 group-focus-within:text-white">Contraseña</label>
                            <input id="password" type="password" name="password" required autocomplete="new-password"
                                class="block w-full rounded-lg bg-black" />
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-xs text-white" />

                        <div
                            class="mt-4 group relative px-3 pb-1.5 pt-2.5">
                            <label for="password_confirmation"
                                class="text-xs font-medium text-gray-400 group-focus-within:text-white">Confirmar
                                contraseña</label>
                            <input id="password_confirmation" type="password" name="password_confirmation" required
                                autocomplete="new-password"
                                class="block w-full rounded-lg bg-black" />
                        </div>
                        <x-input-error :messages="$errors->get('password_confirmation')"
                            class="mt-2 text-xs text-white" />

                        <div class="mt-4 flex items-center justify-end gap-4">
                            <a href="{{ route('login') }}"
                                class="inline-flex h-10 items-center justify-center rounded-xl px-3 text-sm font-medium border border-white/10 text-zinc-200 transition duration-300 hover:border-violet-400/40 hover:text-white">
                                Iniciar Sesión
                            </a>
                            <button type="submit"
                                class="inline-flex h-10 items-center justify-center rounded-xl border  border-violet-500/30 bg-violet-500/15 px-4 py-2 text-sm font-semibold text-zin-200 transition duration-300 hover:border-violet-400/40 hover:bg-violet-500/10">
                                Registrarse
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>