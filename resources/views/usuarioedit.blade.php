
@extends('layouts.app')

@section('content')
<div class="container">
        <form class="form-group" id="update-form" method="post" action="{{ route('profile.update', [Auth::user()->id]) }}">
                {{ method_field('PUT') }}
            <h2>Nombre</h2>
                    <input name="name" class="form-group" type="text" value=" {{ $user->name }}" />
                    <h2>Email</h2>
                    <input name="email" class="form-group" type="email" value=" {{ $user->email }}" />
                    <h2>Estado</h2>
                        <select id="estado" name="estado">
                            <option value="{{ $user->estado }}">{{ $user->estado }}</option>
                        </select>
                        <h2>Municipio</h2>

                        <select id="municipio" name="municipio">
                            <option value="{{ $user->municipio }}">{{ $user->municipio }}</option>
                        </select>

<br>
                    <a class="btn btn-success" type="button"
                                       onclick="event.preventDefault();
                                                     document.getElementById('update-form').submit();">
Actualizar
                                    </a>
                                    {{ csrf_field() }}

        </form>

</div>

@endsection
