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
    }

    public function create()
    {
        //
        return view('reguni');
    }
    public function update(Request $request, $universidad_id)
    {
        //

    }

}
