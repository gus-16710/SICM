<x-guest-layout>

    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
        <div class="d-table-cell align-middle">

            <div class="text-center mt-4">
                <h1 class="h2">Confirmar correo electrónico</h1>
                <p class="lead">
                    Para continuar, verifique su dirección de correo electrónico.
                </p>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="m-sm-4">
                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-4 font-medium text-success">
                                {{ __('Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionó durante el registro.') }}
                            </div>
                        @endif

                        ¡Gracias por registrarte!<br><br> Antes de comenzar, ¿podría verificar su dirección de correo electrónico haciendo clic en el enlace que le acabamos de enviar por correo electrónico? Si no recibió el correo electrónico, con gusto le enviaremos otro.
                        <div class="mt-4 row justify-content-between">
                            <form method="POST" action="{{ route('verification.send') }}" class="col">
                                @csrf
                                <div>
                                    <x-primary-button>
                                        {{ __('Reenviar correo electrónico') }}
                                    </x-primary-button>
                                </div>
                            </form>
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
