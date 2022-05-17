<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-0">
        <div class="max-w mx-auto sm:px-0 lg:px-0">

            <div class="bg-white overflow-hidden ">
                <!-- <x-jet-welcome/> -->

                <div class="p-3 bg-purple-600">

                    <x-ProductListComponent>
                    </x-ProductListComponent>

                    <x-ProductMaxStockList>
                    </x-ProductMaxStockList>


                </div>

            </div>
        </div>
</x-app-layout>
