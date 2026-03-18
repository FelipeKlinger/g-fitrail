<x-guest-layout>
    <div class="w-full max-w-2xl pt-2">
        <div class="mx-auto mb-8 flex items-center justify-center gap-2 text-4xl font-semibold tracking-tight">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-8 w-8 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672Zm-7.518-.267A8.25 8.25 0 1 1 20.25 10.5M8.288 14.212A5.25 5.25 0 1 1 17.25 10.5" />
            </svg>
            <span>Fitrail</span>
        </div>

        <div class="relative mx-auto w-full max-w-xl">
            <div class="h-px w-full bg-gradient-to-r from-transparent via-sky-300 to-transparent"></div>
            <div class="mx-2 mt-0 rounded-xl border border-white/20 bg-black/70 shadow-[0_0_30px_0_rgba(255,255,255,0.08)] sm:mx-0">
                <div class="p-6">
                    <h3 class="text-3xl font-semibold tracking-tight text-white">Login</h3>
                    <p class="mt-1.5 text-sm text-white/50">Welcome back, enter your credentials to continue.</p>
                </div>

                <div class="p-6 pt-0">
                    <x-auth-session-status class="mb-4 text-sm text-emerald-300" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="group relative rounded-lg border border-white/30 px-3 pb-1.5 pt-2.5 transition duration-200 focus-within:border-sky-200 focus-within:ring focus-within:ring-sky-300/30">
                            <div class="flex items-center justify-between">
                                <label for="email" class="text-xs font-medium text-gray-400 group-focus-within:text-white">Username</label>
                            </div>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Username" required autofocus autocomplete="username"
                                class="block w-full border-0 bg-transparent p-0 text-sm text-white placeholder:text-zinc-500 focus:outline-none focus:ring-0 sm:leading-7" />
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-xs text-rose-300" />

                        <div class="mt-4 group relative rounded-lg border border-white/30 px-3 pb-1.5 pt-2.5 transition duration-200 focus-within:border-sky-200 focus-within:ring focus-within:ring-sky-300/30">
                            <div class="flex items-center justify-between">
                                <label for="password" class="text-xs font-medium text-gray-400 group-focus-within:text-white">Password</label>
                            </div>
                            <input id="password" type="password" name="password" required autocomplete="current-password"
                                class="block w-full border-0 bg-transparent p-0 text-sm text-white placeholder:text-zinc-500 focus:outline-none focus:ring-0 sm:leading-7" />
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-xs text-rose-300" />

                        <div class="mt-4 flex items-center justify-between">
                            <label for="remember_me" class="flex items-center gap-2">
                                <input id="remember_me" type="checkbox" name="remember" class="rounded border-white/30 bg-transparent focus:outline focus:outline-sky-300">
                                <span class="text-xs text-zinc-200">Remember me</span>
                            </label>

                            @if (Route::has('password.request'))
                                <a class="text-sm font-medium underline" href="{{ route('password.request') }}">Forgot password?</a>
                            @endif
                        </div>

                        <div class="mt-4 flex items-center justify-end gap-x-2">
                            <a href="{{ route('register') }}" class="inline-flex h-10 items-center justify-center rounded-md px-4 py-2 text-sm font-medium transition duration-200 hover:bg-white/10 hover:ring hover:ring-white/40">
                                Register
                            </a>
                            <button type="submit" class="inline-flex h-10 items-center justify-center rounded-md bg-white px-4 py-2 text-sm font-semibold text-black transition duration-300 hover:bg-black hover:text-white hover:ring hover:ring-white">
                                Log in
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
