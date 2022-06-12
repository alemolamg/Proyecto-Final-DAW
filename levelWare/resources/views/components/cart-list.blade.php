<?php
$arrayCesta = session()->get('CESTA');
$precioTotal = 0;
?>

<div class="grid grid-flow-col text-center align-content-center levelware">
    <table class="table-fixed">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Nombre Producto</th>
                <th>precio</th>
                <th>Cantidad</th>
                <th>Botones</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($arrayCesta as $key => $pc)
                <!-- Buscamos el producto para sacar los datos -->
                <?php
                $proc = App\Models\Product::find($pc['idPro']);
                $precioTotal += $proc->precio * $pc['cant'];
                ?>
                <tr class="border-solid border-2 border-white">
                    <!-- <td>{var_dump($pc) }</td> -->
                    <td>
                        <a href="{{ route('producto.show', $proc->id) }}">
                            <img class="w-20 items-center" src="{{ $proc->imagen }}" alt="{{ $proc->imagen }}">
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('producto.show', $proc->id) }}">
                            {{ $proc->nombre }} </a>
                    </td>
                    <td>{{ $proc->precio }}€</td>
                    <td>{{ $pc['cant'] }}</td>

                    <!-- BTN para eliminar producto de la cesta -->
                    <td>
                        <form action="#" style="display: block" id="formEliminar">
                            <input type="button" onclick="verCesta()" value="Eliminar"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">
                        </form>

                        <div id="kk">{{ $key }}</div>

                        <form action="#" style="display: none" id="formActualizar">
                            <input type="button" onclick="verCesta()" value="Actualizar"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@if (!empty($arrayCesta))
    <div class="p-2 grid grid-cols-4 align-content-end">
        <div></div>
        <div id="divPrecio" class="text-bold text-uppercase">
            <p class="text-bold text-uppercase">Precio total: {{ $precioTotal }}€ </p>
        </div>
        <div>
            <form action="#" id="vaciarCesta">
                <input type="submit" value="Vaciar Cesta"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">
            </form>
        </div>
        <div id="divBTN">
            <form method="POST" action="{{ route('pedido.store') }}">
                @csrf
                <input type="submit" value="Comprar todo"
                    class="bg-indigo-600 hover:bg-green-300 hover:text-black text-white font-bold py-2 px-4 rounded">
            </form>
        </div>
    </div>
@endif


<script type="text/javascript">
    function cambiarBotones() {

    }
</script>
<!-- Intento de script para actializar el estado de la tienda
     <script>
         function verCesta() {
             var cesta = < %= Session["CESTA"] % > ;
             document.getElementById('kk').value = cesta;

         }
     </script>
-->
