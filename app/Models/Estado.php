<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Estado extends Model
{
    use HasFactory;

    /**
     * Define table
     */
    protected $table = 'estados';

    protected $fillable = [
        'descripcion',
    ];

    /**
     * Get all of the municipios for the Estado
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function municipios(): HasMany
    {
        return $this->hasMany(Municipio::class, 'estado_id', 'id');
    }
}
