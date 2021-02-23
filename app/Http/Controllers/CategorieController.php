<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use App\categorie;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= categorie::orderBy('created_at','desc')->paginate(5);
        return view('back.ListCategorie', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.addCategorie');

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
            'description'     =>  'required',
            'image'         =>  'required',
            'image1'         =>  'required'


        ]);

        $image = $request->file('image');
        $image1 = $request->file('image1');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $new_name1 = rand() . '.' . $image1->getClientOriginalExtension();

        $image->move(public_path('images'), $new_name);
        $image1->move(public_path('images'), $new_name1);

        $form_data = array(
            'nom'       =>   $request->nom,
            'description'        =>   $request->description,
            'image'            =>   $new_name,
            'image1'            =>   $new_name1,

        );

        categorie::create($form_data);

        return redirect('categorie')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('back.showCategorie',compact('categorie'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        $categories= categorie::all();
        return view('back.editCategorie', compact('categorie'));
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

        $image = $request->file('image');
        $image1 = $request->file('image1');

        if(($image != '')&&($image1 !=''))
        {
            $request->validate([
                'nom'    =>  'required',
                'description'        =>  'required',
                'image'    =>  'image|max:2048',
                'image1'    =>  'image|max:2048'


            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image_name1 = rand() . '.' . $image1->getClientOriginalExtension();

            $image->move(public_path('images'), $image_name);
            $image1->move(public_path('images'), $image_name1);

        }
        else
        {
            $request->validate([
                'nom'    =>  'required',
                'description' => 'required'
            ]);
        }

        $form_data = array(
            'nom'       =>   $request->nom,
            'description'        =>   $request->description,
            'image'            =>   $image_name,
            'image1'            =>   $image_name1

        );
  
        categorie::whereId($id)->update($form_data);

        return redirect('categorie')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();
        return redirect('/categorie');
    }
}
