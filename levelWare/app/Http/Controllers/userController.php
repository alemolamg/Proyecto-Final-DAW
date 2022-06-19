<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function listarUsuarios()
    {
        $users = User::withTrashed()->get(); // SoftDeletes propertie.
        return view('user.listaUsers')->with('users', $users);
    }

    public function actDatosPedido($provincia, $ciudad, $direc, $tarjCredito)
    {
        try {
            $usuario = User::findOrFail(Auth::user()->id); // Creamos un objeto Festival.

            $usuario->provincia = $provincia;
            $usuario->localidad = $ciudad;
            $usuario->direccion = $direc;
            $usuario->creditCard = $tarjCredito;
            $usuario->save();    //Guardamos en la base de datos.

        } catch (QueryException $exception) {
            //echo $exception;
            return redirect()->route('listaPro')->with('error', 1);
        }
    }
}
