<x-guest-layout>

    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
        <div class="d-table-cell align-middle">

            <div class="text-center mt-4">
                <h1 class="h2">Your status is not verified</h1>
                <p class="lead">
                    To continue, please verify your status.
                </p>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="m-sm-4">                        
                        Thanks for verifing your email! Before getting started, we are validating your status.                
                        <div class="mt-4 row justify-content-center">                            
                            <form method="POST" action="{{ route('logout') }}" class="col-auto">
                                @csrf
                                <button type="submit" class="btn btn-ligth">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>               
</x-guest-layout>
