<x-guest-layout>

    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
        <div class="d-table-cell align-middle">

            <div class="text-center mt-4">
                <h1 class="h2">Tu estado no está verificado</h1>
                <p class="lead">
                    Para continuar, verifique su estado.
                </p>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="m-sm-4">                        
                        ¡Gracias por verificar tu correo electrónico! Antes de comenzar, estamos validando su estado.
                        <div class="mt-4 row justify-content-center">                            
                            <form method="POST" action="{{ route('logout') }}" class="col-auto">
                                @csrf
                                <button type="submit" class="btn btn-ligth">
                                    {{ __('Salir') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>               
</x-guest-layout>
