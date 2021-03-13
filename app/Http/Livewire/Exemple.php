<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;

class Exemple extends Component
{

	public $firstNumber = 0;
	public $secondNumber = 0;

	public $search;

    public function render()

    {
    	$element = '%'. $this->search .'%';

    	$clients = Client::where('nom', 'like', $element)->get();

        return view('livewire.exemple', compact('clients'));
    }
}
