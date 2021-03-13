@extends('layout.default')


@section('content')

	 <div class="card" style="width: 18rem;">
  <img src="{{ asset('storage/'.$client->image)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$client->email}}</h5>
    <p class="card-text">{{$client->prenom}}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$client->entreprise->nom}}</li>
    <li class="list-group-item">{{$client->created_at}}</li>
    <li class="list-group-item">{{$client->updated_at}}</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link"></a>
    <a href="/clients" class="card-link">Retour</a>
  </div>
</div>



@endsection