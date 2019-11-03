<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function show($user_id)
    {

        }
    public function edit($user_id)
    {
        $user =  User::find($user_id);
          return view('usuarioedit', ['user' => $user]);

    }

    public function update(Request $request, $user_id)
    {
        //
    }

}
