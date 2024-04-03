<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class CheckProducts extends Component
{
    public $search = '';
    public function render()
    {
        $product = DB::table('dbo.admExistenciaCosto')
            ->select('dbo.admProductos.CCODIGOPRODUCTO as CCODIGOPRODUCTO', 'dbo.admProductos.CCODALTERN as CCODALTERN', 'dbo.admProductos.CNOMBREPRODUCTO as CNOMBREPRODUCTO', 'dbo.admExistenciaCosto.CENTRADASPERIODO12 as ENTRADAS', 'dbo.admExistenciaCosto.CSALIDASPERIODO12 as SALIDAS', 'dbo.admAlmacenes.CNOMBREALMACEN as ALMACEN', 'dbo.admProductos.CPRECIO1 as PRECIO1', 'dbo.admProductos.CPRECIO2 as PRECIO2')
            ->join('dbo.admProductos', 'dbo.admExistenciaCosto.CIDPRODUCTO', '=', 'dbo.admProductos.CIDPRODUCTO')
            ->join('dbo.admAlmacenes', 'dbo.admExistenciaCosto.CIDALMACEN', '=', 'dbo.admAlmacenes.CIDALMACEN')
            ->join('dbo.admEjercicios', 'dbo.admExistenciaCosto.CIDEJERCICIO', '=', 'dbo.admEjercicios.CIDEJERCICIO')
            ->where([
                ['dbo.admProductos.CNOMBREPRODUCTO', 'like', '%'  . $this->search . '%'], ['dbo.admEjercicios.CEJERCICIO', '=', '2024']
            ])
            ->orWhere([
                ['dbo.admProductos.CCODIGOPRODUCTO', 'like', '%'  . $this->search . '%'], ['dbo.admEjercicios.CEJERCICIO', '=', '2024']
            ])
            ->orWhere([
                ['dbo.admProductos.CCODALTERN', 'like', '%'  . $this->search . '%'], ['dbo.admEjercicios.CEJERCICIO', '=', '2024']
            ])

            ->limit(1)

            ->get();
                // dd($product);
        return view('livewire.check-products', ['product' => $product]);
    }
    public function resetSearch()
    {
        $this->search = '';
    }
}
