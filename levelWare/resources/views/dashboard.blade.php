<x-app-layout>

    <div class="py-0">
        <div class="max-w mx-auto sm:px-0 lg:px-0">
            <div class="p-3 ">

                <?php
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
                ?>

                <x-ProductListComponent :productos="$productosAll">
                </x-ProductListComponent>

                <x-ProductListComponent :productos="$proMasStock">
                </x-ProductListComponent>

                <x-ProductListComponent :productos="$juegos">
                </x-ProductListComponent>


            </div>

        </div>
    </div>
</x-app-layout>
