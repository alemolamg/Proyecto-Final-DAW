<div
    class="transition bg-indigo-600 duration-300 grid grid-cols-2 grow max-w-sm mx-1 my-2 rounded-lg overflow-hidden md:mx-2 md:my-2 cursor-default">
    <div class="">
        <img class="w-full transition xl:w-full " src="{{ asset($pro->imagen) }}" alt="{{ $pro->imagen }}">
    </div>
    <div class="ml-2 py-2 md:px-0 md:py-2 sm:block">
        <h2 class="font-bold md:text-xl xl:text-xl mb-2">{{ $pro->nombre }}</h2>
        <p class="mt-1 md:text-base text-sm">
            Precio: {{ $pro->precio }}€
        </p>
        <p class="mt-1 md:text-base text-sm">
            id producto: {{ $pro->id }}
        </p>
        @if (isset($cant))
            <p class="mt-1 md:text-base text-sm">
                @if ($cant != 1)
                    Cantidad: {{ $cant }} unidades.
                @else
                    Cantidad: {{ $cant }} unidad.
                @endif
            </p>
        @endif
    </div>
</div>
