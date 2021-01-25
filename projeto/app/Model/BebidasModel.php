<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BebidasModel extends Model
{
    //

    protected $table='bebidas';
    protected $fillable = ['id' ,'goiaba ','caja','maracuja' ,'cupuacu' ,'bacuri' ,'lata_350' ,'litro_1' ,'litro_2' ,'created_at'];
}
