@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form class="form-horizontal" method="post">
                        <fieldset>
                            <legend class="text-center header">Registro de Universidad</legend>

                            <div class="form-group" >    
                                <label for="nombre_universidad" class=etiqueta_control>Nuevo Nombre de la Universidad</label>
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-university"></i></span>
                                <div class="col-md-8">
                                    <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="nombre_universidad" class=etiqueta_control>Nuevo Teléfono</label>
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                    <div class="col-md-8">
                                        <input id="phone" name="phone" type="text" placeholder="Numero de teléfono" class="form-control">
                                    </div>
                            </div>
                            
                            <div>
                            <label for="nombre_universidad" class=etiqueta_control>Nuevo Estado</label>
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-address-card-o"></i></span>
                                        <select id="estado" name="estado"></select>
                            </div>

                            <div class="form-group">
                            <label for="nombre_universidad" class=etiqueta_control>Nuevo Municipio</label>
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-map-marker"></i></span>
                                    <select id="municipio" name="municipio"></select>
                                    <label for="municipio"></label> 
                            </div>

                            <div class="form-group">
                            <label for="nombre_universidad" class=etiqueta_control>Descripción Actualizada</label>
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                                 <textarea class="form-control" id="message" name="Descripción" placeholder="Ingresa una descripción de la universidad." rows="7"></textarea>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
