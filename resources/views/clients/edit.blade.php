@extends('layout.default')



@section('content')

     <div class="container">
     	<h4 class="text-success">Modification client:</h4>

     	<form action="{{route('clients.update', $client->id)}}" method="post" class="form">

				@csrf

				@method('PUT')

				<div class="form-group">
					
					<label for=""><strong>Nom:</strong></label>
					<input type="text" name="nom" class="form-control" placeholder="Entrer le nom..." value="{{$client->nom}}">

				</div>

				<div class="form-group">
					
					<label for=""><strong>Prenom:</strong></label>
					<input type="text" name="prenom" class="form-control" placeholder="Entrer le prenom..." value="{{$client->prenom}}">
					
				</div>

				<div class="form-group">
					
					<label for=""><strong>Email:</strong></label>
					<input type="email" name="email" class="form-control" placeholder="Entrer l'adresse mail..." value="{{$client->email}}">
					
				</div>

				<label for=""><strong>Genre:</strong></label>

				<select name="genre" class="form-control">

					@foreach($client->getGenreOptions() as $key=>$value)
                  
                       <option value="{{$key}}" {{$client->genre == $value ? 'selected': ''}}>{{$value}}</option>

					@endforeach


				</select> <br>

				<label for=""><strong>Entreprise:</strong></label>

				<select name="entreprise_id" class="form-control">

					@foreach($entreprises as $entreprise)

					   <option value="{{$entreprise->id}}" {{$client->entreprise_id == $entreprise->id ? 'selected' : ''}}>{{$entreprise->nom}}</option>

                    @endforeach

				</select> <br>

				<div class="form-group">
					
					<label for=""><strong>Photo:</strong></label>
					<input type="file" name="image" class="form-control">
					
				</div>

				<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Valider Modifications</button>


				
			</form>


     </div>


@stop