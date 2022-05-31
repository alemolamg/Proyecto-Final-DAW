<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($pro->nombre) }}
        </h2>
    </x-slot>
    <div class="py-12 bg-green-600">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-0 bg-green-600 border-b border-gray-200">
                <div id="container" class="grid md:grid-flow-col">

                    <div id="imgPro" class="aling-center align-content-center md:justify-start m-0 p-0">
                        <img class="md:w-full rounded-lg h-auto p-0" src="{{ asset($pro->imagen) }}"
                            alt="{{ $pro->imagen }}">
                    </div>
                    <div id="datosPro" class=" p-3">
                        <!-- grid md:grid-flow-col "> -->
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

                        <div id="aniadirACesta" class=" max-w-md rounded-lg overflow-hidden md:mx-2 my-2  bg-blue-200">
                            <form action="{{ route('aniadirCestaSesion') }}" method="POST">
                                @csrf
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="cant" type="number" placeholder="Cant. Entradas" name="cant" value="1"
                                    required />
                                <input type="hidden" value="{{ $pro->id }}" name="proId" id="proId">
                                <input type="submit" value="Comprar"
                                    class="bg-indigo-600 hover:bg-green-300 hover:text-black text-white font-bold py-2 px-4 rounded">
                            </form>
                        </div>

                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
