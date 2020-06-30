<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //
    protected $fillable = [
        'contato','dtNascimento','nome', 'foto'
    ];

    public function DadosEscola()
    {
        return $this->hasOne(DadosEscola::class);
    }

    public function Hobbie()
    {
        return $this->belongsTo(Hobbie::class);
    }

    public function EstadoAluno()
    {
        return $this->hasMany(EstadoAluno::class);
    }

    public function Area()
    {
        return $this->belongsToMany(Area::class);
    }

    public function TipoTrabalho()
    {
        return $this->hasMany(TipoTrabalho::class);
    }

    public function Localizacao()
    {
        return $this->hasMany(Localizacao::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }    
}
