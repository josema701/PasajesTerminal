<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'pais',
        'estado',
    ];

    public function terminales()
    {
        return $this->hasMany(Terminales::class, 'ciudad_id');
    }
}
