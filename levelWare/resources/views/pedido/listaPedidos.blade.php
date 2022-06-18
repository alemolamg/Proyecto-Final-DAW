<x-app-layout>
    <div class="py-8 max-w-7xl mx-auto sm:px-6 lg:px-8 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-4 border-b border-gray-200">
            <div class="grid grid-cols-2">
                <h1 class="text-2xl uppercase mb-3 font-bold">Lista De Pedidos</h1>

                <!-- <div id="nuevoped" class="pb-2 align-content-end justify-end">
                    <a href="{ route('pedido.create') }}" class="align-content-end justify-end justify-content-end">
                        <button type="button" id="nuevoped"
                            class="transition bg-green-600 hover:bg-indigo-500 hover:text-white text-white font-bold duration-300 py-2 px-4 rounded">
                            Añadir pedido
                        </button>
                    </a>
                </div> -->
            </div>


            <!-- component -->
            <table class="min-w-full rounded-md table-auto border-collapse block md:table">
                <thead class="block md:table-header-group">
                    <tr
                        class="border border-white block table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-white text-left block md:table-cell">
                            Id
                        </th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-white text-left block md:table-cell">
                            Usuario
                        </th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Precio Total
                        </th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Estado Pedido
                        </th>
                        <th
                            class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Opciones
                        </th>

                    </tr>
                </thead>
                <tbody class="block md:table-row-group">
                    @foreach ($pedidos as $ped)
                        <tr class=" border border-grey-500 md:border-none block md:table-row">
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                {{ $ped->id }}</td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                {{ Auth::User()->name }}</td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                {{ $ped->precioTotal }}</td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                <form action="{{ route('pedido.update', $ped->id) }}" class="flex flex-col">
                                    @csrf
                                    @method('PUT')
                                    <select
                                        class="form-select form-select-lg mb-3
                                                appearance-none
                                                block
                                                bg-gray-700
                                                pl-2
                                                py-2
                                                font-normal
                                                text-white
                                                bg-clip-padding bg-no-repeat
                                                border border-solid border-white
                                                rounded-md
                                                transition
                                                shadow
                                                ease-in-out
                                                m-0
                                                focus:text-white focus:bg-gray-700 focus:border-white focus:shadow-outline"
                                        name="estado" id="estado">
                                        <option value="0" @if ($ped->estado == 0) selected @endif>En
                                            preparación</option>
                                        <option value="1" @if ($ped->estado == 1) selected @endif>
                                            Enviado
                                        </option>
                                        <option value="2" @if ($ped->estado == 2) selected @endif>En
                                            reparto</option>
                                        <option value="3" @if ($ped->estado == 3) selected @endif>
                                            Entregado</option>
                                        <option value="4" @if ($ped->estado == 4) selected @endif>
                                            Finalizado</option>
                                        <option value="-1" @if ($ped->estado < 0) selected @endif>
                                            Cancelado</option>
                                    </select>
                                    <input type="submit" value="Actualizar"
                                        class=" bg-amber-400 hover:bg-amber-500 text-white font-bold py-1 px-2 border border-amber-400 rounded">
                                </form>
                            </td>

                            <td
                                class="p-0 md:border md:border-grey-500 text-left block md:table-cell content-start align-content: space-between;">
                                <div class="flex justify-center">
                                    @if (isset($ped->deleted_at) == null)
                                        <form action="{{ route('pedido.destroy', $ped->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 border border-red-500 rounded">
                                                Borrar
                                            </button>
                                        </form>
                                    @else
                                        <a href="{{ route('activarped', $ped->id) }}">
                                            <button type="submit"
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 border border-green-500 rounded">
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
