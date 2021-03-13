<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;

class Counter extends Component
{
	public $first_number;
	public $second_number;

	public $search;

    public function render()
    {
    	$serc = '%'. $this->search . '%';
    	$clients = Client::where('nom', 'like', $serc)->get();
        return view('livewire.counter',[
        	'clients' => $clients

        ]);
    }
}
