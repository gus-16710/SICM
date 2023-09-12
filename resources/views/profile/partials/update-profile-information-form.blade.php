<section>    
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <div class="col-12 col-12">
        <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Informacion del perfíl</h5>
        </div>
        <div class="card-body">
            <p class="card-text">
                Actualice la información del perfil y la dirección de correo electrónico de su cuenta.
            </p>
            <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
                @csrf
                @method('patch')

                <div class="mb-3">
                    <x-input-label for="name" :value="__('Nombre')" />
                    <x-text-input id="name" name="name" type="text" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

                <div>
                    <x-input-label for="email" :value="__('Correo Electrónico')" />
                    <x-text-input id="email" name="email" type="email" :value="old('email', $user->email)" required autocomplete="username" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-2 text-gray-800">
                                {{ __('Su dirección de correo electrónico no está verificada.') }}

                                <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ __('Haga clic aquí para volver a enviar el correo electrónico de verificación.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600">
                                    {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>

                <div class="flex items-center gap-4 mt-3">
                    <x-primary-button>{{ __('Guardar') }}</x-primary-button>

                    @if (session('status') === 'profile-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-success mt-3"
                        >{{ __('Salvado.') }}</p>
                    @endif
                </div>
            </form>
        </div>
        </div>
    </div>   
</section>
