<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'titulo','corpo'
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
