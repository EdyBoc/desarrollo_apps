@extends('layout.app')

@section('pantalla')
    @parent
@endsection

@section('styles')
    <style>

    </style>
@endsection

@section('content')
    <h5>Menu</h5>
    <div class="btn-group d-flex flex-wrap" role="group" aria-label="Button group with nested dropdown">
        <div class="btn-group mr-2" role="group">
            <button type="button" class="btn btn-info mt-3 mb-3 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                Asignaciones
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Asignaciones</a>
                <a class="dropdown-item" href="#">Lista de Solicitud de asignaciones</a>
            </div>
        </div>

        <div class="btn-group mr-2" role="group">
            <button type="button" class="btn btn-info mt-3 mb-3 dropdown-toggle" data-toggle="dropdown"
                aria-expanded="false">
                Catálogos
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Lista de Catálogos</a>
            </div>
        </div>

        <div class="btn-group mr-2" role="group">
            <button type="button" class="btn btn-info mt-3 mb-3 dropdown-toggle" data-toggle="dropdown"
                aria-expanded="false">
                Reporteria
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Graficas</a>
                <a class="dropdown-item" href="#">Reporte Horas Extras</a>
            </div>
        </div>

        <div class="btn-group mr-2" role="group">
            <button type="button" class="btn btn-info mt-3 mb-3 dropdown-toggle" data-toggle="dropdown"
                aria-expanded="false">
                Gestiones
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Solicitud Permisos</a>
                <a class="dropdown-item" href="#">Solicitud Horas Extras</a>
            </div>
        </div>

        <div class="btn-group" role="group">
            <button type="button" class="btn btn-info mt-3 mb-3 dropdown-toggle" data-toggle="dropdown"
                aria-expanded="false">
                Mis gestiones
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Solicitud Permisos</a>
                <a class="dropdown-item" href="#">Solicitud Horas Extras</a>
            </div>
        </div>
    </div>


    <h5>RHH</h5>
    <div class="btn-group d-flex flex-wrap" role="group" aria-label="Button group with nested dropdown">
        <div class="btn-group mr-2" role="group">
            <button type="button" class="btn btn-info mt-3 mb-3 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                Gestiones
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Agregar nuevo trabajador</a>
                <a class="dropdown-item" href="#">Gerar solicitud para el ingreso al sistema</a>
            </div>
        </div>
    </div>

    <h5>NOMINA</h5>
    <div class="btn-group d-flex flex-wrap" role="group" aria-label="Button group with nested dropdown">
        <div class="btn-group mr-2" role="group">
            <button type="button" class="btn btn-info mt-3 mb-3 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                Gestiones
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Pagos</a>
                <a class="dropdown-item" href="#">Lista de horas extras</a>
            </div>
        </div>
    </div>


@endsection

@section('scripts')
    @parent
    <script src="{{ asset('js/bootstrap.js') }}"></script>
@endsection
