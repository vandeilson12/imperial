@extends('layouts.app')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">

        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <!-- <h3 class="title-5 m-b-35">Alimentos</h3> -->
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">

                    
                        <thead>
                            <tr>
                                <th scope="col">Usuario</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Catão</th>
                                <th scope="col">Delivery</th>
                                <th scope="col">Valor Total</th>
                                <th scope="col">Ver</th>
                                <th scope="col">Finalizar</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="tr-shadow">

                                @php
                                    $bb=$compras->find($compras->id);
                                @endphp

                                    <td>{{ $bb['id_usuario'] }}</td>
                                    <td>{{ $bb['name'] }}</td>
                                    <td>{{ $bb['cartao'] }}</td>
                                    <td>{{ $bb['delivery'] }}</td>
                                    <td>{{ $bb['valor'] }}</td>                                    


                                    @php
                                        $idid = $bb['id'];
                                    @endphp

                                <td>
                                        <a href="{{url("/compras/resumo/$idid")}}">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Ver">
                                                <i class="zmdi zmdi-edit"></i>Ver
                                            </button>
                                        </a>
                                    </div>
                                </td>
                                    
                                <td>
                                    <div class="table-data-feature">
                                        <a href="{{url("/compras/finalizar/$idid")}}">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Finalizar">
                                                <i class="zmdi zmdi-more"></i>Finalizada
                                            </button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        
                        </tbody>
                        
                        
                    </table>
                </div>
                <!-- END DATA TABLE -->
            </div>
        </div>
        
    </div>
</div>

@endsection