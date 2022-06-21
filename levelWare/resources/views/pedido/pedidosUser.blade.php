<x-app-layout>
    <div class="mt-3 pt-1 ">
        <div class="w-auto lg:w-auto py-3 pl-2 md:pl-5 ">
            <h2 class="font-bold text-4xl uppercase"> {{ __('order.orderListTittle') }} </h2>
            </p>
        </div>


        <div id="listaPedidos" class="md:px-4 px-2 py-1 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 ">
            @if (!empty($pedidos))
                @foreach ($pedidos as $ped)
                    <x-order-list-component :pedido="$ped">
                    </x-order-list-component>
                @endforeach
            @else
                <p>No has realizado ningún pedido</p>
            @endif
        </div>
    </div>
</x-app-layout>
