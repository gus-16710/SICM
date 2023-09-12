<section>  
    <div class="col-12 col-12">
        <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Actualiza contraseña</h5>
        </div>
        <div class="card-body">
            <p class="card-text">
                Asegúrese de que su cuenta utilice una contraseña larga y aleatoria para mantenerse segura.
            </p> 
            <form method="post" action="{{ route('password.update') }}" class="space-y-6">
                @csrf
                @method('put')

                <div class="mt-3">
                    <x-input-label for="current_password" :value="__('Contraseña actual')" />
                    <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>

                <div class="mt-3">
                    <x-input-label for="password" :value="__('Nueva contraseña')" />
                    <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>

                <div class="mt-3">
                    <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />
                    <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center gap-4 mt-3">
                    <x-primary-button>{{ __('Guardar') }}</x-primary-button>

                    @if (session('status') === 'password-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-success"
                        >{{ __('Salvado.') }}</p>
                    @endif
                </div>
            </form>  
        </div>
        </div>
    </div>    
</section>
