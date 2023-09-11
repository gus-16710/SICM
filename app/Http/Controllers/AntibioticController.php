<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AntibioticController extends Controller
{
    //
      /**
     * Display a listing of the resource.
     */
    public function index()
    {                     
        if(! Gate::allows('antibiotic')) {            
            abort(401);
        }  
                                    
        return view('antibiotic.index');                   
    }
}
