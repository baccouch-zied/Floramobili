<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\categorie;
use App\produit;
class dashController extends Controller
{
    public function index()
    {
        $categorie= categorie::orderBy('created_at','desc')->paginate(6);
        $produit= produit::orderBy('created_at','desc')->paginate(6);
  
        return view('back.index',compact(['categorie','produit']));
    }
}
