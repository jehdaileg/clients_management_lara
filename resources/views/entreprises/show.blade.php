@extends('layout.default')


@section('content')

  <div class="container">
  	<div class="card" style="width: 18rem;">
  <img src="{{asset('storage/' .$entreprise->logo)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">{{$entreprise->nom}}--{{$entreprise->statut}}</p>
  </div>
</div>

  </div>


@stop