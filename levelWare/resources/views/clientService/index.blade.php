<x-app-layout>
    <div class="max-w mx-auto px-2 lg:px-3 bg-yellow-800">
        <div class="pt-1">
            <h1 class="font-bold text-3xl">Gestión del área del cliente</h1>
            <p class="text-justify py-2 pr-2">Aquí podrá mandar a arreglar un producto tecnológico. Nuestro servicio se
                encarga de arreglar los
                siguientes productos: Consolas, periféricos y ordenadores. Primero se analizará la solicitud de
                reparación y luego se facilitan los datos para que realice el envio del producto. </p>
            <a href="{{ route('clientService.create') }}"><input type="button"
                    class="transition bg-green-700 hover:bg-indigo-600 hover:text-white text-white font-bold duration-300 py-2 px-4 rounded"
                    value="Solicitar reparación"></a>
        </div>
        @if (!empty($reparaciones))
            <div class="pt-3">
                <h1 class="font-bold text-2xl">Reparaciones en curso</h1>
                @foreach ($reparaciones as $rep)
                    <div class="bg-green-800">
                        <p> id: {{ $rep->id }}</p>
                        <p>Descripcion: {{ $rep->descripcion }}</p>
                        <p>Fecha: {{ $rep->fechaEntrada }}</p>
                        <p>User: {{ $rep->idUser }} </p>
                    </div>
                @endforeach
                <div>

                </div>
            </div>
        @else
            no hay reparaciones
        @endif
        @isset($error)
            <h3 class="text-red-800">HAY UN ERROR</h3>
        @else
            todo correcto
        @endisset
    </div>
</x-app-layout>
