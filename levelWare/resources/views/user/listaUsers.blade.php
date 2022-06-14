<x-app-layout>
    <div class="py-3 max-w-7xl mx-auto sm:px-6 lg:px-8 overflow-hidden shadow-sm sm:rounded-lg">
        <div id="barraBuscar" class="mt-3 pt-1 flex justify-center">
            <div class="w-auto lg:w-auto">
                <form action="{{ route('searchProductsAdmin') }}">
                    @csrf
                    <div
                        class="input-group relative flex flex-wrap items-stretch mb-4 focus:border-indigo-600 focus:outline-none">
                        <input type="search"
                            class="form-control relative flex-auto min-w-0 block px-5 py-3 text-base font-normal text-white bg-gray-900/20 bg-clip-padding border border-solid border-green-700 rounded-l-lg transition ease-in-out m-0 focus:text-white focus:bg-gray-900/40 focus:border-indigo-600 focus:outline-none"
                            placeholder="{{ __('messages.search') }}" aria-label="Search"
                            aria-describedby="button-addon2" name="clave" id="clave">
                        <input type="hidden" name="ruta" value="{{ Route::currentRouteName() }}">
                        <button
                            class="btn inline-block px-6 py-2.5 bg-green-700 text-white font-bold font-medium text-md leading-tight uppercase rounded-r-lg hover:bg-indigo-600 hover:shadow-lg focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-indigo-600 transition duration-150 ease-in-out flex items-center"
                            type="submit" id="btnLupa" name="btnLupa">
                            <!-- Logo lupa sacado de internet -->
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search"
                                class="w-4" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="p-5 border-b border-gray-200">
            <div class="grid grid-cols-2">
                <h1 class="text-2xl uppercase">Lista De Productos</h1>

                <div id="nuevoPro" class="pb-2 align-content-end justify-end">
                    <a href="{{ route('producto.create') }}"
                        class="align-content-end justify-end justify-content-end">
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
                                {{ $pro->id }}
                            </td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                {{ $pro->nombre }}
                            </td>
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
                                {{ $pro->precio }}
                            </td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                {{ $pro->stock }}
                            </td>
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
