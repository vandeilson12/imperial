<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CartaoModel extends Model
{
    protected $table = 'cartao';
    protected $fillable = ['id','id_usuario','cvv','validade','tipo_cartao','numero_cartao'];

    public $timestamps = false;
}
