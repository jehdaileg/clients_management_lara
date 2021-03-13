<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Entreprise;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

         //$this->authorize('is-admin');

         
        //
        $clients = Client::all();

        return view('clients.index', compact('clients'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
        //
        $entreprises = Entreprise::all();

        return view('clients.create', compact('entreprises'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //

       $client = Client::create($this->validator());

       $this->storageImage($client);

        return redirect()->route('clients.index')->with('success', 'Félicitations!!!Client créé avec Succès ! 😇');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //

        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //

        $entreprises = Entreprise::all();

        return view('clients.edit', compact('client', 'entreprises'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
        

        $client->update($this->validator());

        return redirect()->route('clients.index')->with('success', 'Félicitations!!!Client modifié avec succès !😇'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //

        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Félicitations!!!Client supprimé avec succès !😇');
        
    }

    /*Fonction qui fait la validation des champs du formulaire */

    public function validator()
    {

        return  request()->validate([

            'nom'=>'required|min:2',
            'prenom'=>'required|min:2',
            'email'=>'required|email',
            'genre'=>'required',
            'entreprise_id'=>'required',
            'image'=>'sometimes|image|required'

        ]);

    }

    /* Fonction qui enregistre l'image dans la BDD et dans le storage */

    public function storageImage(Client $client)
    {

        if(request('image'))
        {
            $client->update([

                'image'=>request('image')->store('avatars_clients', 'public'),

            ]);

        }

    }

    public function search (Request $request){

        $to_search = $request->get('to_search'); 
        
        $clients = Client::where('nom', 'like', '%'. $to_search. '%')->get();

        return view('clients.index', compact('clients'));

        
    }
}
