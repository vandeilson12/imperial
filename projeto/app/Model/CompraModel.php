<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CompraModel extends Model
{
    //
    protected $table = 'compra';
    protected $fillable = ['id','id_usuario','nome_produto','obs','quantidade','preco','status'];

    public $timestamps = false;
}
