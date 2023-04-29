<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated'];

    protected $fillable = [
        'nombre',
        'state_id'
    ];

    //Uno a Muchos Inversa
    public function state(){
        return $this->belongsTo('App\Models\State');
    }

    //Uno a Muchos
    public function transports(){
        return $this->hasMany('App\Models\Transport');
    }

    //Muchos a muchos
    public function routes()
    {
        return $this->belongsToMany('App\Models\Route');
    }
}
