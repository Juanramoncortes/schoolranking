<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniversidadController extends Controller
{
    //
    public function index()
    {
        //
        return view('universidades');
    }
    public function show($universidad_id)
    {
        //
        return view('universidad');
    }
    public function edit($universidad_id)
    {
        //    
        
        $user =  universidad::find($universidad_id);
        return view('edituni', ['universidad' => $universidad_id]);
        
        
    }

    public function create()
    {
        //
        return view('registraruniversidad');
    }
    public function update(Request $request, $universidad_id)
    {
        //

    }

}
