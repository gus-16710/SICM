<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Institution;
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
     * Get institurions list.
     */
    public function institutions(Request $request)    
    {
        $institution = Institution::find($request->id);
        return response()->json($institution, 200);
    }
    
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register', ['institutions' => Institution::all()]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([            
            'nombre' => ['required', 'string', 'max:255'],
            'paterno' => ['required', 'string', 'max:50'],
            'materno' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'categoria' => ['required', 'string', 'max:35'],
            'numEmpleado' => ['required', 'string', 'max:25'],
            'adscripcion' => ['required', 'string', 'max:50'],
            'cargo' => ['max:50'],
            'turno' => ['max:50'],
            'servicio' => ['max:50'],
            'idinstitucion' => ['required'],                    
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([            
            'nombre' => $request->nombre,
            'paterno' => $request->paterno,
            'materno' => $request->materno,
            'mail' => $request->email,
            'categoria' => $request->categoria,
            'numEmpleado' => $request->numEmpleado,
            'adscripcion' => $request->adscripcion,
            'cargo' => $request->cargo,
            'turno' => $request->turno,
            'servicio' => $request->servicio,   
            'idinstitucion' => $request->idinstitucion,                    
            'password' => Hash::make($request->password),
            'name' => $request->nombre,
            'email' => $request->email, 
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
