<a class="text-white font-white transition hover:scale-105 hover:-translate-y-1 hover:bg-indigo-600 duration-300  max-w-sm mx-1 my-2 rounded-lg overflow-hidden md:mx-2 md:my-3 bg-green-700 cursor-default"
    href="{{ route('producto.show', $id) }}">
    <!-- bg-{$color}-200"> -->
    <div class="bg-white flex justify-center align-items-center" style="">
        <img class="w-full" src="{{ $imagen }}" alt="Imagen del producto">
    </div>
    <div class="px-2 py-2 md:px-3 md:py-2 hidden sm:block">
        <h2 class="font-bold md:text-xl xl:text-xl mb-2">{{ $titulo }}</h2>
        <p class="md:text-base text-sm">
            Precio: {{ $precio }}€
        </p>
    </div>
</a>
