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
                        <!-- <form action="{{url("/carrinho/cancelar")}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}


                                <input type="hidden" id="cancelar" name="cancelar" value="$md"/>

                                <button id="payment-button" type="submit" class="btn btn-suucess">
                                    <i class="zmdi zmdi-edit"></i>&nbsp;
                                    <span id="payment-button-amount">cancelar</span>
                                </button>
                        </form>                     -->
                        </div>
                        
                        <div class="card-body card-block">
                       
                               

                                @foreach($alimentos as $pedidos)
                                    <div class="text-dark">
                                        <h5>
                                                {{ $pedidos->nome_produto }}  
                                                <i>{{ $pedidos->obs }}</i>
                                                <i>{{ $pedidos->quantidade }}</i>
                                                <i>{{ $pedidos->preco }}</i>

                                                <a href="{{url("/carrinhocontrol/pedido/$pedidos->id")}}">
                                                      <button class="btn btn-dark">Deletar</button>
                                                </a>

                                                @php
                                                    $valor = 
                                                    $pedidos->preco;
                                                @endphp
                                        </h5>
                                    </div>


                                    <input type="hidden" class="usuario" value="{{ $pedidos->id_usuario }}" required>

                                    @php
                                        $reqs = $pedidos->id_usuario;
                                    @endphp

                                @endforeach


                                <input type="hidden" class="valortotal" value="{{ $valortotal }}" required>
                                <a>Preco Total: <i class="total"></i> </a>

                                <!-- <input type="hidden" class="totais" value="{{$valortotal}}" required> -->


                                <div class=" float-right">
                                    <button data-usuario="{{$reqs}}" data-totais="{{$valortotal}}" class="ends btn btn-primary p-5" data-toggle="modal" data-target="#Endereco">
                                        <i class="zmdi zmdi-edit"></i>&nbsp;
                                        <span id="payment-button-amount">Continuar</span>
                                        <p>Continua</p>
                                    </button>
                                </div>
                        </div>

                 

                       <div>



                        <a class="btn btn-sucess" href="{{url('/')}}">
                        
                            <i class="zmdi zmdi-edit"></i>&nbsp;
                            <span id="payment-button-amount">Mais pedidos</span>
                        </a>
                        @foreach($alimentoswan as $pedidos)

                        <a href="{{url("/carrinhocontrol/cancelar/$pedidos->id")}}">
                            <button class="btn btn-dark">Cancelar</button>
                        </a>

                        @endforeach

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

@include('modal.modal')

<!-- <script src="{{ url('js/excluirpedido.js')}}"></script> -->
<script src="{{ url('js/extras.js')}}"></script>
@endsection