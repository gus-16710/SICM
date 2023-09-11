<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ParenteralController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {                   
        if(! Gate::allows('parenteral')) {            
            abort(401);
        }  
                                      
        return view('parenteral.index');                   
    }
}
