<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    /**
     * Define table
     */
    protected $table = 'logs';

    protected $fillable = [
        'usuario',
        'email',
        'actividad',
        'ip',
        'navegador'
    ];
}
