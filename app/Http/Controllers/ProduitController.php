<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produit;
use App\categorie;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits= produit::orderBy('created_at','desc')->paginate(5);
        return view('back.ListProduits', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= categorie::all();
        return view('back.addProduit', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom'    =>  'required',
            'prix'     =>  'required',
            'description'     =>  'required',
            'url'     =>  'required',
            'categorie'     =>  'required',
            'image'         =>  'required|image|max:2048',
            'image1'         =>  'required|image|max:2048',
            'image2'         =>  'required|image|max:2048',
            'image'         =>  'required|image|max:2048'


        ]);

        $image = $request->file('image');
        $image1 = $request->file('image1');
        $image2 = $request->file('image2');
        $image3 = $request->file('image3');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $new_name1 = rand() . '.' . $image1->getClientOriginalExtension();
        $new_name2 = rand() . '.' . $image2->getClientOriginalExtension();
        $new_name3 = rand() . '.' . $image3->getClientOriginalExtension();

        $image->move(public_path('images'), $new_name);
        $image1->move(public_path('images'), $new_name1);
        $image2->move(public_path('images'), $new_name2);
        $image3->move(public_path('images'), $new_name3);

        $form_data = array(
            'nom'       =>   $request->nom,
            'prix'        =>   $request->prix,
            'description'        =>   $request->description,
            'url'        =>   $request->url,
            'categorie'        =>   $request->categorie,
            'image'            =>   $new_name,
            'image1'            =>   $new_name1,
            'image2'            =>   $new_name2,
            'image3'            =>   $new_name3

        );

        produit::create($form_data);

        return redirect('produit')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        return view('back.showProduit',compact('produit'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        $produits= produit::all();
        return view('back.editProduit', compact('produit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image_name1 = $request->hidden_image1;
        $image_name2 = $request->hidden_image2;
        $image_name3 = $request->hidden_image3;

        $image = $request->file('image');
        $image1 = $request->file('image1');
        $image2 = $request->file('image2');
        $image3 = $request->file('image3');

        if(($image != '')&&($image1 != '')&&($image2 != '')&&($image3 != ''))
        {
            $request->validate([
                'nom'    =>  'required',
                'prix'     =>  'required',
                'description'        =>  'required',
                'url'     =>  'required',

                'image'    =>  'image|max:2048',
                'image1'    =>  'image|max:2048',
                'image2'    =>  'image|max:2048',
                'image3'    =>  'image|max:2048'


            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image_name1 = rand() . '.' . $image1->getClientOriginalExtension();
            $image_name2 = rand() . '.' . $image2->getClientOriginalExtension();
            $image_name3 = rand() . '.' . $image3->getClientOriginalExtension();

            $image->move(public_path('images'), $image_name);
            $image1->move(public_path('images'), $image_name1);
            $image2->move(public_path('images'), $image_name2);
            $image3->move(public_path('images'), $image_name3);

        }
        else
        {
            $request->validate([
                'nom'    =>  'required',
                'prix'     =>  'required',
                'description'     =>  'required',
                'url' => 'required'
            ]);
        }

        $form_data = array(
            'nom'       =>   $request->nom,
            'prix'        =>   $request->prix,
            'description'        =>   $request->description,
            'url'        =>   $request->description,

            'image'            =>   $image_name,
            'image1'            =>   $image_name1,
            'image2'            =>   $image_name2,
            'image3'            =>   $image_name3

        );
  
        produit::whereId($id)->update($form_data);

        return redirect('produit')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect('/produit');
    }
}
