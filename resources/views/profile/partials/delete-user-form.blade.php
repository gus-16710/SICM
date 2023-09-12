<section class="space-y-6"> 
    <div class="col-12 col-12">
        <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Borrar cuenta</h5>
        </div>
        <div class="card-body">
            <p class="card-text">
                Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán permanentemente. Antes de eliminar su cuenta, descargue cualquier dato o información que desee conservar.
            </p>            
            <button type="button" id="btn-open-modal" class="btn btn-danger">Borrar Cuenta</button>
        </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="modal-delete-user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-open="{{ $errors->userDeletion->isNotEmpty() }}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="post" action="{{ route('profile.destroy') }}">
                @csrf
                @method('delete')
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Borrar Cuenta</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">            
                    <h4>¿Estás seguro de que quieres eliminar tu cuenta?</h4>
                    <p>Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán permanentemente. Ingrese su contraseña para confirmar que desea eliminar permanentemente su cuenta.</p>
                    <div>
                        <x-input-label for="password" value="{{ __('Contraseña') }}" class="sr-only" />

                        <x-text-input
                            id="password"
                            name="password"
                            type="password"
                            class="mt-1 block w-3/4"
                            placeholder="{{ __('Contraseña') }}"
                            autofocus
                        />

                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Borrar Cuenta</button>
                </div>
            </form>
        </div>
    </div>
    </div>        
</section>
