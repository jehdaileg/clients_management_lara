<?php

namespace App\Models;

use App\Models\Entreprise;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

   // protected $guarded = [];

    protected $guarded = [];

    public function entreprise()

    {

    	return $this->belongsTo('App\Models\Entreprise');

    }

    /*Gestion des attributs du Select */
    
    public function getGenreOptions()

    {
    	return [

    		'M'=>'Masculin', 'F'=>'Féminin'

    	];
    }

   public function getGenreAttribute($attributes)

   {
   	 return [

   	 	'M'=>'Masculin', 'F'=>'Féminin'

   	 ][$attributes];
   }

}
