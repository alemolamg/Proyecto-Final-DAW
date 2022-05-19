<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($fest->nombre) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-0 bg-white border-b border-gray-200">

                    <!-- <div id="container" class=" grid md:grid-cols-2  "> -->
                    <div id="container" class="grid md:grid-flow-col bg-yellow-300 ">
                        <div id="imgArtist" class="justify-start m-0 p-0">
                            <img class="w-full h-auto p-0"
                                 src="{{asset($fest->imagen)}}" alt="{{$fest->imagen}}">
                        </div>
                        <div id="datosFest" class="bg-red-200 p-3  ">
                            <h1 class="text-4xl text-center font-bold">{{$fest->nombre}}</h1>
                            <br>
                            <h2 class="mx-1 font-bold">Estilo: </h2>
                            <p class="mx-2 px-1 max-w-md ">{{$fest->estilo}}</p>
                            <br>
                            <p class="mx-1 font-bold">Descripción: </p>
                            <p class="mx-2 px-1 text-justify max-w-md ">{{$fest->descripcion}}</p>
                            <br>
                            <p class="mx-1 font-bold">Precio entrada: </p>
                            <p class="mx-2 px-1 text-justify  ">{{$fest->precio}}€</p>
                            <br>
                            <!-- <h2 class="mx-1 font-bold">Opciones: </h2> -->
                            <div id="comprarEntrada"
                                 class=" max-w-md rounded-lg overflow-hidden md:mx-2 my-2  bg-blue-200">
                                <form action="{{route('compraEntrada',$fest->id)}}" method="post"
                                      class="flex justify-between">
                                    @csrf
                                    <input
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="numTickets"
                                        type="number"
                                        placeholder="Cant. Entradas"
                                        name="numTickets"
                                        value="1"
                                        required
                                    />
                                    <input type="hidden" value="{{$fest->id}}" name="festId" id="festId">
                                    <input type="submit" value="Comprar Entradas"
                                           class="w-full px-4 py-2 ml-2 font-bold text-white bg-blue-500 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline">


                                </form>

                            </div>

                            <br>

                        </div>
                    </div>
                @if(count($artistas) != 0)   <!-- no funciona pero lo dejo por si da tiempo a cambiarlo -->
                    <div id="artistas" class="pt-5">
                        <h2 class="text-center text-3xl">Lista de artistas</h2>
                        <div class="grid md:grid-cols-5 grid-cols-2 p-2">
                            @foreach($artistas as $art)
                                <a class="" href="{{route('artist.show',$art->id)}}">
                                    <div
                                        class="max-w-sm rounded-md overflow-hidden md:mx-2 my-2 text-center  bg-blue-200">
                                        <h2 class="font-bold text-xl mb-2">{{$art->nombre}}</h2>
                                        <img class="w-full" src="{{asset($art->foto)}}" alt="{{$art->foto}}">
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
