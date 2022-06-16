<x-app-layout>

    <div class="py-0">
        <div class="max-w mx-auto sm:px-0 lg:px-0">

            <div class="py-2 container mx-auto ">
                <div class="flex justify-center px-2 my-8 pb-2 ">

                    <!-- Row -->
                    <div class="w-full xl:w-3/4 lg:w-11/12 flex">

                        <!-- Col -->
                        <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-6/12 bg-cover rounded-l-lg"
                            style="background-image: url('https://image.freepik.com/free-photo/technician-soldering-laptop-board_151013-1650.jpg')">
                        </div>
                        <!-- Col -->
                        <div class="w-full lg:w-7/12 bg-white px-4 py-2 rounded-lg lg:rounded-l-none">
                            <h3 class="pt-4 text-3xl text-center text-black">Formulario de Reparación</h3>
                            <form method="POST" action="{{ route('clientService.store') }}"
                                class="px-8 pt-6 pb-8 mb-4 bg-white rounded" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="nombre">
                                            Nombre producto
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            id="nombre" type="text" placeholder="Nombre producto" name="nombre"
                                            required />
                                    </div>
                                    <div class="mb-4 md:mr-2 md:mb-0 text-black font-black">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="tipoPro">
                                            Tipo de producto
                                        </label>
                                        <select
                                            class="form-select form-select-lg mb-3
                                      appearance-none
                                      text-black
                                      block
                                      w-full
                                      px-7
                                      py-2
                                      font-normal
                                      justify-start
                                      align-middle
                                      text-gray-700
                                      bg-white bg-clip-padding bg-no-repeat
                                      border border-solid border-gray-300
                                      rounded-md
                                      transition
                                      shadow
                                      ease-in-out
                                      m-0
                                      focus:text-gray-700 focus:bg-white focus:border-white focus:shadow-outline"
                                            name="tipoPro" id="tipoPro">
                                            <option value="1">Consola</option>
                                            <option value="4">PC</option>
                                            <option value="3">Periférico</option>
                                            <option value="5" selected>Otro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-4 ">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="descripro">
                                        Descripción del problema
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="descripro" type="text" placeholder="Descripción" name="descripro"
                                        required />
                                </div>

                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="Marca">
                                            Marca
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            id="Marca" step="any" type="text" placeholder="Marca del producto"
                                            name="Marca" min="0" />
                                    </div>
                                    <div class="md:ml-2">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="modelo">
                                            Modelo
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            id="modelo" type="text" placeholder="Modelo" name="modelo" min="0" />
                                    </div>
                                </div>

                                <div class="mb-4 ">
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="foto">
                                            Imagen producto
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            id="foto" type="file" placeholder="Imagen producto" name="foto" />
                                    </div>
                                </div>

                                <div class="mb-6 text-center">
                                    <input type="submit"
                                        class="w-full transition bg-green-600 hover:bg-indigo-500 hover:text-white text-white font-bold duration-300 py-2 px-4 rounded"
                                        value="Pedir reparación">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

</x-app-layout>
