<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

use Fideloper\Proxy\TrustProxies as Middleware;
use App\Extensions\MongoSessionHandler;

use App\Http\Controllers\Controlle;
use App\Model\ClienteModel;
use App\Model\AlimentosModel;
use App\Model\AlimentoModel;
// use App\Model\BebidasModel;
// use App\Model\ImagenBebidasModel;
use App\Model\CachorroQuenteModel;
use App\Model\PedidosModel;


class CarrinhoController extends Controller
{
    //

    protected $proxies = '*';


    public function __construct()
    {

        $this->vas = new Request();

        $this->objCliente = new ClienteModel(); 
        $this->objAlimentos = new AlimentosModel;
        $this->objPedidos = new PedidosModel;
        $this->objAlimento = new AlimentoModel();
        $this->objCachorro = new CachorroQuenteModel();

    }

    public function index(){
        return view('alimentos/resultcarrinho');
    }
    public function store(Request $request)
    {

        $nos = $request->email;

        $reqs = $request->session()->put(['cliente'=> $nos]);

        $email = DB::table('sessions')->where('ip_address', $reqs)->exists();
    

        if(empty($email)){
            echo 'igual';

            $this->objPedidos->create([
                'id_usuario'=>$request->email,
                'nome_produto'=>$request->nome_produto,
                'obs'=>$request->obs,
                'quantidade'=>$request->quantidade,
                'preco'=>$request->preco,
            ]);

        }else{

            $this->objCliente->create([
                'ip_address'=>$nos
            ]);

            $this->objPedidos->create([
                'id_usuario'=>$request->email,
                'nome_produto'=>$request->nome_produto,
                'obs'=>$request->obs,
                'quantidade'=>$request->quantidade,
                'preco'=>$request->preco,
            ]);
        }


        if($reqs = $request->session()->get('cliente')){
            $alimentos = DB::table('pedidosproduto')->where('id_usuario', $reqs)->get();
            $alimentoswan = DB::table('pedidosproduto')->where('id_usuario', $reqs)->take(1)->get();
            $valortotal = DB::table('pedidosproduto')->
                            select(DB::raw('SUM(preco) as preco'))
                            ->where('id_usuario', $reqs)->get();

                            // dd($valortotal);
        }

       return view('alimentos/resultcarrinho',compact('alimentos','alimentoswan','reqs','valortotal'));

    // dd(session()->all());

    }


    public function mais(Request $request)
    {
        $md = md5(time());
        $se = $request->session()->get('cliente');
        $nes = 0;
        if ($request->session()->has('cliente')) {
            $nes =  '<input type="text" id="email" name="email" value="'.$se.'"/>';
            echo 'yes';
        }else{
            echo 'no';
            $nes =  '<input type="text" id="email" name="email" value="'.$md.'"/>';
        }

        $nes;

        $hanburgues = $this->objAlimento->all();    
        $cachorros = $this->objCachorro->all();    


        $vas = DB::table('alimento')
        ->where([['categoria','LIKE',"%bebidas%"]])
        ->get();

        

        $encomendas = DB::table('alimento')
                ->where([['categoria','LIKE',"%encomendas%"]])
                ->get();

        return view('welcome',compact('hanburgues','cachorros','vas','encomendas','nes'));
    }
  
    public function destroy(Request $request, $id){

        $a = $request->session()->get('cliente');
        
        $alimentos = DB::table('pedidosproduto')->where('id_usuario', $a)->get();


        $b = DB::table('sessions')->where('ip_address', $a)->delete();
        $c = DB::table('pedidosproduto')->where('id_usuario', $a)->delete();

        if($b && $c)
            $request->session()->forget('cliente');

            return redirect('/');
    }

    public function excluirpedido(Request $request, $id){
        // $cas = DB::table('pedidosproduto')->where('id', $id)->delete();

        if(/*$cas &&*/$reqs = $request->session()->get('cliente')){
            $alimentos = DB::table('pedidosproduto')->where('id_usuario', $reqs)->get();
            $alimentoswan = DB::table('pedidosproduto')->where('id_usuario', $reqs)->take(1)->get();
            $valortotal = DB::table('pedidosproduto')->
                            select(DB::raw('SUM(preco) as preco'))
                            ->where('id_usuario', $reqs)->get();

                            // dd($valortotal);
        }
        
        return view('alimentos/resultcarrinho',compact('alimentos','alimentoswan','reqs','valortotal'));

    }
}
