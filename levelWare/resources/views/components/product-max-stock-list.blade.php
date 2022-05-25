<?php
$productos = \App\Models\Product::where('stock', '>', 0)
    ->orderBy('stock', 'desc')
    ->get();
?>

<div class="rounded-lg overflow-hidden md:mx-2 my-2 bg-blue-300 shadow-md">
    <!-- bg-{$color}-200"> -->
    <h2 class="mx-2 mt-1 text-2xl px-2">Productos con más Stock </h2>
    <div id="boxCartas" class="grid grid-cols-2 md:grid-cols-5 justify-center pt-1">

        @foreach ($productos as $pro)
            <x-productCard id="{{ $pro->id }}">
                <x-slot name="imagen">{{ $pro->imagen }}</x-slot>
                <x-slot name="titulo">{{ $pro->nombre }}</x-slot>
                {{ $pro->descripcion }}
            </x-productCard>
        @endforeach

    </div>

</div>
