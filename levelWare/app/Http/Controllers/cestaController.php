<?php

namespace App\Http\Controllers;

//session_start();
if (empty($_SESSION['CESTA'])) {
    $_SESSION['CESTA'] = array();
}


use App\Models\Cesta;
use App\Models\Product;
use Illuminate\Http\Request;

class cestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$proCesta = $_SESSION('CESTA');
        //return view('cesta.index')->with('proCesta', $proCesta);
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
        $arrayPro = array('idPro' => $request->input('proId'), 'cant' => $request->input('cant'));
        //session(['CESTA' => $arrayPro]);
        session()->push('CESTA', $arrayPro);
        //return $request->session()->has('CESTA');
        //return session()->get('CESTA');
        return redirect()->route('cesta.index');
    }
}
