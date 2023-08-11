<x-guest-layout>

    <div class="text-center mt-4">
        <h1 class="h2">Get started</h1>
        <p class="lead">
            Start creating the best possible user experience for you
            customers.
        </p>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="m-sm-4">
                <form method="POST" action="{{ route('register') }}">
                    @csrf        

                    <!-- Name -->
                    <div class="mb-3">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="form-control form-control-lg" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter your name"/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mb-3">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Enter your email"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="form-control form-control-lg"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" 
                                        placeholder="Enter your password"
                                        />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input id="password_confirmation" class="form-control form-control-lg"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Confirm your password"
                                        />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <p>
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </p> 

                    <div class="text-center">                                               
                        <x-primary-button class="ml-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>   
</x-guest-layout>
