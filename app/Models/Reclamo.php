<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamo extends Model
{
    use HasFactory;

    /**
     * Define table
     */
    protected $table = 'reclamos';

    protected $fillable = [
        'fecha',
        'estado',
        'minucipio',
        'direccion',
        'hechos'
    ];
}
