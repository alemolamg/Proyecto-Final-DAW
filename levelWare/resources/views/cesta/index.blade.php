<?php

?>

<x-app-layout>
    <div class="py-0">
        <div class="max-w mx-auto sm:px-0 lg:px-0 overflow-hidden levelware">
            <div class="p-3">

                @if (session()->get('CESTA') == null)
                    <div class="text-center font-bold text-2xl py-2">La cesta está vacía </div>
                @else
                    <!-- Muestra los elementos de la cesta ordenados por lista -->
                    <x-CartList></x-CartList>
                @endif

            </div>
        </div>
</x-app-layout>
