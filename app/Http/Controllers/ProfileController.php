<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function show($user_id)
    {
        $user =  User::find(Auth::user()->id);
        return view('usuario', ['user' => $user]);
        }
    public function edit($user_id)
    {

        $user =  User::find(Auth::user()->id );
          return view('usuarioedit', ['user' => $user]);

    }

    public function update(Request $request, User $user)
    {
        $user =  User::find(Auth::user()->id);

        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);
        $nombre= $request->input('name');
        $email= $request->input('email');
        $estado= $request->input('estado');
        $municipio= $request->input('municipio');

        $user->name=$nombre;
        $user->email=$email;
        $user->estado=$estado;
        $user->municipio=$municipio;
        $user -> save();


        return redirect()->route('profile.show',Auth::user()->id)
                        ->with('success','Product updated successfully');

    }

}
