<?php
$juegos = \App\Models\Product::where('tipoPro', 2)
    ->orderBy('updated_at', 'desc')
    ->take(12)
    ->get();

$pocoStock = \App\Models\Product::where('tipoPro', 2)
    ->where('stock', '<', 11)
    ->orderBy('updated_at', 'desc')
    ->take(12)
    ->get();

$j10E = \App\Models\Product::where('tipoPro', 2)
    ->where('precio', '<', 10)
    ->orderBy('precio', 'desc')
    ->take(12)
    ->get();

$xbox = \App\Models\Product::where('descripcion', 'LIKE', '%xbox%')->get();

$juegosNuevos = \App\Models\Product::where('tipoPro', 2)
    ->orderBy('created_at', 'desc')
    ->take(12)
    ->get();
?>
<x-app-layout>
    <x-productSearchComponent></x-productSearchComponent>

    <div class="max-w mx-auto sm:px-0 lg:px-0">
        <div class="max-w mx-auto sm:px-1 lg:px-0 px-1">

            <x-ProductListComponent :productos="$juegos" titulo="Juegos destacados"></x-ProductListComponent>
            <x-ProductListComponent :productos="$juegosNuevos" titulo="Nuevos Lanzamientos"></x-ProductListComponent>
            <x-ProductListComponent :productos="$j10E" titulo="Juegos por menos de 10€"></x-ProductListComponent>
            <x-ProductListComponent :productos="$pocoStock" titulo="Ultimas unidades"></x-ProductListComponent>

        </div>
    </div>
</x-app-layout>
