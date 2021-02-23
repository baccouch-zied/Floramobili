<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galerie;
use App\categorie;

class GalerieFrontController extends Controller
{
    public function index()
    {
      $galeries= galerie::all();
      $categories= categorie::orderBy('created_at','desc')->paginate(4);

      return view('front.galerie',compact(['galeries','categories']));

    }
}
