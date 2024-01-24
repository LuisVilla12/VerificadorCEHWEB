<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class BuscarProducto extends Component
{
    public $termino;
    public function datosFormulario(){
        dd('buscando');
        // $this->dispatch('terminosBusqueda', $this->termino);
    }
    public function render()
    {
        return view('livewire.buscar-producto');
    }
}
