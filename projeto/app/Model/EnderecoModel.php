<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EnderecoModel extends Model
{
    //
    protected $table = 'endereco';
    protected $fillable = ['id','id_usuario','cep','referencia','casa','rua','numero'];

    public $timestamps = false;
}
