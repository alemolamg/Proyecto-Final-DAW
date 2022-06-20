<a class="text-white font-white transition hover:scale-105 hover:-translate-y-1 hover:bg-indigo-600 duration-300  max-w-sm mx-1 my-2 rounded-lg overflow-hidden md:mx-2 md:my-3 lg:my-2 bg-green-700 cursor-default"
    href="{{ route('pedido.show', $pedido->id) }}">
    <div class="m-2 ">
        <h2 class="font-bold text-xl">ID pedido: {{ $pedido->id }}</h2>
        <p class="font-bold">Estado:
            @switch($pedido->estado)
                @case(0)
                    En preparación
                @break

                @case(1)
                    Enviado
                @break

                @case(2)
                    En reparto
                @break

                @case(3)
                    Entregado
                @break

                @case(4)
                    Finalizado
                @break

                @default
                    Cancelado.
            @endswitch
        </p>
        <p>Fecha pedido: {{ $pedido->fechaPedido }}</p>
        <p>Precio total: {{ $pedido->precioTotal }}€</p>
    </div>
</a>
