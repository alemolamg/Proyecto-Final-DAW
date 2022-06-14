<x-app-layout>
    <!-- Lógica busqueda -->
    <div id="barraBuscar" class="mt-3 pt-1 flex justify-center">
        <div class="w-auto lg:w-auto">
            <form action="{{ route('searchProducts') }}">
                @csrf
                <div
                    class="input-group relative flex flex-wrap items-stretch mb-4 focus:border-indigo-600 focus:outline-none">
                    <input type="search"
                        class="form-control relative flex-auto min-w-0 block px-5 py-3 text-base font-normal text-white bg-gray-900/20 bg-clip-padding border border-solid border-green-700 rounded-l-lg transition ease-in-out m-0 focus:text-white focus:bg-gray-900/40 focus:border-indigo-600 focus:outline-none"
                        placeholder="{{ __('messages.search') }}" aria-label="Search" aria-describedby="button-addon2"
                        name="clave" id="clave">
                    <button
                        class="btn inline-block px-6 py-2.5 bg-green-700 text-white font-bold font-medium text-md leading-tight uppercase rounded-r-lg hover:bg-indigo-600 hover:shadow-lg focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-indigo-600 transition duration-150 ease-in-out flex items-center"
                        type="submit" id="btnLupa" name="btnLupa">
                        <!-- Logo lupa sacado de internet -->
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search"
                            class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                            </path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="max-w mx-auto sm:px-1 lg:px-0 px-1">

        <x-ProductListComponent titulo="Resultados de: {{ $clave }}" :productos="$productos">
        </x-ProductListComponent>

    </div>
</x-app-layout>
