<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';

    // Atributo que va a ser primary key del modelo

    protected $primaryKey = "idcategoria";

    public $timeStamps = false;

    protected $fillabel = [
        'nombre',
        'descripcion',
        'condicion'
    ];

    protected $guarded = [
        
    ];

    // use HasFactory;
}
