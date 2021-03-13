{{-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>
		body{
			text-align: center;
		}
	</style>

	@livewireStyles

</head>
<body>

	<h1>Je serai un Milliardaire</h1>

	<livewire:counter />


	@livewireScripts
	
</body>
</html> --}}

@extends('layout.default')


@section('content')

<div>
	<livewire:counter />
</div>
@stop

