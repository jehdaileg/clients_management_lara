@extends('layout.default')

@section('content')

 <div class="container">

 	@if($message = Session::get('success'))

 		<div class="alert alert-success">{{$message}}</div>

 	@endif

 	<div class="float-right">
 		
 		<form action="{{ route('searchEntreprises') }}" class="form-inline" method="get">
 			@csrf
 			@method('GET')
 			<input type="text" placeholder="Rechercher..." class="form-control" name="to_search"> &nbsp;
 			<button type="submit" class="btn btn-warning"><i class="fa fa-search"></i></button>

 		</form>
 	</div>

 	   <div class="tableau my-2">
 	   	
 	   		<h3 class="text-info my-2">Entreprises</h3>

 	<a href="{{route('entreprises.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> 
 	</a>

 	<table class="table table-bordered table-stripped my-3">
 		
 		<thead>
 			<tr>
 				<th>#</th>
 				<th>Nom</th>
 				<th>Statut</th>
 				<th>Pays</th>
 				<th>Actions</th>
 			</tr>

 			<tbody>

 				@foreach($entreprises as $entreprise)
 				<tr>
 					<td>{{$entreprise->id}}</td>

 					<td><a href="{{route('entreprises.show', $entreprise->id)}}">{{$entreprise->nom}}</a></td>
 					<td>{{$entreprise->statut}}</td>

 					<td>{{$entreprise->pays}}</td>

 					<td class="d-flex">

 						

 						<a href="{{route('entreprises.edit', $entreprise->id)}}" class="btn btn-success"><span class="fa fa-edit"></span></a> &nbsp;



 						<form action="{{route('entreprises.destroy', $entreprise->id)}}" method="post">
 							
 							@csrf

 							@method('DELETE')

 							<button type="submit" class="btn btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cet élémént?');"><span class="fa fa-trash-alt"></span></button>
 						</form>
 						
 					</td>
 				</tr>

 				@endforeach

 			</tbody>
 			
 		</thead>

 		<tbody>
 			

 		</tbody>

 	</table>

 	 <div class="page">
 	 	
 	 </div>

 	   </div>



 </div>


@stop