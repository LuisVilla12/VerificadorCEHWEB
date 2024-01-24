<div>
    <div class="w-10/12 mx-auto my-10">
        <div class="md:flex justify-center gap-5 items-center text-2xl">
            <label class="mb-3  md:mb-0 block   text-gray-700  font-bold " for="termino">Codigo del producto:</label>
            <input wire:model.live="search" class="w-full md:w-[400px] " type="text" placeholder="Ingrese el codigo" id="busqueda" />
        </div>
    </div>

    <div class="w-10/12 lg:w-7/12 mx-auto my-10">
        <table>
            <thead>
                <tr>
                    <th class="text-center">Almacen</th>
                    <th class="text-center">Código de producto</th>
                    <th class="text-center">Nombre del producto</th>
                    <th class="text-center">Precio</th>
                    <th class="text-center">Existencia</th>
                    <!-- Agrega otras columnas según tus necesidades -->
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                    <tr>
                        <td class="text-center">{{ $product->ALMACEN }}</td>
                        <td class="text-center">{{ $product->CCODIGOPRODUCTO }}</td>
                        <td>{{ $product->CNOMBREPRODUCTO }}</td>
                        <td class="text-center">{{ $product->PRECIO1 * 1.16 }}</td>
                        <td class="text-center">{{ $product->ENTRADAS - $product->SALIDAS }}</td>

                        <!-- Agrega otras celdas según tus necesidades -->
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No hay algun producto con esa información</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
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
