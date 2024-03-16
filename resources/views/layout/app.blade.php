@extends('layout.menu')

<!DOCTYPE html>
<html lang="en">

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

    <title> {{ config('constantes.appName') }} | @yield('tituloPagina') </title>

</head>
@yield('styles')

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
    }

    .container-fluid {
        padding: 20px;
    }

    #titulo-pagina {
        background-color: #f8f9fa;
        padding: 10px;
        margin-bottom: 20px;
    }

    #titulo-pagina h1 {
        font-size: 24px;
        margin: 0;
        padding: 0;
    }

    #titulo-pagina small {
        font-size: 16px;
    }

    .alert {
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 5px;
    }

    .alert-danger {
        background-color: #f8d7da;
        border: 1px solid #f5c6cb;
        color: #721c24;
    }

    .alert-success {
        background-color: #d4edda;
        border: 1px solid #c3e6cb;
        color: #155724;
    }

    .close {
        cursor: pointer;
    }

    .bodycontent {
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 5px;
    }

    .paddig-custom {
        padding-left: 75px;
        padding-right: 75px;
    }

    .text-bold {
        font-weight: bold;
    }

    .text-justify {
        text-align: justify;
    }

    #titulo-pagina {
        background-color: #f8f9fa;
        padding: 10px;
        margin-bottom: 20px;
        margin-top: 90px; /* Add this line to adjust the margin at the top */
    }

</style>
@yield('styles')

<body>

    <main>
        <div class="container @if (isset($fluid) && $fluid) container-fluid paddig-custom @endif">
            <div class="row" id="titulo-pagina">
                <h1>@yield('titulo') | <small>@yield('subtitulo')</small></h1>
            </div>
            <div class="row">
                <div class="alert alert-danger alert-dismissible" role="alert" id="alerta" hidden>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="alert alert-success" id="aviso" hidden>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
            </div>
        </div>
        <div class="container @if (isset($fluid) && $fluid) container-fluid paddig-custom @endif bodycontent">
            @yield('contenedor_pantalla')
        </div>
    </main>


    <footer>
        <div class="container @if (isset($fluid) && $fluid) container-fluid @endif">
            <div class="pull-left">
                <strong><a> Sistema en proceso </a></strong><br>
            </div>
            <div class="pull-right">
                <img src="{{ config('constantes.appLogoFooter') }}" height="70">
            </div>
            <div class="clearfix"></div>
        </div>
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

</body>

</html>
