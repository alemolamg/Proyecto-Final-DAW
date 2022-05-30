<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($pro->nombre) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-0 bg-white border-b border-gray-200">

                    <!-- <div id="container" class=" grid md:grid-cols-2  "> -->
                    <div id="container" class="grid md:grid-flow-col bg-yellow-300 ">
                        <div id="imgPro" class="justify-start m-0 p-0">
                            <img class="w-full h-auto p-0" src="{{ asset($pro->imagen) }}" alt="{{ $pro->imagen }}">
                        </div>
                        <div id="datosPro" class="bg-red-200 p-3  ">
                            <h1 class="text-4xl text-center font-bold">{{ $pro->nombre }}</h1>
                            <br>
                            <p class="mx-1 font-bold">Descripción: </p>
                            <p class="mx-2 px-1 text-justify max-w-md ">{{ $pro->descripcion }}</p>
                            <br>
                            <h2 class="mx-1 font-bold">Stock restante: </h2>
                            <p class="mx-2 px-1 max-w-md ">{{ $pro->stock }}</p>

                            <br>
                            <h2 class="mx-1 font-bold">Categoría: </h2>
                            @if ($pro->tipoPro == 1)
                                <!-- tipoPro 1 = consola -->
                                <p class="mx-2 px-1 max-w-md ">Consola</p>
                            @elseif ($pro->tipoPro == 2)
                                <!-- tipoPro 2 = juego -->
                                <p class="mx-2 px-1 max-w-md ">Juego</p>
                            @else
                                <!-- cualquier otro producto -->
                                <p class="mx-2 px-1 max-w-md ">Periférico</p>
                            @endif
                            <br>

                            <p class="mx-1 font-bold">Precio: </p>
                            <p class="mx-2 px-1 text-justify  ">{{ $pro->precio }}€</p>
                            <br>
                            <!-- <h2 class="mx-1 font-bold">Opciones: </h2> -->

                            <br>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
