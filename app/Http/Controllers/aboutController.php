<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\categorie;
use App\produit;

class aboutController extends Controller
{
    public function index()
    {
      $categories= categorie::orderBy('created_at','desc')->paginate(4);
      return view('front.about',compact('categories'));

    }
}
