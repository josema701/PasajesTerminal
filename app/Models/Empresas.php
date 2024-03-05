<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;

    protected $fillable = [
        'propietario_id',
        'nombre',
        'representante',
        'nit',
        'foto_nit',
        'foto_seprec',
        'foto_fundaempresa',
        'foto_cooperativa',
        'logo',
        'foto',
        'direccion',
        'telefono',
        'telefono2',
        'email',
        'estado',
    ];

    public function propietario()
    {
        return $this->belongsTo(User::class, 'propietario_id');
    }

    public function empleados()
    {
        return $this->hasMany(User::class, 'empresa_id');
    }

    // imagenes
    public function getFotoNitAttribute($value)
    {
        return $value ? asset("empresas/$value") : null;
    }

    public function getFotoSeprecAttribute($value)
    {
        return $value ? asset("empresas/$value") : null;
    }

    public function getFotoFundaempresaAttribute($value)
    {
        return $value ? asset("empresas/$value") : null;
    }

    public function getFotoCooperativaAttribute($value)
    {
        return $value ? asset("empresas/$value") : null;
    }

    public function getLogoAttribute($value)
    {
        return $value ? asset("empresas/$value") : null;
    }

    public function getFotoAttribute($value)
    {
        return $value ? asset("empresas/$value") : null;
    }

}
