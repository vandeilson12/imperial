<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CachorroQuenteModel extends Model
{
    //

    protected $table ='cachorro_quente';
    protected $fillable = 
    ['id','carne_moida','salada','calabreza','milho',
    'ervilha','salsicha','queijo','cachorro','batata_palha','img','descricao','detalhes','created_at'];

    public function cachorroquente(){
        return $this->hasOne('App\Model\CachorroQuenteModel','id');
    }

    public function subcachorro(){
        return $this->hasOne('App\Model\AlimentosModel','cachorro','subcategotia');
    }
}
