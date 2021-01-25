<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
// use App\Model\AdmModel;
use App\Model\CachorroQuenteModel;

class CachorroQuenteController extends Controller
{
    //

    public function __construct()
    {
        $this->objUser = new User();
        // $this->objAdm = new AdmModel();

        $this->objCachorro = new CachorroQuenteModel;
      
    }

    public function show($id)
    {

        $cachor = $this->objCachorro->find($id);

        return view('alimentos/ver2',compact('cachor'));

    }

    public function edit($id)
    {
        $cachor=$this->objCachorro->find($id);
        return view('alimentos/editar2', compact('cachor'));
    }


    public function update(Request $request, $id)
    {
            $this->objCachorro->where(['id'=>$id])->update([
                'salada'=>$request->salada,
                'carne_moida'=>$request->carne_moida,
                'calabreza'=>$request->calabreza,
                'milho'=>$request->milho,
                'ervilha'=>$request->ervilha,
                'salsicha'=>$request->salsicha,
                'queijo'=>$request->queijo,
                'descricao'=>$request->descricao,
                'detalhes'=>$request->detalhes,
                ]);

                // if($request->hasFile('img') && $request->img->isValid()){
                //     $this->objCachorro->where(['id'=>$id])->update([
                //         'img'=>$request->img->store('img','public')
                //     ]);
                // }
            return redirect('produtos');
    }
}
