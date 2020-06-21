<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'productos';

    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
    ];
}
