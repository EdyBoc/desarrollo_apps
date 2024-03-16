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

<div class="table-responsive">
    <table class="table table-striped table-bordered" id="myTable">
        <thead class="text-white">
            <tr class="bg-dark">
                <th>Nombre</th>
                <th>Usuario Dominio</th>
                <th>Correo Electronico</th>
                <th>Extencion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <c:forEach var="dato" items="${lista}">
                <tr>
                    <td role="row">${dato.Nombre}</td>
                    <td role="row">${dato.usuarioDominio}</td>
                    <td role="row">${dato.Correo}</td>
                    <td role="row">${dato.Extencion}</td>
                    <td>
                        <a href="Editar.htm?id=${dato.usuario}" class="btn btn-outline">
                            <ion-icon name="person"></ion-icon>
                        </a>
                        <a href="Delete.htm?id=${dato.correo}" class="btn btn-outline">
                            <ion-icon name="mail"></ion-icon>
                        </a>
                        <a href="Delete.htm?id=${dato.ext}" class="btn btn-outline">
                            <ion-icon name="call"></ion-icon>
                        </a>
                    </td>
                </tr>
            </c:forEach>
        </tbody>
    </table>
</div>


@endsection

@section('scripts')
    @parent
    <script src="{{ asset('js/bootstrap.js') }}"></script>
@endsection
