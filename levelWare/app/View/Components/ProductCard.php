<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCard extends Component
{
    public $titulo;
    public $btnText;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titulo = "Producto Estandar")
    {
        $this->titulo = $titulo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-card');
    }
}
