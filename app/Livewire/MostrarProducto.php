<?php

namespace App\Livewire;

use App\Models\admProductos;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class MostrarProducto extends Component
{
    public $termino;
    // Cuando se invoque la función terminos busqueda del emit accionar la función buscar
    protected $listeners=['terminosBusqueda'=>'buscar'];

    public function buscar($termino){
        $this->termino=$termino;
    }

  public function render() {
      $productos=DB::table('dbo.admProductos')->when($this->termino, function ($query){
        $query->where('CNOMBREPRODUCTO', 'LIKE', '%' . $this->termino . "%");
      })->when($this->termino, function ($query){
        $query->orWhere('CCODIGOPRODUCTO', 'LIKE', '%' . $this->termino . "%");
      })->get();
      
      return view('livewire.mostrar-producto',['productos'=>$productos]);
  }
}
