<div class="rounded-lg overflow-hidden md:mx-2 my-4">
    <h2 class="mx-3 mt-1 text-white font-bold uppercase text-2xl px-2">Lista productos </h2>
    <div id="boxCartas" class="grid grid-cols-3 lg:grid-cols-6 md:grid-cols-5 2xl:grid-cols-10 justify-center pt-1">

        @foreach ($productos as $pro)
            <x-productCard id="{{ $pro->id }}">
                <x-slot name="imagen">{{ $pro->imagen }}</x-slot>
                <x-slot name="titulo">{{ $pro->nombre }}</x-slot>
                <x-slot name="precio">{{ $pro->precio }}</x-slot>
                {{ $pro->descripcion }}
            </x-productCard>
        @endforeach

    </div>

</div>
