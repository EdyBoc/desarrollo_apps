<html>

<head>
    <!-- Etiquetas meta requeridas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Bootstrap css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Iconos  css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />


    <title>Mi Web</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            /* Color de fondo */
        }

        .container {
            width: 80%;
            /* Ancho del contenedor */
            max-width: 800px;
            /* Ancho máximo */
            margin: 60px auto;
            /* Centrar el contenedor */
            background-color: #fff;
            /* Color de fondo del contenedor */
            padding: 20px;
            /* Espaciado interno */
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            /* Sombra */
            overflow-y: auto;
            /* Scroll vertical cuando es necesario */
            max-height: 80vh;
            /* Altura máxima del contenedor */
        }

        @media (max-width: 768px) {
            .container {
                width: 90%;
                /* Cambiar el ancho para dispositivos más pequeños */
                padding: 15px;
                /* Espaciado interno para dispositivos más pequeños */
            }
        }

        /* Estilo opcional para la imagen en la barra de navegación */
        .navbar-brand img {
            margin-right: 5px;
            /* Espacio entre la imagen y el texto del branding */
            border-radius: 50%;
            /* Borde redondeado para la imagen */
            transition: transform 0.3s ease;
            /* Efecto de transición al pasar el ratón */
        }

        .navbar-brand img:hover {
            transform: scale(1.2);
            /* Aumentar ligeramente el tamaño al pasar el ratón */
        }
    </style>


</head>

<body>

    @section('pantalla')
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="ruta/a/tu/imagen.jpg" alt="Logo" width="30" height="30"
                    class="d-inline-block align-top" loading="lazy">
                SIT
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" >Sistema de Turnos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Manual</a>
                    </li>
                </ul>
        </nav>
    @show

    <div class="container">
        @yield('content')
    </div>
    <!-- Iconos Scripts-->
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
    <!-- bootstrap@4 Scripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>