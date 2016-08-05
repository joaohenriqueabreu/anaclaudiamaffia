<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //

    public function projetos()
    {
        return $this->hasMany('App\Projeto');
    }

    public function nome()
    {
        return $this->nome;
    }
}
