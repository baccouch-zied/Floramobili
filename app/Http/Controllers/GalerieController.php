<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galerie;

class GalerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeries= galerie::orderBy('created_at','desc')->paginate(5);
        return view('back.ListGaleries', compact('galeries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.addGalerie');

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
            'type'    =>  'required',
            'image'         =>  'required'

        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('images'), $new_name);

        $form_data = array(
            'type'       =>   $request->type,
            'image'            =>   $new_name

        );

        galerie::create($form_data);

        return redirect('galerie')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Galerie $galerie)
    {
        $galeries= galerie::all();
        return view('back.editGalerie', compact('galerie'));
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
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'image'    =>  'image|max:2048'

            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }

        else
        {
            $request->validate([
                'type'    =>  'required'
            ]);
        }
  

        $form_data = array(
            'image'            =>   $image_name,
            'type'        =>   $request->type

        );
  
        galerie::whereId($id)->update($form_data);

        return redirect('galerie')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galerie $galerie)
    {
        $galerie->delete();
        return redirect('/galerie');
    }
}
