<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    protected $fillable = [
        'descricao'
    ];

    public function Aluno()
    {
        return $this->belongsToMany(Aluno::class);
    }
}
