@extends('layout.default')

@section('content')

	<div class="container">


			<H4 class="text-info">Nouveau Client:</H4>


		@if($errors->any())

			<div class="alert alert-danger">
				<ol>
					@foreach($errors->all() as $error)

					<li>{{$error}}</li>

					@endforeach
				</ol>
			</div>

		@endif

			<form action="{{route('clients.store')}}" method="post" class="form" enctype="multipart/form-data">

				@csrf

				@method('POST')

				<div class="form-group">
					
					<label for=""><strong>Nom:</strong></label>
					<input type="text" name="nom" class="form-control" placeholder="Entrer le nom...">

				</div>

				<div class="form-group">
					
					<label for=""><strong>Prenom:</strong></label>
					<input type="text" name="prenom" class="form-control" placeholder="Entrer le prenom...">
					
				</div>

				<div class="form-group">
					
					<label for=""><strong>Email:</strong></label>
					<input type="email" name="email" class="form-control" placeholder="Entrer l'adresse mail...">
					
				</div>

				<label for=""><strong>Genre:</strong></label>

				<select name="genre" class="form-control">

					<option value="M">Masculin</option>
					<option value="F">Féminin</option>

				</select> <br>

				<label for=""><strong>Entreprise:</strong></label>

				<select name="entreprise_id" class="form-control">

					@foreach($entreprises as $entreprise)

						<option value="{{$entreprise->id}}">{{$entreprise->nom}}</option>

					@endforeach

				</select> <br>

				<div class="form-group">
					
					<label for=""><strong>Photo:</strong></label>
					<input type="file" name="image" class="form-control">
					
				</div>

				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Enregistrer</button>


				
			</form>


	</div>



@stop