<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function index(){
        $facultades = DB::table('articulo')->get(); 
        return view('articulo.listado', ['articule'=>$facultades]);
    }
}