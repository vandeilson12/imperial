@extends('layouts.app')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">

        <div class="row">
            <div class="col-md-12">
             @include('compras.resumo.cartao')
            </div>

            <div class="col-md-12">
             @include('compras.resumo.endereco')
            </div>

            <div class="col-md-12">
             @include('compras.resumo.pedidos')
            </div>

        </div>
        
    </div>
</div>

@endsection