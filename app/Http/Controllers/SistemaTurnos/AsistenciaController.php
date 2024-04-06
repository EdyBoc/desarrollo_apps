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

class AsistenciaController extends Controller
{

        public function index()
        {
            return view('sistemaTurnos/index_asistencia');

        }


        
        public function marcaje_ingreso()
        {
           

        }



}