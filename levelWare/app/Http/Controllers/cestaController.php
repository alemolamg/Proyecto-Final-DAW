<?php

namespace App\Http\Controllers;

use App\Models\Cesta;
use App\Models\Product;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class cestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cesta.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return redirect()->route('listaUsers');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function aniadirCestaSesion(Request $request)
    {
        $claveCesta = $this->comprobarRepetidoCesta($request->input('proId'), $request->input('cant'));
        if ($claveCesta == -1) {    //Verificamos si la función da falso
            $arrayPro = array('idPro' => $request->input('proId'), 'cant' => $request->input('cant'));
            session()->push('CESTA', $arrayPro);
        }

        //return $request->session()->has('CESTA');
        //return session()->get('CESTA')[$claveCesta]['cant'];
        return redirect()->route('cesta.index');
    }

    private function comprobarRepetidoCesta($idPro, $cantidad)
    {
        $claveCesta = -1;
        if (session()->get('CESTA') != null) {
            $cestaTemp = session()->get('CESTA');   //COPIAMOS LA CESTA
            session()->forget('CESTA');       // Eliminamos la cesta de la sesión
            foreach ($cestaTemp as $key => $proCesta) {
                if ($idPro == $proCesta['idPro']) {
                    $claveCesta = $key;
                    $cantidad = $cantidad + $proCesta['cant'];
                    $proCesta['cant'] = $cantidad;
                }
                session()->push('CESTA', $proCesta);    //Añadimos a la sesión los elementos de la cesta.
            }
        }
        return $claveCesta;
    }

    /**
     * Borra un producto de la cesta
     * @param Request $request Parámetro que tendrá el id de la cesta a borrar.
     * @return \Illuminate\Http\RedirectResponse Vuelve a la cesta.
     */
    public function eliminarDeCesta(Request $request)
    {
        self::rehacerCesta((int)$request->idCesta);
        return redirect()->route('cesta.index');
    }

    public function vaciarCesta()
    {
        session()->forget('CESTA');
        return redirect()->route('cesta.index');
    }

    private function rehacerCesta($idCesta)
    {
        $cestaTemp = session()->get('CESTA');
        array_splice($cestaTemp, $idCesta, 1);
        session()->put('CESTA', $cestaTemp);
    }
}
