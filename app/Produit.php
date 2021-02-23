<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'nom', 'prix', 'description','url','image','image1','image2','image3'
    ];

    public function categorie()
	{
		return $this->belongsToMany('App\categorie');
	}
}
