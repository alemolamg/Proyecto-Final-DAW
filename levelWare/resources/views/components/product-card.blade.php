<a class="text-white font-white transition hover:-translate-y-1 hover:scale-105 hover:bg-indigo-600 duration-300  max-w-sm mx-2 my-2 rounded-lg overflow-hidden md:mx-2 my-2 bg-green-700"
    href="{{ route('producto.show', $id) }}">
    <!-- bg-{$color}-200"> -->
    <img class="w-full" src="{{ $imagen }}" alt="Imagen del producto">
    <div class="px-6 py-4 text-white">
        <h2 class="font-bold text-xl mb-2">{{ $titulo }}</h2>
        <p class="text-base">
            Precio: {{ $precio }}€
        </p>
    </div>
</a>
