<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/perfilpaciente.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>

        <p class="principal">
            <a href="">Perfil</a>
            <a href="">Agenda</a>
            <a href="">Historial citas</a>
        </p>
        <p class="secundario">
            <a href="{{ route('login.destroy') }}">Cerrar sesion</a>
        </p>

    </header>

    <section class="body_major">
        <section class="box_left">
            <article class="box_top">
                <article class="img_doctor">
                    <img class="img_redonda" src="img/perfilpaciente.png" alt="">
                </article>
                <article class="name_doctor">

                    <p class="machete letra">{{ auth()->user()->nombres_y_apellidos }}</p>
                    {{-- <Button>Editar</Button> --}}
                </article>
            </article>

        </section>
        <section class="box_right">
            <!-- <p>h</p> -->
            <article class="labels_right">
                <label for="Correo Electronico" class="form-label">Nombres y apellidos</label>
                <p class="machete letra">{{ auth()->user()->nombres_y_apellidos }}</p>
            </article>

            <article class="labels_right">
                <label for="contraseña" class="form-label">Correo electronico</label>
                <p class="machete letra">{{ auth()->user()->email }}</p>
            </article>

            {{-- <article class="labels_right">
                <label for="sexo" class="form-label">Contraseña</label>
                <p class="machete letra">{{auth()->user()->password}}</p>
            </article> --}}

            {{-- <article class="labels_right">
                <label for="telefono" class="form-label">Confimar contraseña</label>
                <p class="machete letra">{{auth()->user()->password}}</p>
            </article> --}}

            <article class="labels_right">
                <label for="especialidad" class="form-label">Cedula de ciudadania </label>
                <p class="machete letra">{{ auth()->user()->cedula }}</p>
            </article>

            <article class="labels_right">
                <label for="especialidad" class="form-label">certificado-medico </label>
                <p class="machete letra">{{ auth()->medicos()->certificacion }}</p>
            </article>

        </section>
    </section>

    <article class="footer">
        <footer>
            <x-footer />
        </footer>
    </article>

</body>

</html>
