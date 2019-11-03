<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>SchoolRanking</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/universidades.css" rel="stylesheet">
    <script src="../js/schoolranking.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand ml-4" href="#">SchoolRanking</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
       
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ml-4">
                    <a class="nav-link" href="inicio">Home <span class="sr-only">(current)</span></a>
                </li>
                
               
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" onkeyup="search()" placeholder="Search" aria-label="Search" id="Search">
                <button type="button" class="btn btn-success my-2 my-sm-0">Login</button>
            </form>
        </div>
    </nav>
   
    <div class="conocenos mt-4" > <!-- Objetivo - Fernando -->
            <h1 class="text-center">¿QUE SOMOS?</h1>
            <p class="text-justify mt-5" >Hola que tal amigo espero estes de lo mejor, te saludan con mucho gusto tus amigos de SchoolRanking,  si accediste aqui es para saber mas acerca de nosotros y nuestra vision, bueno te contare, nuestro objetivo
            del desarrollo este sitio web es el facilitarte tanto a ti como a estudiantes que a saber mas acerca sobre las escuelas podiendo  que te interesan y ayudarte a determinar cual seria tu mejor opcion a 
            partir de las reseñas de demas usuarios de los que tu tambien formas parte, igualmente si tu ya estas en una carrera puedes apoyar a que mas personas tengan una idea de que universidades y carreras que podrian
            ser mas convenientes a partir del poder dar tu opinion sobre la carrera que te encuentras estudiando, como de igual forma de las instalaciones, planes de trabajo, profesores y demas opciones .</p>
        </div>
  
<div class="flex-container" id="Universidades">
        
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
        $(document).ready(Univercidades());
    </script>
</body>

</html>