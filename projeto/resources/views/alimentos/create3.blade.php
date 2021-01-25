@extends('layouts.app')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">

            <div class="col-lg-6">
                
            </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Add Alimentos</strong>                            
                        </div>
                        
                        <div class="card-body card-block">
                            <form action="{{url("/alimentos/create")}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name" class=" form-control-label">Nome</label>
                                <input type="text" id="name" name="name" placeholder="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="preco" class=" form-control-label">Preco</label>
                                <input type="text" id="preco" name="preco" placeholder="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="categoria" class=" form-control-label">Categoria</label>
                                <input type="text" id="categoria" name="categoria" placeholder="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="descricao" class=" form-control-label">Descricao</label>
                                <input type="text" id="descricao" name="descricao" placeholder="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="detalhes" class=" form-control-label">Detalhes</label>
                                <input type="text" id="detalhes" name="detalhes" placeholder="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="img" class=" form-control-label">Imagen</label>
                                <input type="file" id="img" name="img"  class="form-control">
                            </div>

                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="zmdi zmdi-edit"></i>&nbsp;
                                <span id="payment-button-amount">Editar</span>
                            </button>
                        </div>

                       </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection