<x-guest-layout>    
    <div class="text-center mt-4">
        <h1 class="h2">Welcome back</h1>
        <p class="lead">
            Sign in to your account to continue
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
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your email"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="form-control form-control-lg"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password"
                                        placeholder="Enter your password" />

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
                            {{ __('Remember me') }}
                          </span>
                        </label>
                      </div>                   

                    <div class="text-center mt-4">                    
                        <x-primary-button class="ml-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>    
</x-guest-layout>
