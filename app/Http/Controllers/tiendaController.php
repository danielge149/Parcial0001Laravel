<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tiendaController extends Controller
{
    public function index(){
        return view('tienda.tienda');
    }
}
