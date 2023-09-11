<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class ChemotherapyController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {                        
        if(! Gate::allows('chemotherapy')) {            
            abort(401);
        }              

        return view('chemotherapy.index');                               
    }
}
