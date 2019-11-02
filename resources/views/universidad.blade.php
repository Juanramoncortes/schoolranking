<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>SchoolRanking-Universidades</title>
    <link href="../css/universidades.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <script src="../js/schoolranking.js"></script>


    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand ml-4" href="#">SchoolRanking</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ml-4">
                            <a class="nav-link" href="../">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ml-4">
                                <a class="nav-link" href="#">Conócenos</a>
                            </li>

                        <li class="nav-item active ml-4">
                            <a class="nav-link" href="universidades/">Universidades</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" onkeyup="search()" placeholder="Search" aria-label="Search" id="Search">
                        <button type="button" class="btn btn-success my-2 my-sm-0">Login</button>
                    </form>
                </div>
            </nav>

            <div class="cont row">
                <div class="universidad col-md-3">
                     <div class="row">
                        <h1 id="title" class="col-12" >Universidad de Kent</h1>
                        <div class="col-12"><img src="../img/01.png" alt="" height="200px" width="200px"></div>
                        <h2 id="calificacion" class="col-12" ></h2>
                        <div class="col-12"><h4>Calificación: <span>Buena</span></h4></div>
                        <div class="col-12"><button type="button" class="btn btn-secondary">Facultades</button></div>
                            <div class="col-12"> <button type="button" class="btn btn-secondary">Rese</button></div>
                                <div class="col-12"> <a href="tel:3122548691">Contacto: 3122548691</a></div>
                    </div>
                </div>
                <div class="descripcion col-md-6 mt-4">
                    <div class="row">
                        <div class="col-">
                            <h1>Descripción</h1>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
            </script>
            <script>
                $(document).ready(Universidades());
            </script>



        </div>
    </body>
</html>
