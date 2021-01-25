<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;

use App\Http\Requests\Requests;
use App\Http\Requests\AdmRequest;
use App\Model\AdmModel;
use App\Model\AlimentoModel;
use App\Model\AlimentosModel;
use App\Model\ComprasModel;
// use App\Model\BebidasModel;
use App\Model\CachorroQuenteModel;
use App\User;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

        $this->objUser = new User();
        $this->objAdm = new AdmModel();

        $this->objAlimento = new AlimentoModel();

        $this->objAlimentos = new AlimentosModel();

        $this->objCachorro = new CachorroQuenteModel();

        $this->objCompras = new ComprasModel();

        // $this->objBebida = new BebidasModel;
    }


    public function index()
    {

        $ultuser = DB::table('users')
                ->orderBy('id','DESC')
                ->take(1)
                ->get();

        $compras = DB::table('compras')
                ->orderBy('id','DESC')
                ->take(1)
                ->get();


        $compra = DB::table('compras')
            ->orderBy('id','DESC')
            ->get();
        
        $precos = DB::table('compras')
                ->select(DB::raw('SUM(valor) as valor'))->get();

        $colle = $precos;
        // dd($colle);
        // $count = $precos->count();
        // $ult = $this->objUser::where('chave_estrangeira', $as)->orderBy('created_at', 'desc')->first();
        return view('home',compact('ultuser','compra','compras','colle'));
    }
    // 

    public function estastistica(){
        return view('estastistica');
    }

    // 

    public function produtos(){

        $hanburgues = $this->objAlimento->all();
        $cachorros = $this->objCachorro->all();
        $vas = $this->objAlimentos->all();

        $compras = $this->objCompras->all();
        

        return view('produtos',compact('hanburgues','cachorros','vas','compras'));
    }


    public function notific(){
        $todos = DB::table('notifications')
            ->delete();

        if($todos){

        }


        $ultuser = DB::table('users')
                ->orderBy('id','DESC')
                ->take(1)
                ->get();

        $compras = DB::table('compras')
                ->orderBy('id','DESC')
                ->take(1)
                ->get();

        $compra = DB::table('compras')
            ->orderBy('id','DESC')
            ->get();
        
        $precos = DB::table('compras')
                ->select(DB::raw('SUM(valor) as valor'))->get();

        $colle = $precos;
        
        return view('home',compact('ultuser','compra','compras','colle'));
    }
}
