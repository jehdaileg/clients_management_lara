<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        //
        $entreprises = Entreprise::paginate(5);

        return view('entreprises.index', compact('entreprises'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

      //  $this->authorize('create', EntreprisePoliciy::class);

        return view('entreprises.create');

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
       
        $entreprise = Entreprise::create($this->validator());

        $this->storeLogo($entreprise);

        return redirect()->route('entreprises.index')->with('success', 'Félicitations!!! Entreprise enregistrée avec Succès 😇');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $entreprise)

    {
        //
        return view('entreprises.show', compact('entreprise'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
        //
        return view('entreprises.edit', compact('entreprise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(Entreprise $entreprise)
    {
        //

       // $this->authorize('update', $entreprise);

        $entreprise->update($this->validator());

        return redirect()->route('entreprises.index')->with('success', 'Entreprise Modifiée avec Succès 😇');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entreprise $entreprise)
    {
        //

        $entreprise->delete();

        return redirect()->route('entreprises.index')->with('success', "Félicitations!!! Entreprise supprimée avec Succès !😇");
    }

    public function validator()
    {

        return   request()->validate([

            'nom'=>'required|min:2',

            'statut'=>'required|min:2',

            'pays'=>'required',

            'logo'=>'sometimes|image'

        ]);

    }

    public function storeLogo(Entreprise $entreprise)
    {

        if(request('logo')){

            $entreprise->update([

                'logo'=>request('logo')->store('logos_entreprises', 'public'),

            ]);

        }

    }


    public function search(Request $request)
    {
        $to_search = $request->get('to_search');

        $entreprises = Entreprise::where('nom', 'like', '%'.$to_search.'%')->get();

        return view('entreprises.index', compact('entreprises'));
    }
}
