@extends('layouts.app')


@section('content')
<div class="container p-5">
<h2 class="title-1 m-b-25">Usuarios</h2>
<div class="table-responsive table--no-card m-b-40">
<table class="table table-borderless table-striped table-earning">
<thead>
    <tr>
    <th scope="col">Img</th>
    <!-- <th scope="col">Id</th> -->
    <th scope="col">Usuario</th>
    <th scope="col">Email</th>
    </tr>
</thead>
  <tbody>
      @php
        $usd = $adm->find($adm->id)->relAdm;
        $img = $usd['img'];
      @endphp
    <tr>
      <th class="table" style="width: 200px">
        <a href="{{url("storage/$img")}}">
          <img src="{{url("storage/$img")}}" id="img" name="img" alt="{{$adm->name}}">
        </a>
      </th>
        
      <th>{{$adm->name}}</th>
      <th>{{$adm->email}}</th>

    </tr>
  </tbody>
</table>

</div>
</div>
@endsection