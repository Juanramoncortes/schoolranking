
@extends('layouts.app')

@section('content')

            <div class="cont row">
                <div class="universidad col-md-3">
                     <div class="row">
                        <h1 id="title" class="col-12" >Universidad de Kent</h1>
                        <div class="col-12"><img src="../img/01.png" alt="" height="200px" width="200px"></div>
                        <h2 id="calificacion" class="col-12" ></h2>
                        <div class="col-12"><h4>Calificación: <span>Buena</span></h4></div>
                        <div class="col-12"><a type="button" class="btn btn-secondary" href="{{asset('facultades/index')}}">Facultades</a></div>
                                <div class="col-12"> <a href="tel:3122548691">Contacto: 3122548691</a></div>
                    </div>
                </div>
                <div class="descripcion col-md-6 mt-4">
                    <div class="row">
                        <div class="col-12">
                            <h1>Descripción</h1>
                            <p id="DescripcionUnivercidda">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut magnam aliquam consectetur molestiae, vel delectus odit aperiam. Animi velit et nesciunt provident explicabo aliquid exercitationem. Qui totam quibusdam itaque maxime.</p>

                        </div>
                        <div class="comentarios">
                                <div class="comentario col-12 mt-1">
                                        <h3 id="NombreUsario1">User1:</h3><a href="#">like</a>/<a href="#">dislike</a> <br><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dolorum nisi praesentium excepturi iure distinctio beatae quae itaque, autem consectetur harum, veniam qui. Rerum, accusamus adipisci sunt aliquid qui nam!</p>
                                    </div>
                                <div class="comentario col-12 mt-1">
                                        <h3 id="NombreUsario1">User1:</h3><a href="#">like</a>/<a href="#">dislike</a> <br><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dolorum nisi praesentium excepturi iure distinctio beatae quae itaque, autem consectetur harum, veniam qui. Rerum, accusamus adipisci sunt aliquid qui nam!</p>
                                    </div>
                                <div class="comentario col-12 mt-1">
                                        <h3 id="NombreUsario1">User1:</h3><a href="#">like</a>/<a href="#">dislike</a> <br><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dolorum nisi praesentium excepturi iure distinctio beatae quae itaque, autem consectetur harum, veniam qui. Rerum, accusamus adipisci sunt aliquid qui nam!</p>
                                    </div>
                        </div>
                    </div>

                </div>
                <div class="descripcion col-md-3 mt-4">
                    <h2>Nuevo Comentario:</h2>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                        <input class="form-group" id="comentarioUsuario" type="text"/>
                        <select name="calificion" class="form-group">
                        <option value="Exelente">Exelente</option>
                        <option value="Bueno">Bueno</option>
                        <option value="Regular">Regular</option>
                        <option value="Malo">Malo</option>
                      </select>
                      @guest

                      @if (Route::has('register'))
<br>

                            <a type="button" class="btn btn-secondary" href="{{ route('login') }}">{{ __('Comentar') }}</a>
                      @endif
                  @else
                            <a type="button" class="btn btn-secondary" href="{{ route('comentario') }}">{{ __('Comentar') }}</a>

                                  @csrf
                  @endguest
                        </form>

                </div>
            </div>

            <script>

            </script>
@endsection
