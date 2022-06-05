<x-app-layout>

    <div class="py-0">
        <div class="max-w mx-auto sm:px-0 lg:px-0">

            <div class="py-2 container mx-auto ">
                <div class="flex justify-center px-6 my-12 pb-6 ">

                    <!-- Row -->
                    <div class="w-full xl:w-3/4 lg:w-11/12 flex">

                        <!-- Col -->
                        <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                            style="background-image: url('https://th.bing.com/th/id/R.304961cab66f4b7fb19cd8e6379621c5?rik=6bGc4HNAzPZjDw&riu=http%3a%2f%2f24.media.tumblr.com%2ftumblr_mej8exgplo1rpgf8io1_500.png&ehk=%2fD%2fvhKakBSHsp74mUC0OudKxQU7HK94%2bK4arxIERv94%3d&risl=&pid=ImgRaw&r=0')">
                        </div>
                        <!-- Col -->
                        <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                            <h3 class="pt-4 text-2xl text-center text-black">Añadir Producto</h3>
                            <form method="POST" action="{{ route('producto.store') }}"
                                class="px-8 pt-6 pb-8 mb-4 bg-white rounded" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="nombre">
                                            Nombre
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
                                            <option value="2">Juego</option>
                                            <option value="3">Periférico</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-4 ">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="descrip">
                                        Descripción
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="descrip" type="text" placeholder="Descripción" name="descrip" />
                                </div>
                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="precio">
                                            Precio
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            id="precio" type="number" placeholder="Precio del producto" name="precio"
                                            min="0" required />
                                    </div>
                                    <div class="md:ml-2">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="almacenamiento">
                                            Almacenamiento
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            id="almacenamiento" type="number" placeholder="Localidad del Festival"
                                            name="almacenamiento" min="0" value="0" />
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
                                            id="stock" type="number" placeholder="stock producto" name="stock" />
                                    </div>

                                </div>

                                <div class="mb-6 text-center">
                                    <input type="submit"
                                        class="w-full px-4 py-2 font-bold text-black bg-indigo-300 rounded-md hover:bg-emerald-300 focus:outline-none focus:shadow-outline"
                                        value="Añadir Producto">
                                </div>
                                <hr class="mb-6 border-t" />
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

</x-app-layout>
