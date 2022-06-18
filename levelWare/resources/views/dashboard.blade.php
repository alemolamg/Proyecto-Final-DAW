<?php
// Lista de productos a pasar al componente.
$productosAll = App\Models\Product::all()
    ->where('stock', '>', 5)
    ->take(24);

$proNuevos = \App\Models\Product::orderBy('created_at', 'desc')
    ->take(12)
    ->get();

$proMasStock = \App\Models\Product::where('stock', '>', 0)
    ->orderBy('stock', 'desc')
    ->take(6)
    ->get();

$juegos = \App\Models\Product::where('tipoPro', 2)
    ->orderBy('stock', 'desc')
    ->get();

$peri = \App\Models\Product::where('tipoPro', 3)
    ->take(10)
    ->get();

$xbox = \App\Models\Product::where('nombre', 'LIKE', '%xbox%')
    ->where('descripcion', 'LIKE', '%xbox%')
    ->get();
?>

<x-app-layout>
    <x-productSearchComponent></x-productSearchComponent>
    <div class="max-w mx-auto sm:px-1 lg:px-0 px-1">

        <x-ProductListComponent :productos="$productosAll">
        </x-ProductListComponent>

        <x-ProductListComponent titulo="Periféricos" :productos="$peri">
        </x-ProductListComponent>

        <x-ProductListComponent titulo="Ultimos Productos añadidos" :productos="$proNuevos">
        </x-ProductListComponent>

        <x-ProductListComponent titulo="Productos con más Stock" :productos="$proMasStock">
        </x-ProductListComponent>

    </div>
</x-app-layout>
