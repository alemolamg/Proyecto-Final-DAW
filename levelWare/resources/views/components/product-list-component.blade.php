<div class="rounded-lg overflow-hidden md:mx-2 my-4">
    <h2 class="mx-0 md:mx-2 px-2 mt-1 text-white font-bold uppercase text-xl lg:text-3xl"> {{ $titulo }} </h2>
    <div id="boxCartas" class="grid grid-cols-3 lg:grid-cols-6 md:grid-cols-5 2xl:grid-cols-8 justify-center pt-1">

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
