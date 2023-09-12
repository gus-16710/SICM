<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    //
    public function index()
    {     
        $modules = Module::all();
        return response()->json($modules, 200);
    }
}
