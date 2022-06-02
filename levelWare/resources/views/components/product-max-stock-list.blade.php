<?php
$productos = \App\Models\Product::where('stock', '>', 0)
    ->orderBy('stock', 'desc')->take(5)->get();
?>

<div class="rounded-lg overflow-hidden md:mx-2 my-4">
    <h2 class="mx-3 mt-1 text-white font-bold uppercase text-2xl px-2">Productos con más Stock </h2>
    <div id="boxCartas" class="grid grid-cols-2 md:grid-cols-5 justify-center pt-1">

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
