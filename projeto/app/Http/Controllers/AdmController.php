<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Requests;
use App\Http\Requests\AdmRequest;
use App\Model\AdmModel;
use App\User;

class AdmController extends Controller
{

    public $objUser;
    public $objAdm;

    public function __construct()
    {
        $this->objUser = new User();
        $this->objAdm = new AdmModel();
    }

    public function index()
    {
        // dd($this->objUser->all());

        // dd($this->objUser->find(5)->relAdm);

        // $user = $this->objUser->find(5)->relAdm;
        // $user = $this->objAdm->first(1)->relOne;
        // $des = $this->objImg->all()->relo;
        $adm = $this->objUser->paginate(1);

        return view('admin/index',compact('adm'));

    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 

    public function __invoke(AdmRequest $request)
    {
        //
    }

 

    public function show($id)
    {
        // echo $id;

        $adm = $this->objUser->find($id);
        return view('admin/ver',compact('adm'));
    }


    public function create()
    {
        // $users= $this->objUser->all();
        // return view('admin/index',compact('users'));
    }

    public function store(AdmRequest $request)
    {
        //
        // $cad=$this->objTeste->create([
        //     'id_user'=> $request->id_user,
        //     'name'=>$request->id_user,
        //     'pontos'=>$request->pontos,
        //     'lado'=>$request->lado
        // ]);

        // if($cad){
        //     return redirect('home');
        // }
    }

 
    
    public function edit($id)
    {
        $users=$this->objUser->find($id);

        $adm = $this->objAdm->all();
        

        // dd($users);

        return view('admin/create', compact('adm', 'users'));
    }


 

    public function update(AdmRequest $request, $id)
    {
        $this->objUser->where(['id'=>$id])->update([
            'name'=>$request->name,
            'email'=>$request->email
            // 'password'=>$request->password
        ]);

        // if ($request->img) {
        //     $file = $request->File('img');
        //     $ext  = $user->username . "." . $file->clientExtension();
        //     $file->storeAs('images/', $ext);
        //     $user->image_name = $ext;
        // }

        $adm = $this->objUser->find($id);
        $aaa = $this->objAdm->find($id);


        // return dd($aaa['id']);

        if($request->id == $id){

            if($request->hasFile('img') && $request->img->isValid()){
                $this->objAdm->create([
                    'img'=>$request->img->store('img','public'),
                    'upload'=>$request->name,
                    'id_user'=>$request->id
                ]);

                $this->objAdm->where(['id_user'=>$id])->update([
                    'img'=>$request->img->store('img','public'),
                    'upload'=> $request->name,
                    'id_user'=>$request->id
                ]);
            }
        
           
        }

        return redirect('home');
    }

   
    public function destroy($id){
        $del=$this->objUser->destroy($id);

        $aaa = $this->objAdm->find($id);


        return($del) ? 'sim' : 'não';

        if($request->hasFile('img') && $request->img->isValid()){

            Storage::delete($aaa['img']);
        }
    }


    // 

    // public function produtos(){
    //     return view('produtos');
    // }
}
