@extends('layout.app')

@section('pantalla')
    @parent
@endsection

@section('styles')
    <style>


    </style>
@endsection

@section('content')
    <h5>Modulo Asignaciones</h5>
    <a  class="btn btn-secondary mt-3 mb-3" href="{{ route('index_asistencia') }}">REGRESAR</a>             
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="asignacion_rol-tab" data-toggle="tab" data-target="#asignacion_rol" type="button"
                role="tab" aria-controls="asignacion_rol" aria-selected="false">Asignacion Rol</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="asignacion_dependencia-tab" data-toggle="tab" data-target="#asignacion_dependencia"
                type="button" role="tab" aria-controls="asignacion_dependencia" aria-selected="false">Asignacion
                Dependencia</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="asignacion_turno-tab" data-toggle="tab" data-target="#asignacion_turno"
                type="button" role="tab" aria-controls="asignacion_turno" aria-selected="false">Asignacion
                Turno</button>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent">
       
        <div class="tab-pane fade" id="asignacion_rol" role="tabpanel" aria-labelledby="asignacion_rol-tab">
            <!-- Tab para asignacion de roles-->
            <form>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="exampleSelect1">Usuario:</label>
                            <select class="form-control" id="id_usuario">
                                <option>Opción 1</option>
                                <option>Opción 2</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleSelect1">Rol:</label>
                            <select class="form-control" id="id_usuario">
                                <option>Opción 1</option>
                                <option>Opción 2</option>
                            </select>
                        </div>

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                        <div class="form-group">
                            <label>&nbsp;</label>
                            <button type="button" class="btn btn-success btn-block">GUARDAR</button>
                        </div>

                    </div>
                </div>
            </form>
            <!-- Listado de personas-->
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="myTable">
                    <thead class="text-white">
                        <tr class="bg-dark">
                            <th>#</th>
                            <th>Usuario</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <c:forEach var="dato" items="${lista}">
                            <tr>
                                <td role="row">${dato.1}</td>
                                <td role="row">${dato.usuario}</td>
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
        </div>

        <!-- Tab para asignacion de dependencias-->
        <div class="tab-pane fade" id="asignacion_dependencia" role="tabpanel"
            aria-labelledby="asignacion_dependencia-tab">

            <form>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="exampleSelect1">Usuario:</label>
                            <select class="form-control" id="id_usuario">
                                <option>Opción 1</option>
                                <option>Opción 2</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleSelect1">Dependencia:</label>
                            <select class="form-control" id="id_usuario">
                                <option>Opción 1</option>
                                <option>Opción 2</option>
                            </select>
                        </div>

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                        <div class="form-group">
                            <label>&nbsp;</label>
                            <button type="button" class="btn btn-success btn-block">GUARDAR</button>
                        </div>

                    </div>
                </div>
            </form>
            <!-- Listado de personas-->
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="myTable">
                    <thead class="text-white">
                        <tr class="bg-dark">
                            <th>#</th>
                            <th>Usuario</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <c:forEach var="dato" items="${lista}">
                            <tr>
                                <td role="row">${dato.1}</td>
                                <td role="row">${dato.usuario}</td>
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
        </div>
        <!-- Tab para asignacion de turnos-->
        <div class="tab-pane fade" id="asignacion_turno" role="tabpanel" aria-labelledby="asignacion_turno-tab">

            <form>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="exampleSelect1">Usuario:</label>
                            <select class="form-control" id="id_usuario">
                                <option>Opción 1</option>
                                <option>Opción 2</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleSelect1">Turno:</label>
                            <select class="form-control" id="id_usuario">
                                <option>Opción 1</option>
                                <option>Opción 2</option>
                            </select>
                        </div>

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                        <div class="form-group">
                            <label>&nbsp;</label>
                            <button type="button" class="btn btn-success btn-block">GUARDAR</button>
                        </div>

                    </div>
                </div>
            </form>
            <!-- Listado de personas-->
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="myTable">
                    <thead class="text-white">
                        <tr class="bg-dark">
                            <th>#</th>
                            <th>Turno</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <c:forEach var="dato" items="${lista}">
                            <tr>
                                <td role="row">${dato.1}</td>
                                <td role="row">${dato.Turno}</td>
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
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script src="{{ asset('js/bootstrap.js') }}"></script>
@endsection
