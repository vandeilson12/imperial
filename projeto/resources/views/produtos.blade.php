@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    
        <div class="page-wrapper">

        @include('menu.menu')

        <div class="page-container">

        @include('menu.usuario')

        <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                        <div class="row">
                            <div class="col-lg-12">
                            
                                <!-- USER DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <!-- <i class="zmdi zmdi-account-calendar"></i> -->
                                        Produtos</h3>
                                    <div class="filters m-b-45">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">Todos</option>
                                                
                                                <option value="">Hanburgue</option>
                                                <option value="">Cachorro quente</option>
                                                <option value="">Bebidas</option>

                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-data">

                                 
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                   
                                                    <td>Nome</td>
                                                    <td>Ações</td>
                                                    
                                                </tr>
                                            </thead>

                                            
                                          @include('produtos.alimentos')
                                            

                                        </table>
                                    </div>
                                    <div class="user-data__footer">
                                        <a href="{{url("/alimentos/create")}}">
                                            <button class="au-btn au-btn-load">ADD Alimento</button>
                                        </a>
                                    </div>
                                </div>
                                <!-- END USER DATA-->
                            </div>


                            <div class="col-lg-12">
                            
                                <!-- USER DATA-->
                                <div class="user-data m-b-30">
                                    <h3 class="title-3 m-b-30">
                                        <!-- <i class="zmdi zmdi-account-calendar"></i> -->
                                        Adicionais</h3>
                                    <div class="filters m-b-45">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">Todos</option>
                                                
                                                <option value="">Hanburgue</option>
                                                <option value="">Cachorro quente</option>
                                                <option value="">Bebidas</option>

                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-data">

                                 
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                   
                                                    <td>Nome</td>
                                                    <td>Ações</td>
                                                    
                                                </tr>
                                            </thead>

                                            
                                          @include('produtos.adicionais')
                                            

                                        </table>
                                    </div>
                                </div>
                                <!-- END USER DATA-->
                            </div>

                            <div class="col-lg-12">
                                <!-- TOP CAMPAIGN-->
                                <div class="top-campaign">
                                    <h3 class="title-3 m-b-30">Mais Vendidos</h3>
                                    <div class="table-responsive">
                                        <table class="table table-top-campaign">
                                            <tbody>
                                                <tr>
                                                    <td>1. Australia</td>
                                                    <td>$70,261.65</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--  END TOP CAMPAIGN-->
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="col-lg-12">
                                    <h2 class="title-1 m-b-25">Compras</h2>
                                    <div class="table-responsive table--no-card m-b-40">
                                        <table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                    <th>Usuario</th>
                                                    <th>Nome</th>
                                                    <th>Delivery</th>
                                                    <th>Cartão</th>
                                                    <th>Valor</th>
                                                    <th>Ver</th>
                                                    <!-- <th class="text-right">preço</th>
                                                    <th class="text-right">quantidade</th>
                                                    <th class="text-right">total</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($compras as $as)
                                                <tr>
                                                    <td>{{ $as->id_usuario}}</td>
                                                    <td>{{ $as->name}}</td>
                                                    <td>{{ $as->cartao}}</td>
                                                    <td>{{ $as->delivery}}</td>
                                                    <td>{{ $as->valor}}</td>
                                                    <td><a href="{{ url("compras/$as->id")}}"><button>Ver</button></a></td>
                                                </tr>
                                            @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="au-task__footer">
                                        <button class="au-btn au-btn-load js-load-btn">Todas Compras</button>
                                    </div>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection