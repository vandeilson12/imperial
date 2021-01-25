<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NotificationModel extends Model
{
    //

    protected $table  = 'notifications';

    protected $fillable = ['id','type','notifiable_type','notifiable_id','data','read_at','created_at','updated_at'];

    
}
