<a class="text-white font-white transition hover:scale-105 hover:-translate-y-1 hover:bg-indigo-600 duration-300  max-w-sm mx-3 my-3 rounded-lg overflow-hidden md:mx-2 md:my-3 bg-green-700 cursor-default"
    href="{{ route('producto.show', $id) }}">
    <!-- bg-{$color}-200"> -->
    <img class="w-full transition xl:w-80 " src="{{ $imagen }}" alt="Imagen del producto">
    <div class="px-3 py-2">
        <h2 class="font-bold md:text-xl xl:text-xl mb-2">{{ $titulo }}</h2>
        <p class="md:text-base text-sm">
            Precio: {{ $precio }}€
        </p>
    </div>
</a>
