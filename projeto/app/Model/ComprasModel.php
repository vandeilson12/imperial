<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ComprasModel extends Model
{
    //

    use Notifiable;

    protected $table = 'compras';
    protected $fillable = ['id','id_usuario','name','delivery','cartao','valor'];

    public $timestamps = false;

    public function compras(){
        return $this->hasMany(Cliente::class);
    }
}
