<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)"
                required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <div>
            <x-input-label for="apellido" :value="__('Apellido')" />
            <x-text-input id="apellido" name="apellido" type="text" class="mt-1 block w-full"
                :value="old('apellido', $user->client->apellido)" required autofocus autocomplete="apellido" />
            <x-input-error class="mt-2" :messages="$errors->get('apellido')" />
        </div>



        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
                @endif
            </div>
            @endif
        </div>

        <div>
            <x-input-label for="edad" :value="__('edad')" />
            <x-text-input id="edad" name="edad" type="number" class="mt-1 block w-full"
                :value="old('edad', $user->client->edad)" required autofocus autocomplete="edad" />
            <x-input-error class="mt-2" :messages="$errors->get('edad')" />
        </div>

        <div>
            <x-input-label for="altura" :value="__('altura')" />
            <x-text-input id="altura" name="altura" type="number" class="mt-1 block w-full"
                :value="old('altura', $user->client->altura)" required autofocus autocomplete="altura" />
            <x-input-error class="mt-2" :messages="$errors->get('altura')" />
        </div>

        <div>
            <x-input-label for="peso" :value="__('peso')" />
            <x-text-input id="peso" name="peso" type="number" class="mt-1 block w-full"
                :value="old('peso', $user->client->peso)" required autofocus autocomplete="peso" />
            <x-input-error class="mt-2" :messages="$errors->get('peso')" />
        </div>

        <div>
            <x-input-label for="objetivo" :value="__('objetivo')" />
            <select name="objetivo"
                class="client-form-field w-full rounded-lg border border-white/10 bg-zinc-900 px-3 py-2 text-zinc-100 outline-none transition focus:border-violet-400/60"
                style="color: #fff;">
                <option value="" style="color: #fff; background-color: #18181b;">Selecciona...</option>
                <option value="perder peso" {{ old('objetivo', $user->client->objetivo) == 'perder peso' ? 'selected' :
                    ''
                    }}>Perder peso</option>
                <option value="ganar masa muscular" {{ old('objetivo', $user->client->objetivo) == 'ganar masa muscular'
                    ?
                    'selected' : '' }}>Ganar masa muscular</option>
                <option value="tonificar" {{ old('objetivo', $user->client->objetivo) == 'tonificar' ? 'selected' : ''
                    }}>Tonificar</option>
                <option value="mantener forma" {{ old('objetivo', $user->client->objetivo) == 'mantener forma' ?
                    'selected' :
                    '' }}>Mantener forma</option>
                <option value="aumentar resistencia" {{ old('objetivo', $user-> client->objetivo) == 'aumentar
                    resistencia' ?
                    'selected' : '' }}>Aumentar resistencia</option>
                <option value="mejorar flexibilidad" {{ old('objetivo', $user->client->objetivo) == 'mejorar
                    flexibilidad' ?
                    'selected' : '' }}>Mejorar flexibilidad</option>
                <option value="recomposición corporal" {{ old('objetivo', $user->client->objetivo) == 'recomposición
                    corporal'
                    ? 'selected' : '' }}>Recomposición corporal</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('objetivo')" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>