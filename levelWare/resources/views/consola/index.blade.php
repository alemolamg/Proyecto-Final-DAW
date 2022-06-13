<x-app-layout>

    <div class="py-0">
        <div class="max-w mx-auto sm:px-0 lg:px-0">
            <div class="p-3 ">

                <?php
                // Lista de productos a pasar al componente.

                $consolas = \App\Models\Product::where('tipoPro', 1)
                    ->orderBy('updated_at', 'desc')
                    ->get();

                $xbox = \App\Models\Product::where('descripcion', 'LIKE', '%xbox%')->get();
                ?>

                <x-ProductListComponent titulo="Consolas" :productos="$consolas">
                </x-ProductListComponent>

                <x-ProductListComponent titulo="Consolas" :productos="$xbox">
                </x-ProductListComponent>

            </div>

        </div>
    </div>
</x-app-layout>
