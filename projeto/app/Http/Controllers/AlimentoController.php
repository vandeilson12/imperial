<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\AdmModel;
use App\Model\AlimentoModel;


class AlimentoController extends Controller
{
    public function __construct()
    {
        $this->objUser = new User();
        $this->objAdm = new AdmModel();

        $this->objAlimento = new AlimentoModel;
        
      
    }

    public function index($id)
    {

        $user = $this->objUser->all();

        return view('index',compact('user'));
    }
 
    public function __invoke()
    {
        
    }


    public function show($id)
    {
        
        $hanbur = $this->objAlimento->find($id);

        
        return view('alimentos/ver',compact('hanbur'));

    }


    public function create()
    {
        
    }

    public function store()
    {

    }

 
    
    public function edit($id)
    {
        $alimento=$this->objAlimento->find($id);
        return view('alimentos/editar', compact('alimento'));
    }


    public function update(Request $request, $id)
    {
            $this->objAlimento->where(['id'=>$id])->update([
                'salada'=>$request->salada,
                'carnes'=>$request->carnes,
                'queijo'=>$request->queijo,
                'presunto'=>$request->presunto,
                'ovos'=>$request->ovos,
                'batata_palha'=>$request->batata_palha,
                'cheddan'=>$request->cheddan,
                'descricao'=>$request->descricao,
                'detalhes'=>$request->detalhes
            ]);
            // if($request->hasFile('img') && $request->img->isValid()){
            //     $this->objAlimento->where(['id'=>$id])->update([
            //         'img'=>$request->img->store('img','public')
            //     ]);
            // }

        return redirect('produtos');
    }

   
    public function destroy()
    {
        
    }

}
