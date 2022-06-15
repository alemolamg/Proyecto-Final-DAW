<?php
$arrayCesta = session()->get('CESTA');
$precioTotal = 0;
$user = Auth::user();
?>

<x-app-layout>
    <div class="mt-3 pt-1 ">
        <div class="w-auto lg:w-auto py-3 pl-2 md:pl-5 ">
            <h2 class="font-bold text-4xl uppercase"> {{ __('order.orderTitle') }} </h2>
            <p class="mt-4">Descripción del pedido, bla bla bla {{ __('order.orderDescrip') }} Bla bla bla
                mas rato. Hay que cambiarlo por un texto más importante. </p>
        </div>


        <div id="listaCesta" class="md:px-4 px-2 py-1 flex flex-wrap justify-between">
            @if (!empty($arrayCesta))
                @foreach ($arrayCesta as $pro)
                    <?php
                    $proc = App\Models\Product::find($pro['idPro']);
                    ?>
                    <x-product-card-big :producto="$proc" :cantidad="$pro['cant']"></x-product-card-big>
                @endforeach
            @else
                <p>ERROR AL REALIZAR EL PEDIDO, INTENTALO DE NUEVO</p>
            @endif
        </div>
        <div id="formularioPedido" class="py-2 px-2 md:px-4">
            <h3 class="font-bold text-2xl ">Datos de envio</h3>
            <div id="formulario" class="levelWare px-3">
                <form method="POST" action="{{ route('pedido.index') }}" class="px-8 pt-6 pb-8 mb-4 rounded"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4 md:flex md:justify-between">
                        <div class="mb-4 md:mr-2 md:mb-0">
                            <label class="block mb-2 text-sm font-bold " for="provincia">
                                Provincia
                            </label>
                            <input
                                class="w-full px-3 py-2 text-sm text-black leading-tight border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="provincia" type="text" placeholder="Provincia" name="provincia" required
                                value="{{ $user->provincia }}" />
                        </div>
                        <div class="mb-4 md:mr-2 md:mb-0">
                            <label class="block mb-2 text-sm font-bold " for="ciudad">
                                Ciudad
                            </label>
                            <input
                                class="w-full px-3 py-2 text-sm text-black leading-tight border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="ciudad" type="text" placeholder="ciudad" name="ciudad" required
                                value="{{ $user->localidad }}" />
                        </div>
                        <div class="mb-4 md:mr-2 md:mb-0">
                            <label class="block mb-2 text-sm font-bold " for="direccion">
                                Dirección
                            </label>
                            <input
                                class="w-full px-3 py-2 text-sm text-black leading-tight border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="direccion" type="text" placeholder="direccion" name="direccion" required
                                value="{{ $user->direccion }}" />
                        </div>
                        <div class="mb-4 md:mr-2 md:mb-0">
                            <label class="block mb-2 text-sm font-bold " for="credit">
                                Tarjeta crédito
                            </label>
                            <input
                                class="w-full px-3 py-2 text-sm text-black leading-tight border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="credit" type="number" placeholder="credit" name="credit" required
                                value="{{ $user->creditCard }}" min="1000 0000 0000 0000" max="9999 9999 9999 9999" />
                        </div>

                    </div>
                    <div class="mb-6 text-center">
                        <input type="submit"
                            class="w-full transition bg-green-600 hover:bg-indigo-500 hover:text-white text-white font-bold duration-300 py-2 px-4 rounded"
                            value="Confirmar datos y finalizar pedido">
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
