<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    /**
     * Relación con el modelo Venta (1 Cliente tiene muchas Ventas).
     */
    public function ventas()
    {
        return $this->hasMany(Ventas::class);
    }
}
