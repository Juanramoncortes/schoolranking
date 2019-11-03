<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($user_id)
    {

        }
    public function edit()
    {
        $id= Auth::user()->id;

    }

    public function update(Request $request, $user_id)
    {
        //
    }

}
