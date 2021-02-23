<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\produit;
use App\categorie;

class SeulProduit extends Controller
{
    public function index()
    {
      $produits= produit::orderBy('created_at','desc')->paginate(4);
      $categorie= categorie::orderBy('created_at','desc')->paginate(3);

      return view('front.produit',compact(['produits','categorie']));

    }

    public function affProduit($id)
    {
      $produits = DB::table('produits')->where('id' ,'=' ,$id)->get();
      $categorie= categorie::all();
      return view('front.produit',compact('produits'));
    }
}
