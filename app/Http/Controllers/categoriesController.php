<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\categorie;
use App\produit;


class categoriesController extends Controller
{
    public function index()
    {
      $categories= categorie::orderBy('created_at','desc')->paginate(3);

      return view('front.categorie',compact('categories'));

    }

    public function affCategorie($id)
    {
      $produits = DB::table('produits')->where('categorie_id' ,'=' ,$id)->get();
      $categorie=categorie::findOrFail($id); 
      return view('front.categorie',compact(['produits','categorie']));
    }
}
