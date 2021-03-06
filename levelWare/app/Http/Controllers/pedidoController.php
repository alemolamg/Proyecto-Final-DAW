<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use App\Models\productoCesta;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\DateTime;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\userController;
use App\Mail\PedidoMailable;

class pedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('pedido.index')->with('user', $user);
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
        if (!empty(session()->get('CESTA'))) {
            $precioTotal = 0;
            $cesta = session()->get('CESTA');

            try {
                // Creación del pedido
                $newOrder = new Order();
                $newOrder->idUser = Auth::id();
                $newOrder->fechaPedido = new DateTime();
                $newOrder->estado = 0;  // Estado 0 = en preparación.
                $newOrder->precioTotal = $precioTotal;

                $newOrder->save();  // Guardamos el pedido nuevo

                // Añadimos los produtos comprados
                foreach ($cesta as $key => $pc) {
                    $newPro = new productoCesta();
                    $newPro->idPedido = $newOrder->id;
                    $newPro->idPro = $pc['idPro'];
                    $newPro->cantidad = $pc['cant'];
                    $newPro->save();

                    // Se baja el stock del producto
                    self::bajarStockPro(Product::findOrFail($pc['idPro']), $pc['cant']);

                    // Se añade el precio de este producto al total.
                    $precioTotal += self::incrementoPrecio($pc['idPro'], $pc['cant']);
                }

                // Guardamos el nuevo precio total con todos los productos en el pedido
                $newOrder->precioTotal = $precioTotal;
                $newOrder->save();

                // Añadimos los datos del usuario
                //$userControler = userController::class;
                //$userControler->actDatosPedido($request->provincia, $request->ciudad, $request->direccion, $request->credit);
                $usuario = User::findOrFail(Auth::user()->id); // Creamos un objeto Festival.
                $usuario->provincia = $request->provincia;
                $usuario->localidad = $request->ciudad;
                $usuario->direccion = $request->direccion;
                $usuario->creditCard = $request->credit;
                $usuario->save();    //Guardamos en la base de datos.

            } catch (QueryException $exception) {
                return "ERROR al crear el pedido.";
            }
        } else {    // La cesta está vacía
            return "La cesta está vacía";
        }

        $correo = new PedidoMailable;
        Mail::to(Auth::user()->email)->send($correo);

        session()->forget('CESTA'); //Vaciamos la cesta
        session()->push('pedCorrect', 1);
        return redirect()->route('/');
    }

    /**
     * Baja el stock de un producto
     */
    private function bajarStockPro(Product $pro, int $cant)
    {
        $pro->stock = $pro->stock - $cant;
        $pro->save();
    }

    /**
     * Calcula el precio todal de un producto por las veces que se compra
     *
     * @return float precio total del producto
     */
    private function incrementoPrecio($idPro, $cant)
    {
        $precioPro = Product::findOrFail($idPro)->precio;
        return $precioPro * $cant;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return "SE VE ALGO";
        $ped = Order::findOrFail($id);
        $proCesta = productoCesta::where('idPedido', $id)->get();
        //return $arrayPro[0]->nombre;
        return view('pedido.show')->with('pedido', $ped)->with('proCesta', $proCesta);
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
        $pedido = Order::find($id);
        if (isset($request->estado)) {
            $pedido->estado = $request->estado;
        }
        $pedido->save();
        return redirect()->route('listaPedidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ped = Order::findOrFail($id);
        $ped->estado = -1;
        $ped->save();
        $ped->delete();
        return redirect()->route('listaPedidos');
    }

    public function activar($id)
    {
        Order::withTrashed()->where('id', $id)->restore();
        return redirect()->route('listaPedidos');
    }

    public function listarPedidos()
    {
        $pedidos = Order::withTrashed()->get(); // SoftDeletes propertie.
        return view('pedido.listaPedidos')->with('pedidos', $pedidos);
    }

    public function pedidosUser()
    {
        $pedidos = Order::where('idUser', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        return view('pedido.pedidosUser')->with('pedidos', $pedidos);
    }
}
