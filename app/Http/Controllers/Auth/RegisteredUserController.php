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
            'apellido_paterno' => ['required', 'string', 'max:50'],
            'apellido_materno' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'categoria' => ['required', 'string', 'max:35'],
            'numEmpleado' => ['required', 'string', 'max:25'],
            'adscripcion' => ['required', 'string', 'max:50'],
            'cargo' => ['max:50'],
            'turno' => ['max:50'],
            'servicio' => ['max:50'],
            'institucion' => ['required'],                                
        ]);

        $user = User::create([            
            'nombre' => $request->nombre,
            'paterno' => $request->apellido_paterno,
            'materno' => $request->apellido_materno,
            'mail' => $request->email,
            'categoria' => $request->categoria,
            'numEmpleado' => $request->numEmpleado,
            'adscripcion' => $request->adscripcion,
            'cargo' => $request->cargo,
            'turno' => $request->turno,
            'servicio' => $request->servicio,   
            'idinstitucion' => $request->institucion,                                
            'name' => $request->nombre,
            'email' => $request->email,             
            'nickname' => fake()->numerify('user-####'),
            'password' => Hash::make('12345678'),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
