<div class="max-w-sm rounded-lg overflow-hidden md:mx-2 my-2 bg-emerald-300">  <!-- bg-{$color}-200"> -->
    <!--<img class="w-full" src="{$imagen}" alt="Imagen de festivales"> -->
    <div class="px-6 py-4">
        <h2 class="font-bold text-xl mb-2">{{$titulo}}</h2>
        <p class="text-gray-700 text-base">
            {{$slot}}
        </p>
    </div>
    <div class="grid px-6 pt-4 pb-2 justify-center">
        <!--<a href="{route("$enlace")}"> -->
        </a>
    </div>
</div>
