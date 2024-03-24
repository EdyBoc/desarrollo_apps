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

class GestionesController extends Controller
{

        public function index_gestion()
        {
            return view('sistemaTurnos/gestiones/gestion');

        }

       

}