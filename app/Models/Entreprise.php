<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    //protected $fillable = ['nom', 'statut', 'pays']; 

    protected $guarded = [];

/* Les deux fonctions pour le composant Select */

    public function getPaysOptions()

    {
    	return [

    		'France'=>'France', 'Bahamas'=>'Bahamas', 'Bangladesh'=>'Bangladesh',

    		'Barbade'=>'Barbade', 'Bahrein'=>'Bahrein', 'Belgique'=>'Belgique',

    		'Bresil'=>'Brésil', 'Brunei'=>'Brunei', 'Bulgarie'=>'Bulgarie',

    		'Burkina_Faso'=>'Burkina_Faso', 'Burundi'=>'Burundi'

    	];
    }

    public function getPaysAttribute($attributes)

    {
    	return [

    		'France'=>'France', 'Bahamas'=>'Bahamas', 'Bangladesh'=>'Bangladesh',

    		'Barbade'=>'Barbade', 'Bahrein'=>'Bahrein', 'Belgique'=>'Belgique',

    		'Bresil'=>'Brésil', 'Brunei'=>'Brunei', 'Bulgarie'=>'Bulgarie',

    		'Burkina_Faso'=>'Burkina_Faso', 'Burundi'=>'Burundi'

    	][$attributes];
    }

    /*Question de clé étrangère */

    public function clients()

    {

        return $this->hasMany('App\Models\Client');
        
    }

}
