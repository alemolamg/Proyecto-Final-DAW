<?php
$productos = \App\Models\Product::where("tipoPro", 2)->orderBy('stock', 'desc')->get();
?>

<div class="rounded-lg overflow-hidden md:mx-2 my-2 bg-yellow-400 shadow-md">  <!-- bg-{$color}-200"> -->
    <h2 class="mx-2 mt-1 text-2xl px-2">Juegos a la venta</h2>
    <div id="boxCartas" class="grid grid-cols-2 md:grid-cols-5 justify-center pt-1">

        @foreach($productos as $pro)
            <x-productCard id="{{$pro->id}}">
                <x-slot name="imagen">{{$pro->imagen}}</x-slot>
                <x-slot name="titulo">{{$pro->nombre}}</x-slot>
                {{$pro->descripcion}}
            </x-productCard>
        @endforeach

    </div>

</div>
