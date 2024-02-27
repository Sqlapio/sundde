<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    /**
     * Define table
     */
    protected $table = 'empresas';

    protected $fillable = [
        'user_id',
        'razon_social',
        'rif',
        'tipo',
        'direccion',
        'telefono',
    ];
}
