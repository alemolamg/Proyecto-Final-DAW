<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class productController extends Controller
{

    const RUTA_IMAGEN = 'storage/productsPhotos/';
    const IMAGEN_ESTANDAR = 'standar.jpg';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ps = Product::all();
        return view("product.index")->with('productos', $ps);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()) { //Verificamos que el usuario haya iniciado sesión
            return view("product.create");
        }
        return redirect("login");
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
            'descrip' => 'required',
            'precio' => 'required',
            'stock' => 'required',
        ]);
        try {
            $newPro = new Product(); // Creamos un objeto Festival.

            $newPro->nombre = $request->input('nombre');
            $newPro->descripcion = $request->input('descrip');
            $newPro->precio = $request->input('precio');
            $newPro->stock = $request->input('stock');
            $newPro->tipoPro = $request->input('tipoPro');
            $newPro->almacenamiento = $request->input('almacenamiento');

            if (is_uploaded_file($request->file('foto'))) {
                $nombreFoto = time() . "-" . $request->file('foto')->getClientOriginalName();
                //$newPro->imagen = self::RUTA_IMAGEN . $nombreFoto;
                $request->file('foto')->storeAs('public/productsPhotos', $nombreFoto);
            } else {
                $nombreFoto = self::IMAGEN_ESTANDAR;
            }
            $newPro->imagen = self::RUTA_IMAGEN . $nombreFoto;
            $newPro->save();    //Guardamos en la base de datos.

            //$request->file('foto')->storeAs('public/productsPhotos', $nombreFoto);
            return redirect()->route('listaPro');
        } catch (QueryException $exception) {
            //echo $exception;
            return redirect()->route('listaPro')->with('error', 1);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Busco el producto a través del id recibido
        $pro = Product::find($id);
        return view('product.show')->with('pro', $pro);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pro = Product::findOrFail($id);
        return view('product.edit')->with('producto', $pro);
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
        $request->validate([
            'nombre' => 'required',
            'tipoPro' => 'required',
            'descrip' => 'required',
            'precio' => 'required',
            'stock' => 'required',
        ]);
        try {
            $proEdit = Product::findOrFail($id); // Creamos un objeto Festival.

            $proEdit->nombre = $request->input('nombre');
            $proEdit->descripcion = $request->input('descrip');
            $proEdit->precio = $request->input('precio');
            $proEdit->stock = $request->input('stock');
            $proEdit->tipoPro = $request->input('tipoPro');
            $proEdit->almacenamiento = $request->input('almacenamiento');

            if (is_uploaded_file($request->file('foto'))) {
                $nombreFoto = time() . "-" . $request->file('foto')->getClientOriginalName();
                $proEdit->imagen = self::RUTA_IMAGEN . $nombreFoto;
                $request->file('foto')->storeAs('public/productsPhotos', $nombreFoto);
            }
            $proEdit->save();    //Guardamos en la base de datos.

            return redirect()->route('listaPro');
        } catch (QueryException $exception) {
            //echo $exception;
            return redirect()->route('listaPro')->with('error', 1);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Product::findOrFail($id);
        $pro->delete();
        return redirect()->route('listaPro');
    }

    public function activar($id)
    {
        Product::withTrashed()->where('id', $id)->restore();
        return redirect()->route('listaPro');
    }

    public function listarProductos()
    {
        $productos = Product::withTrashed()->get(); // SoftDeletes propertie.
        //$productos = Product::all();
        return view('product.listapro')->with('productos', $productos);
    }

    public function searchProducts(Request $request)
    {
        $busqueda = Product::where('nombre', 'LIKE', "%$request->clave%")
            ->orWhere('descripcion', 'LIKE', "%$request->clave%")
            ->get();
        return view('Product.busquedaPro')->with('productos', $busqueda)->with('clave', $request->clave);
    }

    public function searchProductsAdmin(Request $request)
    {
        $busqueda = Product::withTrashed()
            ->where('nombre', 'LIKE', "%$request->clave%")
            ->orWhere('descripcion', 'LIKE', "%$request->clave%")
            ->get();
        return view('Product.listaPro')->with('productos', $busqueda)->with('clave', $request->clave);
    }
}
