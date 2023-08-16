<x-guest-layout>
    <div class="col-sm-10 col-md-8 col-lg-8 mx-auto d-table h-100">
        <div class="d-table-cell align-middle">

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
                        <form method="POST" action="{{ route('register') }}" class="row g-3">
                            @csrf        

                            <!-- Name -->
                            <div class="col-md-6">
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="form-control form-control-lg" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter your name"/>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Apellido paterno -->
                            <div class="col-md-6">
                                <x-input-label for="paterno" :value="__('Apellido paterno')" />
                                <x-text-input id="paterno" class="form-control form-control-lg" type="text" name="paterno" :value="old('paterno')" required autofocus autocomplete="Apellido paterno" placeholder=""/>
                                <x-input-error :messages="$errors->get('paterno')" class="mt-2" />
                            </div>

                            <!-- Apellido materno -->
                            <div class="col-md-6">
                                <x-input-label for="materno" :value="__('Apellido materno')" />
                                <x-text-input id="materno" class="form-control form-control-lg" type="text" name="materno" :value="old('materno')" required autofocus autocomplete="Apellido materno" placeholder=""/>
                                <x-input-error :messages="$errors->get('materno')" class="mt-2" />
                            </div>

                            <!-- Categoría -->
                            <div class="col-md-6">
                                <x-input-label for="categoria" :value="__('Categoría')" />
                                <x-text-input id="categoria" class="form-control form-control-lg" type="text" name="categoria" :value="old('categoria')" required autofocus autocomplete="Categoría" placeholder=""/>
                                <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
                            </div>                   

                            <!-- N° Empleado -->
                            <div class="col-md-6">
                                <x-input-label for="numEmpleado" :value="__('N° Empleado')" />
                                <x-text-input id="numEmpleado" class="form-control form-control-lg" type="text" name="numEmpleado" :value="old('numEmpleado')" required autocomplete="N° Empleado" placeholder=""/>
                                <x-input-error :messages="$errors->get('numEmpleado')" class="mt-2" />
                            </div>

                            <!-- Adscripción -->
                            <div class="col-md-6">
                                <x-input-label for="adscripcion" :value="__('Adscripción')" />
                                <x-text-input id="adscripcion" class="form-control form-control-lg" type="text" name="adscripcion" :value="old('adscripcion')" required autocomplete="Adscripción" placeholder=""/>
                                <x-input-error :messages="$errors->get('adscripcion')" class="mt-2" />
                            </div>

                            <!-- Cargo -->
                            <div class="col-md-6">
                                <x-input-label for="cargo" :value="__('Cargo')" />
                                <x-text-input id="cargo" class="form-control form-control-lg" type="text" name="cargo" :value="old('cargo')" required autocomplete="Cargo" placeholder=""/>
                                <x-input-error :messages="$errors->get('cargo')" class="mt-2" />
                            </div>

                            <!-- Turno -->
                            <div class="col-md-6">
                                <x-input-label for="turno" :value="__('Turno')" />
                                <x-text-input id="turno" class="form-control form-control-lg" type="text" name="turno" :value="old('turno')" required autocomplete="Turno" placeholder=""/>
                                <x-input-error :messages="$errors->get('turno')" class="mt-2" />
                            </div>

                            <!-- Servicio -->
                            <div class="col-md-6">
                                <x-input-label for="servicio" :value="__('Servicio')" />
                                <x-text-input id="servicio" class="form-control form-control-lg" type="text" name="servicio" :value="old('servicio')" required autocomplete="Servicio" placeholder=""/>
                                <x-input-error :messages="$errors->get('servicio')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="col-md-6">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Enter your email"/>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>                    

                            <!-- Password -->
                            <div class="col-md-6">
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
                            <div class="col-md-6">
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
        </div>
    </div>
</x-guest-layout>
