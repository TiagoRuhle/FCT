<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabalho extends Model
{
    //
    protected $fillable = [
        'nome','descricao','estado'
    ];

    public function Area()
    {
        return $this->belongsToMany(Area::class);
    }

    public function User()
    {
        return $this->hasOne(User::class);
    }
}
