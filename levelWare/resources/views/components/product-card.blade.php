<a class="max-w-sm mx-1 my-1 rounded-lg overflow-hidden md:mx-2 my-2 bg-emerald-300"
   href="{{route('producto.show',$id)}}">
    <!-- bg-{$color}-200"> -->
    <img class="w-full" src="{{$imagen}}" alt="Imagen del producto">
    <div class="px-6 py-4">
        <h2 class="font-bold text-xl mb-2">{{$titulo}}</h2>
        <p class="text-gray-700 text-base">
            {{$imagen}}
        </p>
    </div>

</a>

