<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated'];

    protected $fillable = [
        'unidad',
        'linea',
        'placa',
        'asientos',
        'fuel_id',
        'clasification_id'
    ];

    //Uno a Uno Inversa
    public function fuel(){
        return $this->belongsTo('App\Models\Fuel');
    }

    //Uno a Uno Inversa
    public function clasification(){
        return $this->belongsTo('App\Models\Clasification');
    }
}
