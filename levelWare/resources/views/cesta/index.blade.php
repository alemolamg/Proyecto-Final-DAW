<?php

?>

<x-app-layout>
    <div class="py-0">
        <div class="max-w mx-auto sm:px-0 lg:px-0">
            <div class="bg-white overflow-hidden ">
                <div class="p-3 bg-green-700">

                    @if ((session()->get('CESTA')) == NULL)
                        {{'La cesta está vacía'}}
                    @else
                        <!-- Muestra los elementos de la cesta ordenados por lista -->
                        <x-CartList> </x-CartList>
                    @endif

                </div>

            </div>
        </div>
</x-app-layout>
