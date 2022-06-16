<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRep extends Model
{
    use HasFactory;

    // Cambio la tabla de referencia a producto
    protected $table = "productoRep";
}
