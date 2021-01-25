<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AlimentoModel extends Model
{
    //

    protected $table = "hanburgue";
    protected $fillabe = ['id','salada','carnes','queijo','presunto','ovos','batata_palha','cheddan','hanburgue','img','descricao','detalhes','created_at'];

    public function hanburgue(){   
        return $this->hasOne('App\Model\AlimentoModel','id');
    }
}
