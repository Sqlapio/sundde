<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sancion extends Model
{
    use HasFactory;

    /**
     * Define table
     */
    protected $table = 'sancions';

    protected $fillable = [
        'definicion',
        'gaceta',
        'ley',
        'costo_ut',
    ];
}
