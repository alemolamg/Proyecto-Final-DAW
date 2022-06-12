<x-app-layout>

    <div class="py-0">
        <div class="max-w mx-auto sm:px-0 lg:px-0">
            <div class="p-3 ">

                <?php
                $productosAll = \App\Models\Product::all()
                    ->where('stock', '>', 0)
                    ->take(30);
                ?>

                <x-ProductListComponent :productos="$productosAll">
                </x-ProductListComponent>

                <x-ProductMaxStockList>
                </x-ProductMaxStockList>

                <x-ProductsJuegos></x-ProductsJuegos>


            </div>

        </div>
    </div>
</x-app-layout>
