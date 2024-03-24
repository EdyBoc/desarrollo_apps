<?php

namespace App\Http\Controllers\SistemaTurnos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\baseModel;
use Carbon\Carbon;
use Validator;
use Response;
use Storage;
use View;

class AsignacionPersonaController extends Controller
{

        public function asignar_persona()
        {
            return view('sistemaTurnos/asignaciones/asignaciones');

        }

        public function solicitud_persona()
        {
            return view('sistemaTurnos/asignaciones/solicitud_asignaciones');

        }   

}