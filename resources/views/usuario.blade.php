
@extends('layouts.app')

@section('content')
<div class="container">
<div class="form-group">
<h2>Nombre</h2>
    <input class="form-group" type="text" value=" {{ $user->name }}" disabled/>
    <h2>Email</h2>
    <input class="form-group" type="email" value=" {{ $user->email }}" disabled/>
    <h2>Estado</h2>

    <input class="form-group" type="estado" value=" {{ $user->estado }}" disabled/>
    <h2>Municipio</h2>

    <input class="form-group" type="municipio" value=" {{ $user->municipio }}" disabled/> <br>
    <a class="btn btn-success" type="button" href="{{ route('profile.edit', [Auth::user()->id]) }}"> Editar </a>
</div>



</div>

@endsection
