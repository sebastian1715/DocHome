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
                    <p>
                        Dr.Sebastian Hernandez
                    </p>
                    {{-- <Button>Editar</Button> --}}
                </article>
            </article>

        </section>

        @foreach ($paciente as $registropaciente)
            <form action="{{ route('paciente.update', $registropaciente) }}" method="post">
                @method('PUT')
                {{ csrf_field() }}
                <section class="box_right">
                    <!-- <p>h</p> -->
                    <article class="labels_right">
                        <label for="Correo Electronico" class="form-label">Nombres y apellidos</label>
                        <input type="email" id="Correo Electronico" class="celdas_form-input"
                            value="{{ $registropaciente->nombres_y_apellidos }}">
                    </article>

                    <article class="labels_right">
                        <label for="contraseña" class="form-label">Correo electronico</label>
                        <input type="password" id="contraseña" class="celdas_form-input"
                            value="{{ $registropaciente->email }}">
                    </article>

                    <article class="labels_right">
                        <label for="sexo" class="form-label">Contraseña</label>
                        <input type="combo-box" id="edad" class="celdas_form-input"
                            value="{{ $registropaciente->password }}">
                    </article>

                    <article class="labels_right">
                        <label for="especialidad" class="form-label">Cedula de ciudadania </label>
                        <input type="text" id="telefono" class="celdas_form-input"
                            value="{{ $registropaciente->cedula_ciudadania }}">
                    </article>

                    <article class="buttons">
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-info">Aceptar</button>
                    </article>
        @endforeach

    </section>
    </form>
    </section>

    <article class="footer">
        <footer>
            <x-footer />
        </footer>
    </article>

</body>

</html>
