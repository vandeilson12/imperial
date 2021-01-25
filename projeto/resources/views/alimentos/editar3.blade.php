@extends('layouts.app')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">

            @if(isset($vas))
            <div class="col-lg-6">
                <img style="width: 200px;" src="{{url("storage/$vas->img")}}" id="img" name="img" alt="{{$vas->name}}">
            </div>
            @endif

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Editar bebias</strong>                            
                        </div>
                        
                        <div class="card-body card-block">

                            @if(isset($vas))
                                <form action="{{url("alimentos/update/$vas->id")}}" method="post" enctype="multipart/form-data">
                            @else
                                <form action="{{url('alimentos')}}" method="post" enctype="multipart/form-data">
                            @endif
                            
                            @csrf
                            
                            <div class="form-group">
                                <label for="name" class=" form-control-label">Nome</label>
                                <input type="text" id="name" name="name" placeholder="{{ $vas->name  ?? '' }}" class="form-control" value="{{ $vas->name  ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="preco" class=" form-control-label">preco</label>
                                <input type="text" id="preco" name="preco" placeholder="{{ $vas->preco  ?? '' }}" class="form-control" value="{{ $vas->preco  ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="categoria" class=" form-control-label">Categoria</label>
                                <input type="text" id="categoria" name="categoria" placeholder="{{ $vas->categoria  ?? '' }}" class="form-control" value="{{ $vas->categoria  ?? '' }}">
                            </div>

                            <div class="form-group">
                                <label for="categoria" class=" form-control-label">SubCategorias</label>
                                <input type="text" id="subcategoria" name="subcategoria" placeholder="{{ $vas->subcategoria  ?? '' }}" class="form-control" value="{{ $vas->subcategoria  ?? '' }}">
                            </div>

                            <div class="form-group">
                                <label for="descricao" class=" form-control-label">Descricao</label>
                                <input type="text" id="descricao" name="descricao" placeholder="{{ $vas->descricao  ?? '' }}" class="form-control" value="{{ $vas->descricao  ?? '' }}">
                            </div>
                            <div class="form-group">
                                <label for="detalhes" class=" form-control-label">Detalhes</label>
                                <input type="text" id="detalhes" name="detalhes" placeholder="{{ $vas->detalhes  ?? '' }}" class="form-control" value="{{ $vas->detalhes ?? '' }}">
                            </div>

                            <div class="form-group">
                                <label for="img" class=" form-control-label">Imagen</label>
                                <input type="file" id="img" name="img"  class="form-control">
                            </div>

                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="zmdi zmdi-edit"></i>&nbsp;
                                <span id="payment-button-amount">
                                    @if(isset($vas)) Editar @else Cadastrar @endif 
                                </span>

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