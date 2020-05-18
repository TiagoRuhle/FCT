<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoTrabalho extends Model
{
    //
    protected $fillable = [
        'descricao'
    ];

    public function Aluno()
    {
        return $this->hasMany(Aluno::class);
    }
}
