<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/perfiladmin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sidebars/">
    <link rel="stylesheet" href="{{ asset('css/adminmedicopaciente.css') }}">
</head>
<nav class="menu-principal">
    <ul>
        @if (auth()->check())
            {{--  <li class="mx-8">
            <p class="text-xl">Welcome <b>{{ auth()->user()->nombres_y_apellidos }}</b></p>
        </li> --}}
            <li class="menuu">
                <p class="navv d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="/img/usuario.png" alt="" width="45" height="45"
                        class="rounded-circle me-2">
                    <b>{{ auth()->user()->nombres_y_apellidos }}</b>
                </p>
                <div class="dropdown-menu dropdown-menu-dark text-small shadow" style="background-color: #115679">
                    <a style="color: white" class="dropdown-item" href="{{ 'http://127.0.0.1:8000/admin' }}">Inicio</a>
                    <a style="color: white" class="dropdown-item" href="{{ 'perfiladmin/create' }}">Ver Perfil</a>
                    <a style="color: white" class="dropdown-item"
                        href="{{ url('http://127.0.0.1:8000/perfiladmin/') }}"> Editar Perfil</a>
                    <a style="color: white" class="dropdown-item" href="{{ route('login.destroy') }}">Cerrar
                        Sesion</a>

                </div>
            </li>
    </ul>
    </li>
@else
    <li class="mx-6">
        <a href="{{ route('login.index') }}" class="font-semibold 
    hover:bg-indigo-700 py-3 px-4 rounded-md">Iniciar
            Sesion</a>
    </li>
    <li>
        <a href="{{ route('register.index') }}"
            class="font-semibold
    border-2 border-white py-2 px-4 rounded-md hover:bg-white 
    hover:text-indigo-700">Registrate</a>
    </li>
    @endif
    </ul>

</nav>

<script>
    (() => {
        'use strict'
        const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        tooltipTriggerList.forEach(tooltipTriggerEl => {
            new bootstrap.Tooltip(tooltipTriggerEl)
        })
    })()
</script>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <div class="logo_name">Dochome</div>
            <i class='bx bx-menu' id="btn"></i>
            <br>

        </div>
        <li class="perfil">
            <img class="" src="/img/adm.jpg" alt="">
            <span class="nombre">{{ auth()->user()->nombres_y_apellidos }}</b></span>
        </li>
        <hr>
        <ul class="nav-list">
            <li>
                <a  {{-- href=" {{ route('perfiladmin.administradores') }} " --}}>
                    <i class='bx bxs-user-circle'></i>
                    <span class="links_name">Administradores</span>
                </a>
                <span class="tooltip"></span>
            </li>
            <li>
                <a href="{{ route('perfiladmin.index') }}">
                    <i class='bx bx-pulse '></i>
                    <span class="links_name">Medicos</span>

                </a>
                <span class="tooltip"></span>
            </li>

            <li>
                <a  {{-- href="{{ route('perfiladmin.pacientes') }}" --}} >
                    <i class='bx bx-group'></i>
                    <span class="links_name">Pacientes</span>
                </a>
                <span class="tooltip"></span>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <article class="caja ">
            <section class="cajita">
                <div class="container-fluid  d-flex justify-content-evenly">
                    <input type="text" class="redondeado" value="">
                    <button type="submit" class=" boton btn btn-primary">Buscar</button>
                </div>
            </section>
            <section class="crear">
                <a href="" type="submit"
                    class="boton btn btn-success ">
                    <i class='bx bxs-user-plus bx-md'style='color:#ffffff' ></i>
                </a>
            </section>
            <br>
            <section class="cajita2">
             
                <table>
                    <thead class=" redondeado1 d-flex  titulo col-12 col-sm-4 col-md-8 col-lg-12 ">
                        <tr class="texto">
                            <th scope="col">Nombres y Apellidos</th>
                            <th scope="col">Correo Electronico</th>
                            <th scope="col">Cedula</th>
                            <th scope="col">Rol</th>
                        </tr>
                    </thead>
                  
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="letras redondeado2 cajas col-12 col-sm-4 col-md-8 col-lg-12">
                                <td>{{ $user->nombres_y_apellidos }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->cedula }}</td>
                                <td>{{ $user->role }}</td>

                              
                                <td class="presionar">
                                    <a href="" type="submit" class="bot btn btn-info">
                                        <i class='bx bxs-check-square bx-sm' style='color:#ffffff'></i>
                                    </a>
                                </td>
                                <td class="presionar">
                                    {{--  <form action="{{ route('registromedico.destroy', $registromedico) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE') --}}
                                    <button type="submit" class=" bot btn btn-danger"><i class='bx bxs-trash bx-sm '
                                            style='color:#fffdfd'></i></button>
                                </td>
                            </tr>


                            </form>
                        @endforeach
                    </tbody>

                </table>
            </section>
        </article>
    </section>
    <br>
    <footer>
        <x-footer />
    </footer>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }
    </script>
</body>

</html>
