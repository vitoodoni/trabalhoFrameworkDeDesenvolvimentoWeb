<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelCar extends Model
{

    protected $table = 'model_cars';
    protected $fillable = [
        'id',
        'marca',
        'modelo',
        'anoFabricacao',
        'anoModelo',
        'placa',
        'km',
    ];
}
