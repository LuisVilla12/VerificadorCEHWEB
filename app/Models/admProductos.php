<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admProductos extends Model
{
    use HasFactory;

    protected $fillable = [
        'CCODIGOPRODUCTO',
        'CNOMBREPRODUCTO',
        'CPRECIO1',
    ];
    

}
