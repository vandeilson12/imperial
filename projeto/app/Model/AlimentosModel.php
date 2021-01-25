<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AlimentosModel extends Model
{
    //
    protected $table = 'alimento';

    protected $fillable = ['id','name','preco','img','categoria','subcategoria','descricao','detalhes','created_at'];
}
