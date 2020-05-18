<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localizacao extends Model
{
    //
    protected $fillable = [
        'localizacao'
    ];

    public function Aluno()
    {
        return $this->hasMany(Aluno::class);
    }
}
