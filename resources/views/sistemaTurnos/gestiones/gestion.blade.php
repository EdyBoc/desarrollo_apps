@extends('layout.app')

@section('pantalla')
    @parent
@endsection

@section('styles')
    <style>


    </style>
@endsection

@section('content')
    <h5>Mis gestiones</h5>

    <div class="table-responsive">
        <div class="float-right">
            <button class="btn btn-danger mb-3" data-toggle="modal" data-target="#id_modal_solicitud">SALIR</button>

            <button class="btn btn-info mb-3" data-toggle="modal" data-target="#id_modal_solicitud">SOLICITAR PERMISO</button>
            <button class="btn btn-info mb-3" data-toggle="modal" data-target="#miModal">REPORTAR HORAS EXTRAS</button>
        </div>
    </div>

    <div class="container">
        <p><strong>Detalle </strong></p>
        <form>
            <div class="form-group">
                <label for="nombre2">Nombres:</label>
                <input type="text" class="form-control form-control-sm" id="nombre2" name="nombre2">
            </div>
            <div class="form-group">
                <label for="nombre3">Tipo de permiso:</label>
                <input type="text" class="form-control form-control-sm" id="nombre3" name="nombre3">
            </div>

            <div class="form-group">
                <label for="nombre3">Hora:</label>
                <input type="text" class="form-control form-control-sm" id="nombre3" name="nombre3">
            </div>

            <div class="form-group">
                <label for="nombre3">Fecha:</label>
                <input type="text" class="form-control form-control-sm" id="nombre3" name="nombre3">
            </div>


            <div class="form-group">
                <label for="nombre3">Descripcion:</label>
                <input type="text" class="form-control form-control-sm" id="nombre3" name="nombre3">
            </div>

        </form>
        <!--     Inicio de modal reporte --->

        <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Generar reporte horas extras</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar Cambios</button>

                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Fecha:</label>
                                <input type="date" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Hora inicio:</label>
                                <input type="time" class="form-control" id="recipient-name">
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Hora final:</label>
                                <input type="time" class="form-control" id="recipient-name">
                            </div>


                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Descripción:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!--     Inicio solicitud de permisos --->
        <div class="modal fade" id="id_modal_solicitud" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Solicitud de permisos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nombre:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Correo electrónico:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Tipo permiso:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Archivo adjunto:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>

                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('scripts')
    @parent
    <script src="{{ asset('js/bootstrap.js') }}"></script>
@endsection
