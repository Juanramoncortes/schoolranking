<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultadesController extends Controller
{
    //
    public function index()
    {
        //
        return view('facultades');
    }

    public function show($universidad_id)
    {
        //

        return view('facultades');
    }
    public function create()
    {
        //
        return view('registrarfacultad');
    }
}
