@extends('layout.default')


@section('content')

	<div class="container">

		@if($errors->any())

		   <div class="alert alert-danger">
		   	
             <ul>
              	@foreach($errors->all() as $error)
              	 

              	  <li>{{$error}}</li>
              	  

              	@endforeach
              </ul>

		   </div>

		@endif
		
		<h4 class="text-info">Nouvelle Entreprise</h4>

		<form action="{{route('entreprises.store')}}" method="post" enctype="multipart/form-data">

			@csrf

			@method('post')

			<div class="form-group">
				<label for="nom"><strong>Nom:</strong></label>
				<input type="text" placeholder="Entrer le nom..." class="form-control" name="nom">
			</div>

			<div class="form-group">
                <label for="statut"><strong>Statut:</strong></label>
				<input type="text" placeholder="Entrer le statut..." class="form-control" name="statut">
			</div>

			<label for="pays"><strong>Pays:</strong></label>

			<select name="pays" class="form-control">
<option value="France" selected="selected">France </option>
<option value="Bahamas">Bahamas </option>
<option value="Bangladesh">Bangladesh </option>
<option value="Barbade">Barbade </option>
<option value="Bahrein">Bahrein </option>
<option value="Belgique">Belgique </option>
<option value="Bresil">Brésil </option>
<option value="Brunei">Brunei </option>
<option value="Bulgarie">Bulgarie </option>
<option value="Burkina_Faso">Burkina Faso </option>
<option value="Burundi">Burundi </option>



</select>
    <br>

       <div class="form-group">
 		<label for=""><strong>Logo:</strong></label>
 		<input type="file" name="logo" class="form-control">      	
       </div>

       <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Enregistrer</button>

		</form>

	</div>



@stop