<?php

namespace App\Http\Controllers;

use App\Models\ProductRep;
use App\Models\Reparacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use Nette\Utils\DateTime;

class clientService extends Controller
{

    const RUTA_IMAGEN = 'storage/repairImgs/';
    const IMAGEN_ESTANDAR = 'error.png';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userReparaciones = Reparacion::where('idUser', Auth::user()->id)->get();
        return view('clientService.index')->with('reparaciones', $userReparaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientService.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'tipoPro' => 'required',
            'descripro' => 'required',
        ]);
        try {

            $newPro = new ProductRep(); // Creamos un objeto Festival.

            //$newPro->nombre = $request->input('nombre');
            $newPro->descripcion = $request->input('descripro');
            $newPro->idUser = Auth::user()->id;
            //$newPro->marca = $request->input('marca');
            //$newPro->modelo = $request->input('modelo');
            //return "primer paso dado";

            if (is_uploaded_file($request->file('foto'))) {
                $nombreFoto = time() . "-" . $request->file('foto')->getClientOriginalName();
                //$newPro->imagen = self::RUTA_IMAGEN . $nombreFoto;
                $request->file('foto')->storeAs('public/repairImgs', $nombreFoto);
                //return "modifico foto";
            } else {
                $nombreFoto = self::IMAGEN_ESTANDAR;
            }
            $newPro->rutaImgs = self::RUTA_IMAGEN . $nombreFoto;
            $newPro->save();    //Guardamos en la base de datos.
            //return "Guardo producto";

            //Continuamos con la creación de la reparación
            $newRep = new Reparacion();
            $newRep->descripcion = $request->input('descripro');
            $newRep->idUser = Auth::user()->id;
            $newRep->estado = 0;
            $newRep->fechaEntrada = new DateTime();
            $newRep->codProducto = $newPro->id;
            $newRep->save();

            return redirect()->route('clientService.index');
        } catch (QueryException $exception) {
            echo $exception;
            return $exception;
            //return redirect()->route('clientService.index')->with('error', 1);
        }
        //return redirect()->route('clientService.index');
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
}
