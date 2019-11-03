
@extends('layouts.app')

@section('content')

            <div class="cont row">
                <div class="universidad col-md-3">
                     <div class="row">
                        <h1 id="title" class="col-12" >Universidad de Kent</h1>
                        <div class="col-12"><img src="../img/01.png" alt="" height="200px" width="200px"></div>
                        <h2 id="calificacion" class="col-12" ></h2>
                        <div class="col-12"><h4>Calificación: <span>Buena</span></h4></div>
                        <div class="col-12"><a type="button" class="btn btn-secondary" href="{{route('facultades.show',$universidad->id)}}">Agregar.Facultades</a></div>
                        <div class="col-12"><a type="button" class="btn btn-secondary" href="{{route('facultades.create',$universidad->id)}}">Agregar.Facultades</a></div>

                    </div>
                </div>
                <div class="descripcion col-md-8 mt-4">
                        <h2 class="text-center">Facultades</h2>

                        <div class="flex-container" id="Universidades">

                            </div>
            </div>
            </div>
            <div class="col-12"><a type="button" class="btn btn-secondary" href="{{asset('facultades/create')}}">Registrar Nueva Facultad</a></div>
            <script>facultades();
            </script>
@endsection
