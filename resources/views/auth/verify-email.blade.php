<x-guest-layout>

    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
        <div class="d-table-cell align-middle">

            <div class="text-center mt-4">
                <h1 class="h2">Verify your email</h1>
                <p class="lead">
                    To continue, please verify your email address.
                </p>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="m-sm-4">
                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-4 font-medium text-success">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif

                        Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.                
                        <div class="mt-4 row justify-content-between">
                            <form method="POST" action="{{ route('verification.send') }}" class="col">
                                @csrf
                                <div>
                                    <x-primary-button>
                                        {{ __('Resend Verification Email') }}
                                    </x-primary-button>
                                </div>
                            </form>
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
