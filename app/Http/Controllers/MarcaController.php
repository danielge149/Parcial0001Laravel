<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarcaController extends Controller
{
    public function index(){
        $marca = DB::table('marca')->get();
        return view('marca.listado', ['brand'=>$marca]);
    }

}
