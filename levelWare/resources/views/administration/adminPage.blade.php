<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Page') }}
        </h2>
    </x-slot>

    <div class="py-0">
        <div class="max-w mx-auto sm:px-0 lg:px-0">
            <div class="bg-white overflow-hidden ">

                <div class="p-3 bg-green-700">

                    <div id="boxCartas" class="grid md:grid-cols-3 justify-center pt-3">

                        <!-- Carta de control de Productos -->
                        <div class="max-w-sm rounded overflow-hidden md:mx-2 my-2  bg-blue-200">
                            <div class="px-6 py-4">
                                <h2 class="font-bold text-xl mb-2">Administración Productos</h2>
                                <p class="text-gray-700 text-base">
                                    Controla los productos presentes.
                                </p>
                            </div>
                            <div class="grid px-6 pt-4 pb-2 justify-center">
                                <a href="#">
                                    <button type="button"
                                            class="inline-block bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white px-3 py-1 text-sm font-semibold text-blue-400 mr-2 mb-2">
                                        Añadir producto
                                    </button>
                                </a>
                                <!-- <a href="#">
                                    <button type="button"
                                            class="inline-block bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white px-3 py-1 text-sm font-semibold text-blue-400 mr-2 mb-2">
                                        Añadir nuevo festival
                                    </button>
                                </a>-->
                            </div>
                        </div>

                        <!-- Carta de control de usuarios -->
                        <div class="max-w-sm rounded overflow-hidden md:mx-2 my-2  bg-green-200">
                            <div class="px-6 py-4">
                                <h2 class="font-bold text-xl mb-2">Control de Usuarios</h2>
                                <p class="text-gray-700 text-base">
                                    Controla los usuarios registrados
                                </p>
                            </div>
                            <div class="grid px-6 pt-4 pb-2 justify-center">
                                <a href="#">
                                    <button type="button"
                                            class="inline-block bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white px-3 py-1 text-sm font-semibold text-blue-400 mr-2 mb-2">
                                        Lista Usuarios
                                    </button>
                                </a>
                                <!-- <a href="#">
                                    <button type="button"
                                            class="inline-block bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white px-3 py-1 text-sm font-semibold text-blue-400 mr-2 mb-2">
                                        Usuario nuevo
                                    </button>
                                </a> -->
                            </div>
                        </div>

                        <!-- Carta de control de pedidos -->
                        <div class="max-w-sm rounded overflow-hidden md:mx-2 my-2  bg-red-200">
                            <div class="px-6 py-4">
                                <h2 class="font-bold text-xl mb-2">Control de Pedidos</h2>
                                <p class="text-gray-700 text-base">
                                    Muestra los pedidos de los clientes
                                </p>
                            </div>
                            <div class="grid px-6 pt-4 pb-2 justify-center">
                                <a href="#">
                                    <button type="button"
                                            class="inline-block bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white px-3 py-1 text-sm font-semibold text-blue-400 mr-2 mb-2">
                                        Lista pedidos
                                    </button>
                                </a>
                                <a href="#">
                                    <button type="button"
                                            class="inline-block bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white px-3 py-1 text-sm font-semibold text-blue-400 mr-2 mb-2">
                                        Crear pedido
                                    </button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
</x-app-layout>

