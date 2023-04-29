<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated'];

    protected $fillable = [
        'combustible',
        'precio'
    ];

    //Uno a Uno
    public function fuel(){
        return $this->hasOne('App\Models\Fuel');
    }
}
