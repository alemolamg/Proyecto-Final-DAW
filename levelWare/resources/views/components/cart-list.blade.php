<?php
$arrayCesta = session()->get('CESTA');
?>

<div class="grid grid-flow-col text-center align-content-center">
    <table class="table-fixed">
        <thead>
        <tr>
            <th>Imagen</th>
            <th>Nombre Producto</th>
            <th>precio</th>
            <th>Cantidad</th>
            <th>Botones</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($arrayCesta as $pc)
            <tr class="border-solid border-2 border-white">
                <!-- <td>{var_dump($pc) }</td> -->
                <td><img class="w-20 items-center"
                         src="{{ App\Models\Product::find($pc['idPro'])['imagen'] }}"
                         alt="{{ App\Models\Product::find($pc['idPro'])['imagen'] }}"></td>
                <td>{{ App\Models\Product::find($pc['idPro'])['nombre'] }}</td>
                <td>{{ App\Models\Product::find($pc['idPro'])['precio'] }}</td>
                <td>{{ $pc['cant'] }}</td>
                <td>
                    <btn>btn 1</btn>
                    <btn>btn 2</btn>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>
</div>
