<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tollbooth extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated'];

    protected $fillable = [
        'nombre',
    ];

    //Muchos a muchos
    public function routes()
    {
        return $this->belongsToMany('App\Models\Route');
    }
}
