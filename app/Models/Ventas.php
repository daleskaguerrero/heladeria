<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;
    /**
     * Relación con el modelo Helado.
     */
    public function helado()
    {
        return $this->belongsTo(Helado::class);
    }

    /**
     * Relación con el modelo Cliente.
     */
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
