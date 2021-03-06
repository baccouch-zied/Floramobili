<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produit;
use App\categorie;
use App\slider;


class NewController extends Controller
{    
    public function index()
    {
      $produits= produit::all();
      $categories= categorie::all();
      $sliders= slider::all();

      return view('front.index',compact(['produits','categories','sliders']));

    }

}
