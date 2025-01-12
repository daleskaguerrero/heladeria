<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ventas;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Helado extends Model
{
    use HasFactory;

    /**
     * Relación con el modelo Venta (1 Helado tiene muchas Ventas).
     */
    public function ventas()
    {
        return $this->hasMany(Ventas::class);
    }
}
