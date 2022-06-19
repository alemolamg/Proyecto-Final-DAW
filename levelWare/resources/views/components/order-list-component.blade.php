<a class="text-white font-white transition hover:scale-105 hover:-translate-y-1 hover:bg-indigo-600 duration-300  max-w-sm mx-1 my-2 rounded-lg overflow-hidden md:mx-2 md:my-3 lg:my-2 bg-green-700 cursor-default"
    href="{{ route('pedido.show', $pedido->id) }}">
    <div class="m-2 ">
        <h2 class="font-bold text-xl">ID pedido: {{ $pedido->id }}</h2>
        <p>Fecha pedido: {{ $pedido->fechaPedido }}</p>
        <p>Precio total: {{ $pedido->precioTotal }}</p>

    </div>
</a>
