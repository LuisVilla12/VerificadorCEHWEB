<?php

namespace App\Http\Controllers;

use App\Models\admProductos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admProductosController extends Controller
{
    //
    public function index()
    {
    
        return view('productos.index');
    }

    public function prueba()
    {
        return view('layout.app');
    }
}
