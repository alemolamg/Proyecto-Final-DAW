<div class=" rounded-lg overflow-hidden md:mx-2 my-2 bg-red-300">  <!-- bg-{$color}-200"> -->
    <h2 class="px-2">Lista productos </h2>
    <div id="boxCartas" class="grid md:grid-cols-5 justify-center pt-2">
        <x-productCard>
            <x-slot name="titulo">Primer producto</x-slot>
            Consola 1
        </x-productCard>

        <x-productCard>
            <x-slot name="titulo">Segundo producto</x-slot>
            Juego 1
        </x-productCard>

        <x-productCard>
            <x-slot name="titulo">Mario Kart 8 Deluxe</x-slot>
            Juego de carreras número 1 en el mundo.
        </x-productCard>

        <x-productCard>
            <x-slot name="titulo">Producto especial</x-slot>
            Juego 1
        </x-productCard>

    </div>

</div>
