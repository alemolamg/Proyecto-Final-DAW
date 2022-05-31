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
            </tr>
        </thead>
        <tbody>

            @foreach ($arrayCesta as $pc)
                <tr>
                    <!-- <td>{var_dump($pc) }</td> -->
                    <td> <img class="w-20" src="{{ App\Models\Product::find($pc['idPro'])['imagen'] }}"
                            alt="{{ App\Models\Product::find($pc['idPro'])['imagen'] }}"> </td>
                    <td>{{ App\Models\Product::find($pc['idPro'])['nombre'] }}</td>
                    <td>{{ App\Models\Product::find($pc['idPro'])['precio'] }}</td>
                    <td>{{ $pc['cant'] }}</td>
                </tr>
            @endforeach


        </tbody>
    </table>
</div>
