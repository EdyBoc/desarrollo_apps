@extends('layout.app')

@section('pantalla')
    @parent
@endsection

@section('styles')
    <style>


    </style>
@endsection

@section('content')
    <h5>Modulo Solicitudes</h5>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info mt-3 mb-3" data-toggle="modal" data-target="#exampleModal">
            Crear Nuevo Usuario
        </button>
        <!-- Modal -->
        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario | Crear </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2 class="text-center">Consultar si esta de alta en RRHH</h2>
                        <form>
                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                    <div class="form-group">
                                        <label for="cui">CUI</label>
                                        <input type="number" class="form-control" id="cui"
                                            placeholder="Ingrese su CUI">
                                    </div>

                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" id="nombre"
                                            placeholder="Nombre" readonly>
                                    </div>

                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <button type="button" class="btn btn-secondary btn-block">Consultar</button>
                                    </div>


                                    <div class="form-group">
                                        <label for="usuario">Usuario</label>
                                        <input type="text" class="form-control" id="usuario"
                                            placeholder="Asignar usuario">
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
                        <button type="button" class="btn btn-success">GUARDAR</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Listado de personas-->
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="myTable">
                <thead class="text-white">
                    <tr class="bg-dark">
                        <th>#</th>
                        <th>Emisor</th>
                        <th>Tipo solicitud</th>
                        <th>Descripcion</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <c:forEach var="dato" items="${lista}">
                        <tr>
                            <td role="row">${dato.1}</td>
                            <td role="row">${dato.Emisor}</td>
                            <td role="row">${dato.Solicititud}</td>
                            <td role="row">${dato.Descripcion}</td>

                            <td role="row">${dato.Estado}</td>
                            <td>
                                <a href="Editar.htm?id=${dato.usuario}" class="btn btn-outline">
                                    <ion-icon name="person"></ion-icon>
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
