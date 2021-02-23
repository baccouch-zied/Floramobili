<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'nom','description','image','image1'
    ];

    public function produit()
	{
		return $this->hasMany('App\produit');
	}

}
