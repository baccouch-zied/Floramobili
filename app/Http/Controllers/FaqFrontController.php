<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\faq;
use App\categorie;


class FaqFrontController extends Controller
{
    public function index()
    {
      $faqs= faq::orderBy('created_at','desc')->paginate(4);
      $categories= categorie::orderBy('created_at','desc')->paginate(4);

      return view('front.faq',compact(['faqs','categories']));

    }
}
