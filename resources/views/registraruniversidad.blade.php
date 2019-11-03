@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                        <form class="form-group" id="Uni" method="post" action="{{ route('universidad.store') }}">

                            <legend class="text-center header">Registro de Universidad</legend>

                            <div class="form-group" >
                                <label for="name" class=etiqueta_control>Nombre de la Universidad</label>
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-university"></i></span>
                                <div class="col-md-8">
                                    <input id="name" name="nombre" type="text" placeholder="Nombre" class="form-control">
                                </div>
                            </div>
                            <div>
                            <label for="estado" class=etiqueta_control>Estado</label>
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-address-card-o"></i></span>
                                        <select id="estado" name="estado"></select>
                            </div>

                            <div class="form-group">
                            <label for="municipio" class=etiqueta_control>Nuevo Municipio</label>
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-map-marker"></i></span>
                                    <select id="municipio" name="municipio"></select>
                                    <label for="municipio"></label>
                            </div>

                            <div class="form-group">
                            <label for="message" class=etiqueta_control>Descripción Actualizada</label>
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                 <textarea class="form-control" id="message" name="descripcion" placeholder="Ingresa una descripción de la universidad." rows="7"></textarea>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                        <a class="btn btn-success" type="button"
                                        onclick="event.preventDefault();
                                                      document.getElementById('Uni').submit();">
 Actualizar
                                     </a>
                                     {{ csrf_field() }}
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
