@extends('layout.default')


@section('content')

  	 
  	 <div class="container">

  	 	@if($message = Session::get('success'))

  	 		<div class="alert alert-success">{{$message}}</div>

  	 	@endif

      @if($errors->any())

           <div class="alert alert-danger">
             <ul>
               @foreach($errors->all() as $error)

               <li>{{$error}}</li>

               @endforeach
             </ul>
           </div>


      @endif

     

  	 	<form action="{{ route('searchClients') }}" class="form-inline float-right" method="get">
  	 		@csrf

  	 		@method('GET')
  	 		
  	 		<input type="text" placeholder="Rechercher..." class="form-control" name="to_search">&nbsp;
  	 		<button type="submit" class="btn btn-sm btn-warning"><span class="fa fa-search"></span></button>

  	 	</form>

  	 	<h4 class="text-info">Clients</h4>

  	 	<a href="{{route('clients.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i></a>

  	 	<table class="table table-stripped table-bordered my-3">

  	 		<thead>
  	 			<tr>
  	 				<th>#</th>
  	 				<th>Nom</th>
  	 				<th>Prenom</th>
  	 				<th>Entreprise</th>
  	 				<th>Date de Création</th>
  	 				<th>Actions</th>
  	 			</tr>
  	 		</thead>
  	 		
  	 		<tbody>

  	 			@foreach($clients as $client)

  	 			<tr>
  	 				<td>{{$client->id}}</td>
  	 				<td><a href="{{route('clients.show', $client->id)}}">{{$client->nom}}</a></td>
  	 				<td>{{$client->prenom}}</td>
  	 				<td>{{$client->entreprise->nom}}</td>
  	 				<td>{{$client->created_at}}</td>

  	 				<td class="d-flex">

  	 					<a href="{{route('clients.edit', $client->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a> &nbsp; &nbsp;

  	 					<form action="{{route('clients.destroy', $client->id)}}" method="post">
  	 						@csrf

  	 						@method('DELETE')
  	 						
  	 						<button class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cet élément?');"><i class="fa fa-trash-alt"></i></button>
  	 					</form>

  	 					
  	 				</td>
  	 				
  	 			</tr>

  	 			@endforeach

  	 		</tbody>

  	 	</table>
  	 	
  	 </div>


@endsection