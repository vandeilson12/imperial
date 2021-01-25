@extends('layouts.app')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">

        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <!-- <h3 class="title-5 m-b-35">Alimentos</h3> -->
                <div class="table-data__tool">
                    <div class="table-data__tool-left">
                        
                        <div class="rs-select2--light rs-select2--md">
                            <select class="js-select2" name="property">
                                <option selected="selected">Todos</option>
                                <option value="">Bebidas</option>
                                <option value="">X-Imperial</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <button class="au-btn-filter">
                            <i class="zmdi zmdi-filter-list"></i>filters
                        </button>

                    </div>
                    <div class="table-data__tool-right">
                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>add ALIMENTO</button>
                        <!-- <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                            <select class="js-select2" name="type">
                                <option selected="selected">Export</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div> -->
                    </div>
                </div>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>
                                    <label class="au-checkbox">
                                        <input type="checkbox">
                                        <span class="au-checkmark"></span>
                                    </label>
                                </th>
                                <th scope="col">Salada</th>
                                <th scope="col">Canes</th>
                                <th scope="col">Queijo</th>
                                <th scope="col">Presunto</th>
                                <th scope="col">Ovos</th>
                                <th scope="col">Batata Palha</th>

                                <th scope="col">Descricao</th>
                                <th scope="col">Detalhes</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="tr-shadow">
                                <td>
                                    <label class="au-checkbox">
                                        <input type="checkbox">
                                        <span class="au-checkmark"></span>
                                    </label>
                                </td>

                                @php
                                    $bb=$hanbur->find($hanbur->id);
                                @endphp


                                <td>R$ {{$bb['salada']}}</td>
                                <td>R$ {{$bb['carnes']}}</td>
                                <td>R$ {{$bb['queijo']}}</td>
                                <td>R$ {{$bb['presunto']}}</td>
                                <td>R$ {{$bb['ovos']}}</td>
                                <td>R$ {{$bb['batata_palha']}}</td>

                                <td>R$ {{$bb['descricao']}}</td>
                                <td>R$ {{$bb['detalhes']}}</td>
                                <td>
                                    <div class="table-data-feature">
                                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                            <i class="zmdi zmdi-mail-send"></i>
                                        </button> -->

                                        <a href="{{url("/hanburgue/$hanbur->id/edit")}}"><button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <i class="zmdi zmdi-edit"></i>
                                        </button></a>
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                            <i class="zmdi zmdi-more"></i>
                                        </button> -->
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
                                  