<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\EnderecoModel;
use App\Model\CompraModel;
use App\Model\ComprasModel;


class ComprarController extends Controller
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

        $this->objEndereco = new EnderecoModel;
        $this->objCompras = new ComprasModel;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    // public function index(){

    // }

    public function store(Request $request){

        $se = $request->session()->get('cliente');

        $rr = $this->objEndereco->create([
            'id_usuario'=>$se,
            'cep'=>$request->cep,
            'rua'=>$request->endereco,
            'casa'=>$request->numero,
            'referencia'=>$request->referencia,
        ]);


        $total = $request->totais;
        $das = $request->session()->put(['valor'=> $total]);


        if($rr && $request->session()->has('cliente'))

            $valor = $request->session()->get('valor');


            return view('modal/completar',compact('se','valor'));
    }
    public function index()
    {
        return view('comprar');
    }
}

