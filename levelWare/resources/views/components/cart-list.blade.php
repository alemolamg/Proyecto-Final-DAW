<?php
$arrayCesta = session()->get('CESTA');
$precioTotal = 0;
?>

<div class="grid grid-flow-col text-center align-content-center levelware">
    <table class="table-fixed">
        <thead>
            <tr>
                <th>{{ __('cart.image') }}</th>
                <th>{{ __('cart.name') }}</th>
                <th>{{ __('cart.price') }}</th>
                <th>{{ __('cart.quantity') }}</th>
                <th>{{ __('cart.buttons') }}</th>
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
                        <form action="{{ route('eliminarProducto') }}" method="POST" id="formEliminar">
                            @csrf
                            @method('PUT')
                            <input type="submit" value="Eliminar"
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">
                            <input type="hidden" id="idCesta" name="idCesta" value={{ $key }}>
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
            <p class="text-bold text-uppercase">{{ __('cart.totalPrice') }}: {{ $precioTotal }}€ </p>
        </div>
        <div>
            <form action="{{ route('vaciarCesta') }}" id="vaciarCesta" method="POST">
                @csrf
                <input type="submit" value="Vaciar Cesta"
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">
            </form>
        </div>
        <div id="divBTN">
            <form method="POST" action="{{ route('pedido.store') }}">
                @csrf
                <input type="submit" value="Comprar todo"
                    class="transition bg-green-600 hover:bg-indigo-500 hover:text-white text-white font-bold duration-300 py-2 px-4 rounded">
            </form>
        </div>
    </div>
@endif
