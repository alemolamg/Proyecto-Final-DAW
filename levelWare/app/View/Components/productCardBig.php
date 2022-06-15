<?php

namespace App\View\Components;

use Illuminate\View\Component;

class productCardBig extends Component
{

    public $pro;
    public $cant;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($producto, $cantidad)
    {
        $this->pro = $producto;
        $this->cant = $cantidad;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-card-big');
    }
}
