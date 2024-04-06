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
                <a class="dropdown-item" href="{{ route('asignaciones') }}">Asignaciones</a>
                <a class="dropdown-item" href="{{ route('solicitud_asignaciones') }}">Lista de Solicitud de asignaciones</a>
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
                <a class="dropdown-item" href="{{ route('gestion') }}">Solicitud Permisos</a>
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

    <div class="col-lg-push-6 col-md-push-4 col-lg-2 col-md-4 col-sm-6 col-xs-12">
            <div class="pull-right" style="display: flex">
                <a class="btn btn-danger " id="btn_limpiar"> <i class="fas fa-eraser"></i>&nbsp;Limpiar</a>&nbsp;&nbsp;
                <a class="btn btn-warning" id="btn_buscar"><i class="fas fa-search"></i>&nbsp; Buscar</a>&nbsp;&nbsp;
                <a class="btn btn-danger" id="btn_pdf"><i class="fas fa-file-pdf"></i>&nbsp; PDF</a>&nbsp;&nbsp;
            </div>
        </div>

@endsection

@section('scripts')
    @parent
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script>
      $('#btn_limpiar').click(function(event) {
    console.log("¡Haz hecho clic en el botón!");
    event.preventDefault();
    location.reload();
});
    </script>
@endsection
