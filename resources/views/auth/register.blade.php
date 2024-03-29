<x-guest-layout>
    <div class="col-sm-10 col-md-8 col-lg-8 mx-auto d-table h-100">
        <div class="d-table-cell align-middle">

            <div class="text-center mt-4">
                <h1 class="h2">Empezar</h1>
                <p class="lead">
                    Comience a crear la mejor experiencia de usuario posible para sus clientes.
                </p>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="m-sm-4">
                        <form method="POST" action="{{ route('register') }}" class="row g-3">
                            @csrf                                       
                            <!-- Name -->
                            <div class="col-md-12">
                                <label class="text-danger fw-bold">*</label>
                                <x-input-label for="idinstitucion" :value="__('Institución')" />
                                <select id="idinstitucion" name="institucion" class="form-select" aria-label="Default select example" autofocus>
                                    <option selected disabled>Selecciona una opción</option>
                                    @foreach ($institutions as $key => $value)
                                        <option value="{{ $value->id }}" @selected(old('institucion') == $value->id)>{{ $value->nombre }}</option>
                                    @endforeach                                                                        
                                </select>
                                <x-input-error :messages="$errors->get('institucion')" class="mt-2"/>
                            </div>

                            <div id="datos-institucion" class="alert alert-primary" role="alert">                                
                            </div>

                            <!-- Name -->
                            <div class="col-md-6">
                                <label class="text-danger fw-bold">*</label>
                                <x-input-label for="nombre" :value="__('Nombre')" />
                                <x-text-input id="nombre" class="form-control form-control-lg" type="text" name="nombre" :value="old('nombre')" placeholder="Nombre"/>
                                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                            </div>

                            <!-- Apellido paterno -->
                            <div class="col-md-6">
                                <label class="text-danger fw-bold">*</label>
                                <x-input-label for="paterno" :value="__('Apellido paterno')" />
                                <x-text-input id="paterno" name="apellido_paterno" :value="old('apellido_paterno')" class="form-control form-control-lg" type="text" placeholder="Apellido paterno"/>
                                <x-input-error :messages="$errors->get('apellido_paterno')" class="mt-2" />
                            </div>

                            <!-- Apellido materno -->
                            <div class="col-md-6">
                                <label class="text-danger fw-bold">*</label>    
                                <x-input-label for="materno" :value="__('Apellido materno')" />
                                <x-text-input id="materno" name="apellido_materno" :value="old('apellido_materno')" class="form-control form-control-lg" type="text" placeholder="Apellido materno"/>
                                <x-input-error :messages="$errors->get('apellido_materno')" class="mt-2" />
                            </div>

                            <!-- Categoría -->
                            <div class="col-md-6">
                                <label class="text-danger fw-bold">*</label>    
                                <x-input-label for="categoria" :value="__('Categoría')" />
                                <x-text-input id="categoria" class="form-control form-control-lg" type="text" name="categoria" :value="old('categoria')" placeholder="Categoría"/>
                                <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
                            </div>                   

                            <!-- N° Empleado -->
                            <div class="col-md-6">
                                <label class="text-danger fw-bold">*</label>    
                                <x-input-label for="numEmpleado" :value="__('N° Empleado')" />
                                <x-text-input id="numEmpleado" class="form-control form-control-lg" type="text" name="numEmpleado" :value="old('numEmpleado')" placeholder="N° Empleado "/>
                                <x-input-error :messages="$errors->get('numEmpleado')" class="mt-2" />
                            </div>

                            <!-- Adscripción -->
                            <div class="col-md-6">
                                <label class="text-danger fw-bold">*</label>
                                <x-input-label for="adscripcion" :value="__('Adscripción')" />
                                <x-text-input id="adscripcion" class="form-control form-control-lg" type="text" name="adscripcion" :value="old('adscripcion')" placeholder="Adscripción"/>
                                <x-input-error :messages="$errors->get('adscripcion')" class="mt-2" />
                            </div>

                            <!-- Cargo -->
                            <div class="col-md-6">
                                <x-input-label for="cargo" :value="__('Cargo')" />
                                <x-text-input id="cargo" class="form-control form-control-lg" type="text" name="cargo" :value="old('cargo')" placeholder="Cargo"/>
                                <x-input-error :messages="$errors->get('cargo')" class="mt-2" />
                            </div>

                            <!-- Turno -->
                            <div class="col-md-6">
                                <x-input-label for="turno" :value="__('Turno')" />
                                <x-text-input id="turno" class="form-control form-control-lg" type="text" name="turno" :value="old('turno')" placeholder="Turno"/>
                                <x-input-error :messages="$errors->get('turno')" class="mt-2" />
                            </div>

                            <!-- Servicio -->
                            <div class="col-md-6">
                                <x-input-label for="servicio" :value="__('Servicio')" />
                                <x-text-input id="servicio" class="form-control form-control-lg" type="text" name="servicio" :value="old('servicio')" placeholder="Servicio"/>
                                <x-input-error :messages="$errors->get('servicio')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="col-md-6">
                                <label class="text-danger fw-bold">*</label>
                                <x-input-label for="email" :value="__('Correo electrónico')" />
                                <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" placeholder="Correo electrónico"/>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>                    

                            <!-- Password -->
                            <div class="col-md-6 d-none">
                                <label class="text-danger fw-bold">*</label>
                                <x-input-label for="password" :value="__('Contraseña')" />
                                <x-text-input id="password" class="form-control form-control-lg"
                                                type="password"
                                                name="password"                                                
                                                placeholder="Contraseña"
                                                />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="col-md-6 d-none">
                                <label class="text-danger fw-bold">*</label>
                                <x-input-label for="password_confirmation" :value="__('Confirma tu contraseña')" />
                                <x-text-input id="password_confirmation" class="form-control form-control-lg"
                                                type="password"
                                                name="password_confirmation"  
                                                placeholder="Confirma tu contraseña"
                                                />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <p>
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                    {{ __('¿Ya te registraste?') }}
                                </a>
                            </p> 

                            <div class="text-center">                                               
                                <x-primary-button class="ml-4">
                                    {{ __('Registrar') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</x-guest-layout>

@vite(['resources/js/pages/register.js'])