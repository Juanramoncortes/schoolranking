@extends('layouts.app')

@section('content')

            <div class="cont row">
                <div class="login-form col-md-4">
                    <div class="main-div">

                        <form action="Models/Login.php" method="post" id="Registro">

                            <div class="form-group mt-3">


                                <input type="text" name="Nombre" class="form-control" id="Name"
                                    placeholder="Nombre de Usuario" required>

                            </div>

                            <div class="form-group mt-3">


                                <input type="email" name="Email" class="form-control" id="Mail" placeholder="Email"
                                    required>

                            </div>

                            <div class="form-group mt-3">

                                <input type="password" name="Pass" class="form-control" id="Password"
                                    placeholder="Contraseña" required>

                            </div>

                            <button type="submit" class="btn btn-success">Registro</button>
                        </form>
                    </div>
                </div>
                <div class="objetivo col-md-6 mt-4">
                    <h1 class="text-center" id="title">Objetivo</h1>
                    <p class="text-justify p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates facere magnam quia
                    sequi numquam accusamus cupiditate obcaecati, eveniet vel ipsam, officiis dolor fugiat explicabo
                    perspiciatis quis deserunt voluptate earum temporibus.</p>
                </div>
            </div>
            @endsection
