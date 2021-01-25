<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PedidosModel extends Model
{
    //

    protected $table = 'pedidosproduto';
    protected $fillable = ['id','id_usuario','nome_produto','obs','quantidade','preco','status'];

    public $timestamps = false;

}
