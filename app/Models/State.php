<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated'];

    protected $fillable = [
        'nombre',
    ];

    //Uno a Muchos
    public function cities(){
        return $this->hasMany('App\Models\City');
    }
}
