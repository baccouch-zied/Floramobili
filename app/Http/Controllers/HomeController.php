<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorie;
use App\produit;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categorie= categorie::all();
        $produit= produit::all();
  
        return view('back.index',compact(['categorie','produit']));
    }
}
