<x-app-layout>

    <body class="font-mono bg-gray-400">
        <!-- Container -->
        <div class="container mx-auto">
            <div class="flex justify-center px-6 my-12 pb-4">
                <!-- Row -->
                <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <!-- Col -->
                    <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                        style="background-image: url('https://th.bing.com/th/id/R.304961cab66f4b7fb19cd8e6379621c5?rik=6bGc4HNAzPZjDw&riu=http%3a%2f%2f24.media.tumblr.com%2ftumblr_mej8exgplo1rpgf8io1_500.png&ehk=%2fD%2fvhKakBSHsp74mUC0OudKxQU7HK94%2bK4arxIERv94%3d&risl=&pid=ImgRaw&r=0')">
                    </div>
                    <!-- Col -->
                    <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="pt-4 text-2xl text-center text-black">Editar Producto</h3>
                        <form method="POST" action="{{ route('producto.update', $producto->id) }}"
                            class="px-8 pt-6 pb-8 mb-4 bg-white rounded" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4 md:mr-2 md:mb-0">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="nombre">
                                        Nombre
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="nombre" type="text" placeholder="Nombre producto" name="nombre" required
                                        value="{{ $producto->nombre }}" />
                                </div>
                                <div class="mb-4 md:mr-2 md:mb-0 text-black font-black">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="tipoPro">
                                        Rol
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
                                        name="rol" id="rol">
                                        <option value="0" @if ($producto->tipoPro == 0) selected @endif> Cliente
                                        </option>
                                        <option value="1" @if ($producto->tipoPro == 1) selected @endif>
                                            Administrador
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4 ">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="descrip">
                                    Descripci??n
                                </label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="descrip" type="text" placeholder="Descripci??n" name="descrip"
                                    value="{{ $producto->descripcion }}" />
                            </div>
                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4 md:mr-2 md:mb-0">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="precio">
                                        Precio
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="precio" step="any" type="number" placeholder="Precio del producto"
                                        name="precio" min="0" required value="{{ $producto->precio }}" />
                                </div>
                                <div class="md:ml-2">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="almacenamiento">
                                        Almacenamiento (GB)
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="almacenamiento" type="number" placeholder="Localidad del Festival"
                                        name="almacenamiento" min="0" value="{{ $producto->almacenamiento }}" />
                                </div>
                            </div>

                            <div class="mb-4 ">
                                <div class="mb-4 md:mr-2 md:mb-0">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="foto">
                                        Foto
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="foto" type="file" placeholder="Imagen del coche" name="foto" />
                                </div>
                            </div>
                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4 md:mr-2 md:mb-0">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="stock">
                                        Stock
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="stock" type="number" placeholder="stock producto" name="stock"
                                        value="{{ $producto->stock }}" />
                                </div>
                            </div>

                            <div class="mb-6 text-center">
                                <input type="submit"
                                    class="w-full transition bg-green-600 hover:bg-indigo-500 hover:text-white text-white font-bold duration-300 py-2 px-4 rounded"
                                    value="Guardar cambios">
                            </div>

                            <hr class="mb-6 border-t" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-app-layout>
