@extends('layouts.app')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">


                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Editar {{ $cachor->cachorro }}</strong>                            
                        </div>
                        
                        <div class="card-body card-block">
                            <form action="{{url("/cachorro/update/$cachor->id")}}" method="post"enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="carne_moida" class=" form-control-label"> R$ Carne moida</label>
                                <input type="text" id="carne_moida" name="carne_moida" placeholder="{{ $cachor->carne_moida }}" class="form-control" value="{{ $cachor->carne_moida }}">
                            </div>
                            <div class="form-group">
                                <label for="salada" class=" form-control-label"> R$ Salada</label>
                                <input type="text" id="salada" name="salada" placeholder="{{ $cachor->salada }}" class="form-control" value="{{ $cachor->salada }}">
                            </div>
                            <div class="form-group">
                                <label for="calabreza" class=" form-control-label"> R$ Calabreza</label>
                                <input type="text" id="calareza" name="calabreza" placeholder="{{ $cachor->calabreza }}" class="form-control" value="{{ $cachor->calabreza }}">
                            </div>
                            <div class="form-group">
                                <label for="milho" class=" form-control-label"> R$ Milho</label>
                                <input type="text" id="milho" name="milho" placeholder="{{ $cachor->milho }}" class="form-control" value="{{ $cachor->milho }}">
                            </div>
                            <div class="form-group">
                                <label for="ervilha" class=" form-control-label">Ervilha  R$</label>
                                <input type="text" id="ervilha" name="ervilha" placeholder="{{ $cachor->ervilha }}" class="form-control" value="{{ $cachor->ervilha }}">
                            </div>
                            <div class="form-group">
                                <label for="salsicha" class=" form-control-label"> R$ Salsicha</label>
                                <input type="text" id="salsicha" name="salsicha" placeholder="{{ $cachor->salsicha }}" class="form-control" value="{{ $cachor->salsicha}}">
                            </div>

                            <div class="form-group">
                                <label for="queijo" class=" form-control-label"> R$ Queijo</label>
                                <input type="text" id="queijo" name="queijo" placeholder="{{ $cachor->queijo }}" class="form-control" value="{{ $cachor->queijo }}">
                            </div>

                            <div class="form-group">
                                <label for="batata_palha" class=" form-control-label"> R$ Batat Palha</label>
                                <input type="text" id="batata_palha" name="batata_palha" placeholder="{{ $cachor->batata_palha }}" class="form-control" value="{{ $cachor->batata_palha }}">
                            </div>

                            <div class="form-group">
                                <label for="descricao" class=" form-control-label">Descricao</label>
                                <input type="text" id="descricao" name="descricao" placeholder="{{ $cachor->descricao }}" class="form-control" value="{{ $cachor->descricao }}">
                            </div>

                            <div class="form-group">
                                <label for="detalhes" class=" form-control-label">Detalhes</label>
                                <input type="text" id="detalhes" name="detalhes" placeholder="{{ $cachor->detalhes }}" class="form-control" value="{{ $cachor->detalhes }}">
                            </div>

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