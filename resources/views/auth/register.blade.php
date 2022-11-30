<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/registroadmin.css') }}">
    <title>Registrarse</title>
</head>


<body>
    <section class="fondo" style="width: 100%; height: 70%;">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-9 col-xl-10">
                    <div class="tarjeta card " style="border-radius: 1rem;">
                        <div class="card-body p-5 ">

                            <h5>Crear cuenta</h5>
                            <div class="d-flex justify-content-stretch mb-4">
                                <p>¿Ya tienes creada una cuenta?</p>
                                <a style="color: #115679;" href="{{ 'login' }}"> Iniciar sesion</a>
                            </div>
                            <form class="mt-4" method="POST" action="">
                                @csrf

                                {{--   @if (session()->has('message'))
                                    <div class="alert alert-succes alert-dismissible fade show" role="alert">
                                        {{ session('message') }}
                                        <span aria-hidden="true">&times;</span>
                                    </div>
                                @endif --}}

                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label">Nombres y apellidos</label>
                                            <input type="text" class="form-control" id="nombres_y_apellidos"
                                                name="nombres_y_apellidos" />
                                            @error('nombres_y_apellidos')
                                                <p
                                                    class="border border-red-500 rounded-md bg-red-100 w-fulltext-red-600 p-2 my-2">
                                                    * {{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label">Correo electronico</label>
                                            <input type="email" id="email" name="email" class="form-control" />
                                            @error('email')
                                                <p
                                                    class="border border-red-500 rounded-md bg-red-100 w-fulltext-red-600 p-2 my-2">
                                                    * {{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label">Contraseña</label>
                                            <input type="password" class="form-control" id="password"
                                                name="password" />
                                            @error('password')
                                                <p
                                                    class="border border-red-500 rounded-md bg-red-100 w-fulltext-red-600 p-2 my-2">
                                                    * {{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label">Confirmar Contraseña</label>
                                            <input type="password" id="password_confirmation"
                                                name="password_confirmation" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div style="width: 51%" class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label">Cedula de ciudadania</label>
                                            <input type="number" id="cedula" class="form-control" name="cedula" />
                                        </div>
                                    </div>
                                </div>

                               {{--  <div class="row mb-4">
                                    <p>Selecciona el tipo de usuario que seas registrar</p>

                                    <select class="form-select form-control" id="role"
                                        aria-label="Default select example" name="role">
                                        <option selected="true" disabled="disabled">Seleccionar</option>
                                        <option value="paciente">Paciente</option>
                                        <option value="medico">Medico</option>
                                        <option value="admin">Admin</option>

                                    </select> --}}


                                    {{--  <article>
                                        <label for="paciente">Medico</label>
                                        <input type="radio" onclick="mostrar();" name="paciente" value="medico">
                                    </article>
                                    <article>
                                        <label for="medico">Paciente</label>
                                        <input type="radio" onclick="ocultar();" name="paciente" value="paciente">
                                    </article>
                                    <article id="formulario_m" style="display: none">
                                        <br>

                                        <div class="row mb-4">
                                            <div class="col">
                                                <div class="form-outline">
                                                    <label class="form-label" for="actaocertificacion">Añade una
                                                        fotocopia de
                                                        acta o certificacion</label>
                                                    <input type="file" id="certificacion" class="form-control"
                                                        name="certificacion" />
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-outline">
                                                    <label class="form-label" for="fotocopiadediploma">Añade una
                                                        fotocopia de
                                                        tu diploma</label>
                                                    <input type="file" id="diploma" class="form-control"
                                                        name="diploma" />
                                                </div>
                                            </div>
                                        </div>
                                        <div style="width: 51%" class="row mb-4">
                                            <div class="col">
                                                <div class="form-outline">
                                                    <label class="form-label" for="fotocopiadecedula">Añade una
                                                        fotocopia de tu
                                                        cedula</label>
                                                    <input type="file" id="cedula" class="form-control"
                                                        name="cedulafotocopia" />
                                                </div>
                                            </div>
                                        </div>
                                    </article> --}}
                                </div>
                                <script type="text/javascript">
                                    function mostrar() {
                                        document.getElementById('formulario_m').style.display = 'block';
                                    }

                                    function ocultar() {
                                        document.getElementById('formulario_m').style.display = 'none';
                                    }
                                </script>
                                <div
                                    class="col-12 col-md-12 col-lg-12 col-xl-12 d-flex align-items-center justify-content-evenly pb-4">
                                    <button type="submit" class="btn"
                                        style="background-color: #10A9FF; color: white;">Registrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <br>


            </div>
        </div>
    </section>
    <footer>
        <x-footer />
    </footer>
</body>

</html>
