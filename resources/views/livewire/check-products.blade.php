<div>
    <div class="w-10/12 mx-auto my-10">
        <div class="md:flex justify-center gap-5 items-center text-2xl">
            <label class="mb-3  md:mb-0 block   text-gray-700  font-bold " for="termino">Codigo del producto:</label>
            <input wire:model.live="search" class="w-full md:w-[400px] " type="text" placeholder="Ingrese el codigo" id="busqueda" />
        </div>
    </div>

    <div class="w-10/12 lg:w-7/12 mx-auto my-10">
        @if (!empty($product[0]))
        <p class="text-center text-9xl mt-5">${{ round($product[0]->PRECIO1*1.16,2)}}</p>           
        <p class="text-center text-4xl my-5">{{ $product[0]->CNOMBREPRODUCTO }}</p>
        <p class="text-center text-xl">{{ $product[0]->CCODIGOPRODUCTO }}</td>
        @else
        <p class="text-center text-4xl mt-5">No hay información sobre ese producto</p>
        @endif
       
    </div>
    @push('scripts')
        <script>
            console.log('limpie')
            // Ejecuta la acción resetSearch cada 15 segundos
            setInterval(function() {
                var busqueda = document.getElementById("busqueda");
                busqueda.value = "";
                console.log('limpie')
            }, 8000);
        </script>
    @endpush

</div>
