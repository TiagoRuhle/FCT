<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobbie extends Model
{
    //
    protected $fillable = [
        'descricao'
    ];

    public function Aluno()
    {
        return $this->hasOne(Aluno::class);
    }
}
