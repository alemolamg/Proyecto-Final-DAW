<x-app-layout>
    <div class="levelware px-2 md:px-3 lg:px-5 md:py-2 ">
        <h1 class="text-2xl md:text-4xl font-bold">Datos del pedido</h1>
        <br>
        <h2 class="text-xl md:text-2xl font-bold">Productos del pedido:</h2>
        <div class="grid grid-cols-3">
            @foreach ($productos as $pro)
                <x-product-card-big :producto="$pro" :cantidad="$pro['cant']"></x-product-card-big>
            @endforeach

        </div>
    </div>

</x-app-layout>
