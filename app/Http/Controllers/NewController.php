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
      $produits= produit::orderBy('created_at','desc')->paginate(4);
      $categories= categorie::orderBy('created_at','desc')->paginate(3);
      $sliders= slider::orderBy('created_at','desc')->paginate(5);

      return view('front.index',compact(['produits','categories','sliders']));

    }

}
