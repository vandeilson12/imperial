@extends('layouts.app')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    
        <div class="page-wrapper">

        @include('menu.menu')

        <!-- PAGE CONTAINER-->
        <div class="page-container">

        @include('menu.usuario')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>

                                            @foreach($ultuser as $as)
                                            <div class="text">
                                                <h2>{{ $as->id }}</h2>
                                                <span>Usuarios / Adm</span>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            @foreach($compras as $as)
                                            <div class="text">
                                                <h2>{{ $as->id }}</h2>
                                                <span>Compras</span>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,086</h2>
                                                <span>Dias Funcionando</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>

                                     
                                            <div class="text">
                                                <input type="hidden" value="{{ $colle }}" class="valortotal"/>
                                                <h2 class="total"></h2>
                                                <span>Vendas(R$)</span>
                                            </div>
                                            

                                            
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                        <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Geral</h2>
                                    <div class="user-data__footer">
                                        <a href="{{url("/alimentos/create")}}">
                                            <button class="au-btn au-btn-load">ADD Alimento</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Lucro Mensal - Em desenvolvimento</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                                <div class="chart-note">
                                                    <span class="dot dot--blue"></span>
                                                    <span>produtos</span>
                                                </div>
                                                <!-- <div class="chart-note mr-0">
                                                    <span class="dot dot--green"></span>
                                                    <span>services</span>
                                                </div> -->
                                            </div>
                                            <div class="chart-info__right">
                                                <div class="chart-statis">
                                                    <span class="index incre">
                                                        <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                                    <span class="label">lucros</span>
                                                </div>
                                                <div class="chart-statis mr-0">
                                                    <span class="index decre">
                                                        <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                                    <span class="label">prejuizos</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recent-report__chart">
                                            <canvas id="recent-rep-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 tm-b-5">Mais Vendidos - Em desenvolvimento</h3>
                                        <div class="row no-gutters">
                                            <div class="col-xl-6">
                                                <div class="chart-note-wrap">
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--blue"></span>
                                                        <span>Hot-Dog</span>
                                                    </div>
                                                    <div class="chart-note mr-0 d-block">
                                                        <span class="dot dot--red"></span>
                                                        <span>Bebidas</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="percent-chart">
                                                    <canvas id="percent-chart"></canvas>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- DATA TABLE-->
                                <div class="col-lg-12">
                                    <h2 class="title-1 m-b-25">Última compra</h2>
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

                                    <!-- <div class="au-task__footer">
                                        <button class="au-btn au-btn-load js-load-btn">Todas Compras</button>
                                    </div> -->
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Melhores Clientes</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <!-- <td>Nome</td>
                                                        <td class="text-right">$119,366.96</td> -->
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('{{ asset('/adm/images/bg-title-01.jpg')}} ');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <i class="zmdi zmdi-account-calendar"></i> 2021</h3>
                                        <button class="au-btn-plus">
                                            <i class="zmdi zmdi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="au-task js-list-load">
                                        
                                        <!-- <div class="au-task__title">
                                            <p>Compras Realizadas</p>
                                        </div> -->
                                        
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <!-- <a href="#">Compra feita hj</a> -->
                                                        Em desenvolvimento
                                                    </h5>
                                                    <!-- <span class="time">horario 10:00 </span> -->
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020. All rights reserved. <a href="#">Pastelaria Imperial</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <script src="{{ url('js/extras.js')}}"></script>
@endsection
