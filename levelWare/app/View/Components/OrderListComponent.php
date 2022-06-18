<?php

namespace App\View\Components;

use App\Models\Order;
use Illuminate\View\Component;
use PhpParser\Node\Expr\Cast\Array_;

class OrderListComponent extends Component
{

    public $pedidos;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $pedidos)
    {
        $this->pedidos = $pedidos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.order-list-component');
    }
}
