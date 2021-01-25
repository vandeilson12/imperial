@extends('layouts.app')

@section('content')

<h1 class="text-center text-dark">
    @if(isset($users))Editar @else Cadastrar @endif 
</h1>
<hr/>

@if(empty($errors) && count($errors) > 0)
    <div class="text-center bg-danger text-light mt-4 mb-4 p-2"> 
        @foreach($errors->all() as $error)
            {{$error}}<br/>
        @endforeach
    </div>
@endif


<div class="container p-5">
<div class="row justify-content-center">


@if(isset($users))
    <form name="formEdit" id="formEdit" action="{{url("/admin/$users->id")}}" method="post" enctype="multipart/form-data">
        @method('PUT')
@endif

@csrf

@if(empty($testes)) 
    <div class="col-md-12 my-1">
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Imagem</label>
            <div class="col-sm-10">
                
                    @if($users->img)
                        <img src="{{url("storage/adm/$user->img")}}" id="img" name="img" alt="">
                    @endif

                    <p>Editar imagem</p>
                    <input type="file" id="img" name="img">

            </div>
        </div>
    </div>     
@endif
   
    <div class="col-md-12  my-1">
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nome</label>
            <div class="col-sm-10">
                    @if(empty($testes)) 
                        <input class="form-control form-control-lg" type="text" name="name" id="name" value="{{$users['name']}}"/>
                     @endif
            </div>
        </div>
    </div>

    <div class="col-md-12 my-1">
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
            <div class="col-sm-10">
                <input type="text" name="email" class="form-control form-control-lg" id="email" placeholder="ex:direito" required 
                value="{{$users->email}}">
            </div>
        </div>
    </div>

    <input type="hidden" id="id" name="id" value="{{ $users->id }}">

    <div class="col-md-12 my-1">
        <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Senha</label>
            <div class="col-sm-10">
                <p name="password" class="form-control form-control-lg">{{$users->password ?? ''}}</p>
            </div>
        </div>
    </div>



<button class="btn btn-dark float-right"> @if(empty($testes)) Editar @else Cadastrar @endif </button>


</form>



</div>
</div>
@endsection