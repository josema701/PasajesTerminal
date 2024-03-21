<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terminales extends Model
{
    use HasFactory;

    protected $fillable = [
        'ciudad_id',
        'nombre',
        'direccion',
        'telefono',
        'estado',
    ];

    public function ciudad()
    {
        return $this->belongsTo(Ciudades::class, 'ciudad_id');
    }

}
