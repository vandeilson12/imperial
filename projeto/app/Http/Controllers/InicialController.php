<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Requests;
use App\Model\AdmModel;
use App\Model\AlimentoModel;
use App\Model\AlimentosModel;
// use App\Model\BebidasModel;
// use App\Model\ImagenBebidasModel;
use App\Model\CachorroQuenteModel;
use Illuminate\Http\Request;
use App\User;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class InicialController extends Controller
{
    //
    public function __construct(){

        $this->objUser = new User();
        $this->objAdm = new AdmModel();

        $this->objAlimento = new AlimentoModel();
        $this->objAlimentos = new AlimentosModel();
        $this->objCachorro = new CachorroQuenteModel();
        // $this->objBebida = new BebidasModel;
        // $this->objImagemBebida = new ImagenBebidasModel;
    }

    public function index(Request $request)
    {

        $md = md5(time());
        $se = $request->session()->get('cliente');
        $nes = 0;
        if ($request->session()->has('cliente')) {
            $nes =  '<input type="hidden" id="email" name="email" value="'.$se.'"/>';
        }else{
            $nes =  '<input type="hidden" id="email" name="email" value="'.$md.'"/>';
        }


        $hanburgues = DB::table('alimento')
        ->where([['categoria','LIKE',"%hanburgue%"]])
        ->get();   

        $cachorros = DB::table('alimento')
        ->where([['categoria','LIKE',"%cachorro%"]])
        ->get();   

        $vas = DB::table('alimento')
        ->where([['categoria','LIKE',"%bebidas%"]])
        ->get();

        // $bebidas = $this->objBebida->all();
        // $imagenbebida=$this->objImagemBebida->all();

        $ncachorro = DB::table('cachorro_quente')
        ->where([['cachorro','LIKE',"%hot_tudo%"]])
        ->get();


        $nhanburgue = DB::table('hanburgue')
        ->where([['hanburgue','LIKE',"%tradicional%"]])
        ->get();

        

        $encomendas = DB::table('alimento')
                ->where([['categoria','LIKE',"%encomendas%"]])
                ->get();

        $dia = DB::table('alimento')
                ->where([['subcategoria','LIKE',"%dia"]])
                ->get();

        // if (session()->has('cliente')) {
        //     dd(session()->get('cliente'));
        // }

        $res = DB::table('jobs')->delete();
        if($res){
            
        }


        return view('welcome',compact('hanburgues','cachorros','vas','encomendas','nes','dd',
                                        'ncachorro','nhanburgue','dia'));
    }

    public function show($id)
    {

        $vas = $this->objImagemBebida->all();
        return view('alimentos/ver4',compact('vas'));

    }
}
