<x-app-layout>
    <div class="levelware px-2 md:px-3 lg:px-5 md:py-2 ">
        <h1 class="text-2xl md:text-4xl font-bold">Datos del pedido</h1>
        <br>
        <h2 class="text-xl md:text-2xl font-bold">Productos del pedido:</h2>
        <div class="w-full flex flex-wrap">
            @foreach ($proCesta as $key => $pc)
                <?php
                $pro = App\Models\Product::findOrFail($pc->idPro);
                ?>
                <x-product-card-big :producto="$pro" :cantidad="$pc['cantidad']"></x-product-card-big>
            @endforeach
        </div>
        <p class="text-xl font-bold uppercase mt-4">Precio Total: {{ $pedido->precioTotal }}</p>
    </div>

</x-app-layout>
