<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\CartaoModel;
use App\Model\ComprasModel;
use Illuminate\Support\Facades\DB;


use App\Notifications\NotificationCompras;
use Illuminate\Notifications\Notification;

class CartaoController extends Controller
{

    //
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');

        $this->objCartao = new CartaoModel;
        $this->objCompras = new ComprasModel;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    // public function index(){

    // }

    public function store(ComprasModel $compras, Request $request){
        $rr = $this->objCartao->create([
            'id_usuario'=>$request->id,
            'cvv'=>$request->cvv,
            'validade'=>$request->validade,
            'tipo_cartao'=>$request->tipo_cartao,
            'numero_cartao'=>$request->numero_cartao,
        ]);

        $reqs = $request->session()->get('cliente');

        $total = $request->session()->get('valor');

        $cc =  $this->objCompras->create([
            'id_usuario'=>$request->id,
            'name'=>$request->name,
            'delivery'=>$request->delivery,
            'cartao'=>$request->cartao,
            'valor'=>$request->totais
        ]);


        // echo $reqs;
        // $vas = $request->create($request->all());
        // $ww =  $request->id;

        // $compras = $this->objCompras->create([$request->all()]);

        $cc->notify(new NotificationCompras($cc));

        if($rr && $cc)
            session()->forget('cliente');
            session()->forget('valor');

            //notifications

            // $author = $this->objCompras->name;


            
                return view('modal/sucesso');
    }
    public function index()
    {
        return redirect('/');
    }
}

