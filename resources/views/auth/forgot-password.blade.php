<x-guest-layout>   
   <div class="text-center mt-4">
        <h1 class="h2">Forgot your password?</h1>   
        <p class="lead">
            Enter your account email address
        </p>     
    </div>

    <div class="card">
        <div class="card-body">
            <div class="m-sm-4">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4 text-success" :status="session('status')" />
                Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.               
                
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="text-center mt-4">
                        <x-primary-button>
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>            
</x-guest-layout>
