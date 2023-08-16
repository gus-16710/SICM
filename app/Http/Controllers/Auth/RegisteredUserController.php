<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'paterno' => ['required', 'string', 'max:50'],
            'materno' => ['required', 'string', 'max:50'],
            'categoria' => ['required', 'string', 'max:35'],
            'numEmpleado' => ['required', 'string', 'max:25'],
            'adscripcion' => ['required', 'string', 'max:50'],
            'cargo' => ['required', 'string', 'max:50'],
            'turno' => ['required', 'string', 'max:50'],
            'servicio' => ['required', 'string', 'max:50'],

            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'nombre' => $request->name,
            'paterno' => $request->paterno,
            'materno' => $request->materno,
            'mail' => $request->email,
            'categoria' => $request->categoria,
            'numEmpleado' => $request->numEmpleado,
            'adscripcion' => $request->adscripcion,
            'cargo' => $request->cargo,
            'turno' => $request->turno,
            'servicio' => $request->servicio,

            'name' => $request->name,
            'email' => $request->email,            
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
