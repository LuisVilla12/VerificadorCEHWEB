<div class=" container mx-auto">
    <div>
        <livewire:buscar-producto>
    </div>
    
    <div class="w-10/12 mx-auto">
        <table class="w-full">
            <thead class="bg-blue-600">
                <tr>
                    <th class="uppercase text-white p-2">N°</th>
                    <th class="uppercase text-white p-2">Codigo de producto</th>
                    <th class="uppercase text-white p-2">Nombre del producto</th>
                    <th class="uppercase text-white p-2">Precio del producto</th>
                    <th class="uppercase text-white p-2">Clave SAT</th>
                    <th class="uppercase text-white p-2">Existencia</th>
                </tr>
            </thead>
            <tbody>
                @php $contador = 1; @endphp
                @forelse ($productos as $producto)
                <tr>
                    <td class="text-center">{{ $contador++ }}</td>
                    <td class="text-justify">{{ $producto->CCODIGOPRODUCTO }}</td>
                    <td class="text-center">{{ $producto->CNOMBREPRODUCTO }}</td>
                    <td class="text-center">{{ $producto->CPRECIO1 * 1.16 }}</td>
                    <td class="text-center">{{ $producto->CCLAVESAT }}</td>
                    <td class="text-center">{{ $producto->CCLAVESAT }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">No hay productos disponibles</td>
                </tr>
                @endforelse
            </tbody>
        </table>
</div>
