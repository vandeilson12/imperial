<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ComprasModel;
use App\Model\NotificationModel;

class NotificarionController extends Controller
{
    //

    private $compras;

    public function _construct(ComprasModel $compras){

        $this->middleware('auth');
        $this->compras = $compras;

    }

    public function notifications(NotificationModel $not,Request $request){
        
        $notifications = $not->all();

        return response()->json(compact('notifications'));
    }

    public function markAsRead(NotificationModel $not,Request $request){
        $notification = $not->all()
                            ->where('id', $not->id)
                            ->first();


        if($notification)
            $notification->markAsRead();

        // $todos = DB::table('notifications')

        //     ->delete();

        // if($todos){

        // }

    }

    public function markAllAsRead(NotificationModel $not,Request $request){
        // $not->all()->unreadNotifications->markAsRead();

        $todos = DB::table('notifications')

            ->delete();

        if($todos){

        }
    }
    
}
