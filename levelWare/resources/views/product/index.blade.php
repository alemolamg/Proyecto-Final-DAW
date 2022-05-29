<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <h1 class="text-center font-bold text-2xl">LISTA DE PRODUCTOS</h1>

                    <div id="boxCartas" class="grid md:grid-cols-3 justify-center pt-3">

                        @foreach ($productos as $p)
                            <x-productCard id="{{ $p->id }}">
                                <x-slot name="imagen">{{ $p->imagen }}</x-slot>
                                <x-slot name="titulo">{{ $p->nombre }}</x-slot>
                                {{ $p->descripcion }}
                            </x-productCard>
                        @endforeach
                    </div>

                    @if (session('error') == 1)
                        <br>ERROR EN LA DB;
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
