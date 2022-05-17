<?php
$productos = \App\Models\Product::all();
?>

<div class="rounded-lg overflow-hidden md:mx-2 my-2 bg-red-300 shadow-md">  <!-- bg-{$color}-200"> -->
    <h2 class="mx-2 mt-1 text-2xl px-2">Lista productos </h2>
    <div id="boxCartas" class="grid grid-cols-2 md:grid-cols-5 justify-center pt-1">

        @foreach($productos as $pro)
            <x-productCard>
                <x-slot name="imagen">{{$pro->imagen}}</x-slot>
                <x-slot name="titulo">{{$pro->nombre}}</x-slot>
                {{$pro->descripcion}}
            </x-productCard>
        @endforeach

    </div>

</div>
