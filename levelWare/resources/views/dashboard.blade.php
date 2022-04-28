<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome /> -->
                <div class="p-3">
                    <h2 class="px-2">Lista productos </h2>
                    <x-productCard>
                        <x-slot name="titulo">Primer producto</x-slot>
                        Hola mundo
                    </x-productCard>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
