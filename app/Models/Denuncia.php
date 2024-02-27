<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    use HasFactory;

    /**
     * Define table
     */
    protected $table = 'denuncias';

    protected $fillable = [
        'fecha',
        'estado',
        'minucipio',
        'direccion',
        'hechos'
    ];
}
