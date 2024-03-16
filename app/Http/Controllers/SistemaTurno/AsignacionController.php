<?php

namespace App\Http\Controllers\SistemaTurno;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AsignacionController extends Controller
{
    
    public function index(Request $request){

        return redirect()->route('sistemaTurno\Asignaciones\index');
        
    }
    




}
