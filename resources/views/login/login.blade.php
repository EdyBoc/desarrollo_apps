<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--Iconos  css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />

    <title>Sistema de Turno</title>
</head>

<body>

    <header class="d-flex justify-content-center align-items-center mb-5">

    </header>

    <div class="d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header text-center ">
                            <div class="float-left">
                                <a href="{{ route('index_menu') }}">Ingresar a Login</a>
                            </div>
                            <h4 class="card-title">Bienvenido al Sistema</h4>
                            <div id="clock" class="text-center display-1"></div>
                        </div>
                        <div class="card-body">
                            <form action=" " method="post">
                                <div class="form-group">
                                    <label for="dni">Ingrese su Cui</label>
                                    <input type="number" class="form-control" id="dni" name="dni"
                                        placeholder="CUI">
                                </div>

                                <input type="file" id="archivo" name="archivo" accept=".pdf, .doc, .docx"><br><br>

                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary">ENTRADA</button>
                                    <button type="submit" class="btn btn-danger"></i>SALIDA</button>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="d-flex justify-content-center align-items-center">
        <p>edy@example.com</p>
    </footer>

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

<script>
    function mostrarHora() {
        var fecha = new Date();
        var horas = fecha.getHours();
        var minutos = fecha.getMinutes();
        var segundos = fecha.getSeconds();

        // Formatear a dos dígitos si es necesario
        horas = horas < 10 ? '0' + horas : horas;
        minutos = minutos < 10 ? '0' + minutos : minutos;
        segundos = segundos < 10 ? '0' + segundos : segundos;

        var horaActual = horas + ':' + minutos + ':' + segundos;

        document.getElementById('clock').innerHTML = horaActual;
    }

    // Actualizar cada segundo
    setInterval(mostrarHora, 1000);

    // Mostrar la hora inicial
    mostrarHora();
    </script>


</body>

</html>
