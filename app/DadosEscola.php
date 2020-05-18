<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DadosEscola extends Model
{
    //
    protected $fillable = [
        'media','notaEstagio','localEstagio','notaPap','temaPap'
    ];

    public function Curso()
    {
        return $this->hasOne(Curso::class);
    }

    public function Aluno()
    {
        return $this->hasOne(Aluno::class);
    }
}
