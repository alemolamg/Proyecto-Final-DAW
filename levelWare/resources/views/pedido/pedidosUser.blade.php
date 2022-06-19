<x-app-layout>
    <div class="mt-3 pt-1 ">
        <div class="w-auto lg:w-auto py-3 pl-2 md:pl-5 ">
            <h2 class="font-bold text-4xl uppercase"> {{ __('order.orderListTittle') }} </h2>
            </p>
        </div>


        <div id="listaPedidos" class="md:px-4 px-2 py-1 flex flex-wrap justify-between">
            @if (!empty($pedidos))
                @foreach ($pedidos as $ped)
                    <x-orderListComponent :pedidos="$ped"></x-orderListComponent>
                @endforeach
            @else
                <p>No has realizado ningún pedido</p>
            @endif
        </div>
    </div>
</x-app-layout>
