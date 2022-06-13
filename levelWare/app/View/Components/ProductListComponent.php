<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;
use phpDocumentor\Reflection\Types\This;

class ProductListComponent extends Component
{
    public $titulo;
    public $productos;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titulo = "Lista de Productos", $productos = [])
    {
        $this->titulo = $titulo;
        if (empty($productos)) {
            $this->productos =  Product::all();
        } else {
            $this->productos = $productos;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-list-component');
    }
}
