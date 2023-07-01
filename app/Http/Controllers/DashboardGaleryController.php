<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class DashboardGaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.galery.index', [
            'galeries' => Galery::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.galery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:galeries',
            'imggallery' => 'required|image|file|max:10240'
        ]);

        if($request->file('imggallery')){
            $validatedData['imggallery'] = $request->file('imggallery')->store('galery-images');
        }

        Galery::create($validatedData);

        return redirect('/dashboard/galery')->with('success', 'New photo has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(Galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $galery)
    {
       

        return view('dashboard.galery.edit', [
            'galery' => $galery
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galery $galery)
    {
        $rules = [
            'title' => 'required|max:255',
            'imggallery' => 'image|file|max:10240'
        ];

        

        if($request->slug != $galery->slug){
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if($request->file('imggallery')){
            
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['imggallery'] = $request->file('imggallery')->store('galery-images');
        }


     

        Galery::where('id', $galery->id)
            ->update($validatedData);

        return redirect('/dashboard/galery')->with('success', 'Photo has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $galery)
    {
        if($galery->imggallery) {
                Storage::delete($galery->imggallery);
            }

        Galery::destroy($galery->id);

        return redirect('/dashboard/galery')->with('success', 'Post has been deleted');
    }
}
