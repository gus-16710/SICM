<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    //
    public function index()
    {     
        $users = User::all();
        return response()->json($users, 200);
    }

    //
    public function validation(Request $request, $id)
    {             
        $user = User::find($id);

        if(!$user) {
            return response()->json(["message" => "Usuario no encontrado"], 404);                   
        }

        $validator = Validator::make($request->all(), [
            'nickname' => ['required', 'string', 'max:255', Rule::unique('tbl_usuarios')->ignore($id)],
            'password' => ['required'],
            'modules' => ['required'],
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 404);                   
        }
        
        $user->nickname = $request->nickname;
        $user->password = Hash::make($request->password);
        $user->alta = 1;
        $user->estadoUsuario = 1;
        $user->fechaPW = Carbon::now();
        $user->save();     
                
        $user->modules()->syncWithPivotValues($request->modules, 
            ['fechaRegistro' => Carbon::now(), 
            'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()]);

        return response()->json($user, 200);
    }
}
