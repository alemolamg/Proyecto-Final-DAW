<x-app-layout>
    <!-- Lógica busqueda -->
    <x-productSearchComponent></x-productSearchComponent>

    <div class="max-w mx-auto sm:px-1 lg:px-0 px-1">

        <x-ProductListComponent titulo="Resultados de: {{ $clave }}" :productos="$productos">
        </x-ProductListComponent>

    </div>
</x-app-layout>
