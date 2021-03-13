@extends('layout.default')



@section('content')

    <div class="container">
    	<h4 class="text-success">Modification Entreprise</h4>

    	<form action="{{route('entreprises.update',$entreprise->id)}}" method="post" class="form my-2">

    		@csrf

    		@method('PUT')

    		<div class="form-group">

    			<label for="nom"><strong>Nom:</strong></label>

    			<input type="text" class="form-control" placeholder="Entrer le nom..."value="{{$entreprise->nom}}" name="nom">
    			
    		</div>

    		<div class="form-group">

    			<label for="nom"><strong>Statut:</strong></label>

    			<input type="text" class="form-control" placeholder="Entrer le Statut..."value="{{$entreprise->statut}}" name="statut" >
    			
    		</div>

    		<label for=""><strong>Pays:</strong></label>

    		<select name="pays" class="form-control" >

    			@foreach($entreprise->getPaysOptions() as $key=>$value)

    			<option value="{{$key}}" {{$entreprise->pays == $value ? 'selected': ''}}>{{$value}}</option>


    			@endforeach

    		</select> <br>

    		<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Valider Modifications</button>
    		
    	</form>
    </div>

@stop