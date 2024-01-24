<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class SearchProducts extends Component
{
    public $search = '';
        public function render()
    {
        // $products = DB::table('dbo.admProductos')
         // ->where('CNOMBREPRODUCTO', 'like', '%' . $this->search . '%')
        //  ->orWhere('CCODIGOPRODUCTO', 'like', '%' . $this->search . '%')
        //  ->orWhere('CCODALTERN', 'like', '%' . $this->search . '%')
        $products = DB::table('dbo.admExistenciaCosto')
        ->select('dbo.admProductos.CCODIGOPRODUCTO as CCODIGOPRODUCTO', 'dbo.admProductos.CCODALTERN as CCODALTERN', 'dbo.admProductos.CNOMBREPRODUCTO as CNOMBREPRODUCTO','dbo.admExistenciaCosto.CENTRADASPERIODO12 as ENTRADAS','dbo.admExistenciaCosto.CSALIDASPERIODO12 as SALIDAS','dbo.admAlmacenes.CNOMBREALMACEN as ALMACEN','dbo.admProductos.CPRECIO1 as PRECIO1','dbo.admProductos.CPRECIO2 as PRECIO2')
        ->join('dbo.admProductos', 'dbo.admExistenciaCosto.CIDPRODUCTO', '=', 'dbo.admProductos.CIDPRODUCTO')
        ->join('dbo.admAlmacenes', 'dbo.admExistenciaCosto.CIDALMACEN', '=', 'dbo.admAlmacenes.CIDALMACEN') 
        ->join('dbo.admEjercicios', 'dbo.admExistenciaCosto.CIDEJERCICIO', '=', 'dbo.admEjercicios.CIDEJERCICIO') 
        ->where([
            ['dbo.admProductos.CNOMBREPRODUCTO', 'like', '%'  . $this->search . '%'],['dbo.admEjercicios.CEJERCICIO', '=', '2024']
            ])
        ->orWhere([
            ['dbo.admProductos.CCODIGOPRODUCTO', 'like', '%'  . $this->search . '%'],['dbo.admEjercicios.CEJERCICIO', '=', '2024']
        ])
        ->orWhere([
            ['dbo.admProductos.CCODALTERN', 'like', '%'  . $this->search . '%'],['dbo.admEjercicios.CEJERCICIO', '=', '2024']
        ])      
          
         ->limit(50)
        
         ->get();

        //  dd($products);
        return view('livewire.search-products', ['products' => $products]);
    }

    public function resetSearch()
    {
        $this->search = '';
    }
}
