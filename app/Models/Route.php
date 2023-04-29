<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated'];

    protected $fillable = [
        'nombre',
        'longitud',
        'tiempo'
    ];

    //Muchos a muchos
    public function cities()
    {
        return $this->belongsToMany('App\Models\City');
    }

    //Muchos a muchos
    public function tollbooths()
    {
        return $this->belongsToMany('App\Models\Tollbooth');
    }
}
