<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
// use App\Model\BebidasModel;
// use App\Model\ImagenBebidasModel;

use App\Model\CachorroQuenteModel;

use App\Model\AlimentosModel;

class BebidasController extends Controller
{
    //
    public function __construct()
    {
        // $this->objUser = new User();
        // $this->objAdm = new AdmModel();

        // $this->objBebida = new BebidasModel;
        $this->objAlimentos = new AlimentosModel;
        $this->objCachorro = new CachorroQuenteModel;
        // $this->objImagenBebida = new ImagenBebidasModel;
      
    }

    // $cad=$this->objTeste->create([]);

    public function store(Request $request)
    {
        //
        if($request->hasFile('img') && $request->img->isValid()){
           $this->objAlimentos->create([
                'name'=>$request->name,
                'preco'=>$request->preco,
                'img'=>$request->img->store('img','public'),
                'categoria'=>$request->categoria,
                'descricao'=>$request->descricao,
                'detalhes'=>$request->detalhes,
            ]);
        }
        return redirect('produtos');
    }
    
    public function create()
    {
        // $vas= $this->objAlimentos->all();
        return view('alimentos/editar3');//compact('vas')
    }

    public function show($id)
    {

        // $bebi = $this->objBebida->find($id);
        // $imagenbebid=$this->objImagenBebida->all()

        $vas=$this->objAlimentos->find($id);


        // $categoria = 0;
        // foreach($vas as $rr){
        // }
        // $categoria;

        // $subcategoria = $vas['subcategoria'];


        // $cachorro = DB::table('cachorro_quente')->where('cachorro', $subcategoria)->get();

        // $hanburgue = DB::table('hanburgue')->select('id')->where('hanburgue', $subcategoria)->get();

        // if(isset($cachorro) || isset($hanburgue)){
        //     $vvv = $this->objCachorro;

        //     foreach($vvv as $v){
        //         dd($v['id']);
        //     }
        // }

         return view('alimentos/ver3',compact('vas'));

    }

    public function edit($id)
    {
        $vas=$this->objAlimentos->find($id);

        return view('alimentos/editar3',compact('vas'));
    }


    public function update(Request $request, $id)
    {

            $this->objAlimentos->where(['id'=>$id])->update([
                'name'=>$request->name,
                'preco'=>$request->preco,
                'categoria'=>$request->categoria,
                'subcategoria'=>$request->subcategoria,
                'descricao'=>$request->descricao,
                'detalhes'=>$request->detalhes
            ]);

        if($request->hasFile('img') && $request->img->isValid()){
            $this->objAlimentos->where(['id'=>$id])->update([
                'img'=>$request->img->store('img','public')
            ]);
        }

        return redirect('produtos');
    }
}
