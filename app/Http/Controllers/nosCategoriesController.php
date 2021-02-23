<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\categorie;
use App\produit;

class nosCategoriesController extends Controller
{
    public function index()
    {
      $categories= categorie::orderBy('created_at','desc')->paginate(6);
      $produit= produit::orderBy('created_at','desc')->paginate(6);

      return view('front.nosCategories',compact(['categories','produit']));

    }
}
