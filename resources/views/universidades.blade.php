
@extends('layouts.app')

@section('content')
<div class="col-12 text-center">

@guest
@if (Route::has('register'))
<br>

      <a type="button" class="btn btn-secondary" href="{{ route('login') }}">{{ __('Agregar Universidad') }}</a>
@endif
@else
      <a type="button" class="btn btn-secondary" href="{{ route('universidad.create') }}">{{ __('Agregar Universidad') }}</a>

            @csrf
@endguest
</div>
            <div class="flex-container" id="Universidades">
                    @foreach ($Univercitys as $Univercity)

                        <div>
                                <a href="{{asset('universidad')}}"><img src="{{asset('img/01.png')}}" alt="" height="200px" width="200px">
                                <p class="text-center">{{$Univercity->nombre}}</p>
                                </a></div>


                    @endforeach
            </div>


@endsection
