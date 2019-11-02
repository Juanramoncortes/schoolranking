
@extends('layouts.app')

@section('content')
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ml-4">
                            <a class="nav-link" href="../">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item ml-4">
                            <a class="nav-link" href="#">Conócenos</a>
                        </li>
                        <li class="nav-item active ml-4">
                            <a class="nav-link" href="#">Universidades</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" onkeyup="search()" placeholder="Search" aria-label="Search" id="Search">
                        <button type="button" class="btn btn-success my-2 my-sm-0">Login</button>
                    </form>
                </div>
            </nav>

            <div class="flex-container" id="Universidades">

            </div>

            <script type="text/javascript">
                Universidades();
             </script>

@endsection
