<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated'];

    protected $fillable = [
        'fecha',
        'ciudadOrigen_id',
        'ciudadDestino_id',
        'unit_id',
        'precio'
    ];

    //Uno a Muchos Inversa
    public function ciudadOrigen(){
        return $this->belongsTo('App\Models\City');
    }

    //Uno a Muchos Inversa
    public function ciudadDestino(){
        return $this->belongsTo('App\Models\City');
    }
}
