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
        $productos = DB::table('dbo.admProductos')->get();
        
        return view('productos.index', ['productos' => $productos]);
    }

    public function prueba()
    {
        return view('layout.app');
    }
}
