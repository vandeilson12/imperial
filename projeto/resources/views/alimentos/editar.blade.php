@extends('layouts.app')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">

            <!-- <div class="col-lg-6">
                <img src="{{url("storage/$alimento->img")}}" id="img" name="img" alt="{{$alimento->hanburgue}}">
            </div> -->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Editar {{ $alimento->hanburgue }}</strong>                            
                        </div>
                        
                        <div class="card-body card-block">
                            <form action="{{url("/hanburgue/update/$alimento->id")}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="salada" class=" form-control-label">Salada R$</label>
                                <input type="text" id="salada" name="salada" placeholder="{{ $alimento->salada }}" class="form-control" value="{{ $alimento->salada }}">
                            </div>
                            <div class="form-group">
                                <label for="carnes" class=" form-control-label">Carnes R$</label>
                                <input type="text" id="carnes" name="carnes" placeholder="{{ $alimento->carnes }}" class="form-control" value="{{ $alimento->carnes }}">
                            </div>
                            <div class="form-group">
                                <label for="presunto" class=" form-control-label">Presunto R$</label>
                                <input type="text" id="presunto" name="presunto" placeholder="{{ $alimento->presunto }}" class="form-control" value="{{ $alimento->presunto }}">
                            </div>
                            <div class="form-group">
                                <label for="ovos" class=" form-control-label">Ovos R$</label>
                                <input type="text" id="ovos" name="ovos" placeholder="{{ $alimento->ovos }}" class="form-control" value="{{ $alimento->ovos }}">
                            </div>
                            <div class="form-group">
                                <label for="batata_palha" class=" form-control-label">Batata Palha R$</label>
                                <input type="text" id="batata_palha" name="batata_palha" placeholder="{{ $alimento->batata_palha }}" class="form-control" value="{{ $alimento->batata_palha }}">
                            </div>
                            <div class="form-group">
                                <label for="cheddan" class=" form-control-label">Cheddan R$</label>
                                <input type="text" id="cheddan" name="cheddan" placeholder="{{ $alimento->cheddan }}" class="form-control" value="{{ $alimento->cheddan }}">
                            </div>

                            <div class="form-group">
                                <label for="descricao" class=" form-control-label">Descricao</label>
                                <input type="text" id="descricao" name="descricao" placeholder="{{ $alimento->descricao }}" class="form-control" value="{{ $alimento->descricao }}">
                            </div>

                            <div class="form-group">
                                <label for="detalhes" class=" form-control-label">Detalhes</label>
                                <input type="text" id="detalhes" name="detalhes" placeholder="{{ $alimento->detalhes }}" class="form-control" value="{{ $alimento->detalhes }}">
                            </div>


                            <!-- <div class="form-group">
                                <label for="img" class="form-control-label">Imagem</label>
                                <input type="file" id="img" name="img" placeholder="{{ $alimento->img }}" class="form-control">
                            </div> -->
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