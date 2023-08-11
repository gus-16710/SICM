<section class="space-y-6"> 
    <div class="col-12 col-12">
        <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Delete Account</h5>
        </div>
        <div class="card-body">
            <p class="card-text">
            Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
            </p>            
            <button type="button" id="btn-open-modal" class="btn btn-danger">Delete Account</button>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Account</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">            
                    <h4>Are you sure you want to delete your account?</h4>
                    <p>Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.</p>
                    <div>
                        <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                        <x-text-input
                            id="password"
                            name="password"
                            type="password"
                            class="mt-1 block w-3/4"
                            placeholder="{{ __('Password') }}"
                            autofocus
                        />

                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete Account</button>
                </div>
            </form>
        </div>
    </div>
    </div>        
</section>
