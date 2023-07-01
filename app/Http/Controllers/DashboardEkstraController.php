<?php

namespace App\Http\Controllers;

use App\Models\Ekstra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardEkstraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('dashboard.ekstra.index', [
            'ekstras' => Ekstra::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ekstra.create');
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
            'name' => 'required|max:255',
            'slug' => 'required|unique:ekstras',
            'desc' => 'required|max:255',
            'imgekstra' => 'required|image|file|max:10240'
        ]);

        if($request->file('imgekstra')){
            $validatedData['imgekstra'] = $request->file('imgekstra')->store('ekstra-images');
        }

        Ekstra::create($validatedData);

        return redirect('/dashboard/ekstra')->with('success', 'New extracurricular has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ekstra  $ekstra
     * @return \Illuminate\Http\Response
     */
    public function show(Ekstra $ekstra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ekstra  $ekstra
     * @return \Illuminate\Http\Response
     */
    public function edit(Ekstra $ekstra)
    {
        return view('dashboard.ekstra.edit', [
            'ekstra' => $ekstra
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ekstra  $ekstra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ekstra $ekstra)
    {
        $rules = [
            'name' => 'required|max:255',
            'desc' => 'required|max:255',
            'imgekstra' => 'image|file|max:10240'
        ];

        

        if($request->slug != $ekstra->slug){
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if($request->file('imgekstra')){
            
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['imgekstra'] = $request->file('imgekstra')->store('ekstra-images');
        }

        Ekstra::where('id', $ekstra->id)
            ->update($validatedData);

        return redirect('/dashboard/ekstra')->with('success', 'Extracurricular has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ekstra  $ekstra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ekstra $ekstra)
    {
        if($ekstra->imgekstra) {
                Storage::delete($ekstra->imgekstra);
            }

        Ekstra::destroy($ekstra->id);

        return redirect('/dashboard/ekstra')->with('success', 'Extracurricular has been deleted');
    }
}
