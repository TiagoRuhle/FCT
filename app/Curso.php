<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //
    protected $fillable = [
        'descricao'
    ];

    public function DadosEscola()
    {
        return $this->hasMany(DadosEscola::class);
    }
}
