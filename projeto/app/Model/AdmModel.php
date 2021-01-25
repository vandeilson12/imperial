<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;

class AdmModel extends Model
{
    //
    protected $table = "img_users";
    protected $fillable=['id','img','upload','id_user'];

    public $timestamps = false;

    public function relo(){
        return $this->hasOne('\App\User','id','id_user');
    }
}
