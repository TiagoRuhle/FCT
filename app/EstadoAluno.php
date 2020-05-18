<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoAluno extends Model
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
