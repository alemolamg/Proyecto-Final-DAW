<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    // Cambio la tabla de referencia a producto
    protected $table = "pedido";

    public function User()
    {
        return $this->hasOne(User::class);
    }
}
