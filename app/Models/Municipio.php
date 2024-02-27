<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Municipio extends Model
{
    use HasFactory;

    /**
     * Define table
     */
    protected $table = 'municipios';

    protected $fillable = [
        'descripcion',
        'estado_id'
    ];

    /**
     * Relacion Uno a Muchos (inverso)
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function estado(): BelongsTo
    {
        return $this->belongsTo(Estado::class, 'estado_id', 'id');
    }
}
