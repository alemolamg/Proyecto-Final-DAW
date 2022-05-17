<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCard extends Component
{
    //public $titulo;
    public $btnText;
    public $imagen;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->titulo = $titulo;
        //$this->imagen = $imagen;
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
