<x-guest-layout>    
    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
        <div class="d-table-cell align-middle">

            <div class="text-center mt-4">
                <h1 class="h2">Bienvenido de nuevo</h1>
                <p class="lead">
                    Inicia sesión en tu cuenta para continuar
                </p>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="m-sm-4">
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4 text-success" :status="session('status')" />
                        
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="mb-3">
                                <x-input-label for="usuario" :value="__('Usuario')" />
                                <x-text-input id="usuario" class="form-control form-control-lg" type="text" name="usuario" :value="old('usuario')" autofocus placeholder="Usuario" required/>
                                <x-input-error :messages="$errors->get('usuario')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <x-input-label for="password" :value="__('Contraseña')" />

                                <x-text-input id="password" class="form-control form-control-lg"
                                                type="password"
                                                name="password"
                                                required
                                                autocomplete="current-password"
                                                placeholder="Contraseña" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                @if (Route::has('password.request'))
                                    <small>
                                        <a href="{{ route('password.request') }}">Forgot password?</a>
                                    </small>
                                @endif
                            </div>

                            <!-- Remember Me -->
                            <div>
                                <label for="remember_me" class="form-check">
                                <input
                                    id="remember_me"
                                    type="checkbox"
                                    class="form-check-input"                                                        
                                    name="remember"                            
                                />
                                <span class="form-check-label">
                                    {{ __('Recuérdame') }}
                                </span>
                                </label>
                            </div>                   

                            <div class="text-center mt-4">                    
                                <x-primary-button class="ml-3">
                                    {{ __('Iniciar sesión') }}
                                </x-primary-button>
                                <small class="d-block mt-4">
                                    ¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrate</a>
                                </small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</x-guest-layout>
