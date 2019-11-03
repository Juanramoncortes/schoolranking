<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\University;


class UniversidadController extends Controller
{
    //
    public function index()
    {
        //
        $University = DB::table('university')
        ->get();

        return view('universidades', ['Univercitys' => $University]);
    }
    public function show($universidad_id)
    {
        //
        return view('universidad');
    }
    public function edit($universidad_id)
    {
        //
         $universidad_id =  University::find($universidad_id );

        return view('edituni', ['universidad' => $universidad_id]);


    }
    public function store(Request $request)
    {  // Validate the request...

        $Universidad = new University;

        $Universidad->nombre = $request->nombre;
        $Universidad->descripcion = $request->descripcion;
        $Universidad->estado = $request->estado;
        $Universidad->municipio = $request->municipio;

        $Universidad->save();


        return redirect()->action('UniversidadController@index');


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
