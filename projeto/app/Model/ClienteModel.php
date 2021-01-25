<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    //
    protected $table = 'sessions';
    protected $fillable = ['id','user_id','ip_address','use_agent','payload','last_activity'];

    public $timestamps = false;

    public function session(){
        return $this->hasMany(Compras::class);
    }
}
