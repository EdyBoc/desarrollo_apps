@extends('layout.app')


@section('tituloPagina')
    Fases de Donación
@stop
@section('titulo')
    Sistema de Desarrollo
@stop
@section('subtitulo')
    Menu
@stop
@section('styles')

@endsection

@section('contenedor_pantalla')

<form id="miFormulario">
        <input type="text" id="dato" name="dato" placeholder="Ingresa un dato">
        <button type="button" id="enviar">Enviar</button>
    </form>
    <div id="resultado"></div>

@endsection


@section('scripts')
    @parent
    <script src="{{ asset('js/bootstrap.js') }}">


$(document).ready(function () {
            $("#enviar").click(function () {
                var dato = $("#dato").val();
                $.ajax({
                    type: "POST",
                    url:
                    data: { dato: dato },
                    success: function (respuesta) {
                        $("#resultado").html(respuesta);
                    }
                });
            });
        });


    </script>
@endsection
