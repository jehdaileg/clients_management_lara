<div>
    {{-- Be like water. --}}


    <input type="number" wire:model="firstNumber">

    <input type="number" wire:model="secondNumber">

    <span>{{ $firstNumber * $secondNumber }}</span>


   <h5>Recherche des clients</h5>

    <input type="text" wire:model="search">

    	@foreach($clients as $client)

    	{{$client}}

    	@endforeach





</div>
