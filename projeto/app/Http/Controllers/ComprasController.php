<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Model\ComprasModel;

class ComprasController extends Controller
{

    public function __construct(){


        $this->objCompras = new ComprasModel();

    }
    public function show($id){

        $compras = $this->objCompras->find($id);
        
        // dd($cartao);

        return view('compras/detalhes',compact('compras'));
    }

    public function resumo($id){

    $compras = $this->objCompras->find($id);

        if(empty($compra))

        $cartao = DB::table('cartao')
                ->where('id_usuario', $compras->id_usuario)
                ->take(1)
                ->get();

        $usuario = DB::table('sessions')
            ->where('ip_address', $compras->id_usuario)
            ->take(1)
            ->get();

        $endereco = DB::table('endereco')
            ->where('id_usuario', $compras->id_usuario)
            ->take(1)
            ->get();

        $pedidos = DB::table('pedidosproduto')
            ->where('id_usuario', $compras->id_usuario)            
            ->get();
        


        // if(empty($compra))
        // dd($cartao);

        return view('compras/resumo',compact('cartao','usuario','endereco','pedidos'));
    }


    public function finalizar($id){

        $com = $this->objCompras->find($id);

        if($com){

            $ns = $com['id_usuario'];

            DB::table('compras')->where('id', $id)->delete();

            DB::table('pedidosproduto')->where('id_usuario', $ns)->delete();
            DB::table('endereco')->where('id_usuario', $ns)->delete();
            DB::table('cartao')->where('id_usuario', $ns)->delete();

                            // dd($valortotal);

        }

        return redirect('produtos');
    }
}
