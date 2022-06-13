<x-app-layout>
    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-4 border-b border-gray-200">
            <div class="grid grid-cols-2">
                <h1 class="text-2xl uppercase">Lista De Productos</h1>

                <div id="nuevoPro" class="pb-2 align-content-end justify-end">
                    <a href="{{ route('producto.create') }}" class="align-content-end justify-end justify-content-end">
                        <button type="button" id="nuevoPro"
                            class="transition bg-green-600 hover:bg-indigo-500 hover:text-white text-white font-bold duration-300 py-2 px-4 rounded">
                            Añadir producto nuevo
                        </button>
                    </a>
                </div>
            </div>


            <!-- component -->
            <table class="min-w-full rounded-md table-auto border-collapse block md:table">
                <thead class="block md:table-header-group">
                    <tr
                        class="border border-white  block table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-white text-left block md:table-cell">
                            Id
                        </th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-white text-left block md:table-cell">
                            Nombre
                        </th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Tipo Producto
                        </th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Precio
                        </th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Stock
                        </th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Opciones
                        </th>

                    </tr>
                </thead>
                <tbody class="block md:table-row-group">
                    @foreach ($productos as $pro)
                        <tr class=" border border-grey-500 md:border-none block md:table-row">
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                {{ $pro->id }}</td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                {{ $pro->nombre }}</td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                @if ($pro->tipoPro == 1)
                                    Consola
                                @elseif($pro->tipoPro == 2)
                                    Juego
                                @else
                                    Periférico
                                @endif
                            </td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                {{ $pro->precio }}</td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                {{ $pro->stock }}</td>
                            <td
                                class="p-2 md:border md:border-grey-500 text-left block md:table-cell content-start align-content: space-between;">
                                <div class="grid grid-cols-3 ">
                                    <a class="" href="{{ route('producto.show', $pro->id) }}">
                                        <button
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">
                                            Mostrar
                                        </button>
                                    </a>
                                    <a href="{{ route('producto.edit', $pro->id) }}">
                                        <button
                                            class="bg-amber-400 hover:bg-amber-500 text-white font-bold py-1 px-2 border border-amber-400 rounded">
                                            Editar
                                        </button>
                                    </a>
                                    @if (isset($pro->deleted_at) == null)
                                        <form action="{{ route('producto.destroy', $pro->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">
                                                Borrar
                                            </button>
                                        </form>
                                    @else
                                        <a href="{{ route('activarPro', $pro->id) }}">
                                            <button type="submit"
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 border border-green-500 rounded">
                                                Restaurar
                                            </button>
                                        </a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            @if (!empty(session('error')))
                <br>TENEMOS UN ERROR: {{ session('error') }};
            @endif
        </div>
    </div>
</x-app-layout>
