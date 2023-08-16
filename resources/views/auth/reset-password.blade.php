<x-guest-layout>
    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
        <div class="d-table-cell align-middle">

            <div class="text-center mt-4">
                <h1 class="h2">Reset your password</h1>
                <p class="lead">
                    Enter the required information
                </p>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="m-sm-4">
                    <form method="POST" action="{{ route('password.store') }}">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="form-control form-control-lg"
                                                type="password"
                                                name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="text-center mt-4">
                            <x-primary-button>
                                {{ __('Reset Password') }}
                            </x-primary-button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>      
    </div>
</x-guest-layout>
