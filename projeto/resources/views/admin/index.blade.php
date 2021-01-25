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
                                @csrf
                                <h2 class="title-1 m-b-25">Usuarios</h2>
                                <!-- <h2 class="float-right title-1 m-b-25">
                                  <button class=""><a href="{{ url('register')}}">Usuario<a></button>
                                </h2> -->
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                            <th scope="col">Img</th>
                                            <th scope="col">Id</th>
                                            <th scope="col">Usuario</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($adm as $testes)

                                            @php
                                              $usd = $testes->find($testes->id)->relAdm;

                                              $des = $usd['img'];
                                            @endphp
                                            <tr>
                                            <td>

                                            <img src="{{url("storage/$des")}}" id="img" name="img" alt="{{$testes->name}}">
                                                
                                            </td>
                                                  <th scope="row">{{$testes->id}}</th>
                                                  <td>
                                                    {{$testes->name}}
                                                  </td>
                                                  <td>{{$testes->email}}</td>
                                                  <td>
                                                    <a href="{{url("/admin/$testes->id")}}">
                                                      <button class="btn btn-dark">Ver</button>
                                                    </a>

                                                    <a href="{{url("/admin/$testes->id/edit")}}">
                                                      <button class="btn btn-dark">Editar</button>
                                                    </a>

                                                    <a href="{{url("/admin/$testes->id")}}" class="js-del">
                                                      <button class="btn btn-dark">Deletar</button>
                                                    </a>
                                                  </td>
                                            </tr>
                                            
                                            @endforeach
                                </tbody>
                              </table>

                              {{$adm->links()}}
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