<x-app-layout>

    <div class="py-0">
        <div class="max-w mx-auto sm:px-0 lg:px-0">
            <div class="p-3 ">

                <?php
                // Lista de productos a pasar al componente.
                $productosAll = App\Models\Product::all()
                    ->where('stock', '>', 0)
                    ->take(30);

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
                ?>

                <x-ProductListComponent :productos="$productosAll">
                </x-ProductListComponent>

                <x-ProductListComponent titulo="Productos con más Stock" :productos="$proMasStock">
                </x-ProductListComponent>

                <x-ProductListComponent titulo="Juegos" :productos="$juegos">
                </x-ProductListComponent>

                <x-ProductListComponent titulo="Periféricos" :productos="$peri">
                </x-ProductListComponent>

            </div>

        </div>
    </div>
</x-app-layout>
