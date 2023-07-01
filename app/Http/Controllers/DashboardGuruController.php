<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.guru.index', [
            'gurus' => Guru::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.guru.create');
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
            'slug' => 'required|unique:gurus',
            'desc' => 'required|max:255',
            'imgguru' => 'required|image|file|max:10240'
        ]);

        if($request->file('imgguru')){
            $validatedData['imgguru'] = $request->file('imgguru')->store('guru-images');
        }

        Guru::create($validatedData);

        return redirect('/dashboard/guru')->with('success', 'New teacher has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        return view('dashboard.guru.edit', [
            'guru' => $guru
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
         $rules = [
            'name' => 'required|max:255',
            'desc' => 'required|max:255',
            'imgguru' => 'image|file|max:10240'
        ];

        if($request->slug != $guru->slug){
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if($request->file('imgguru')){
            
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['imgguru'] = $request->file('imgguru')->store('galery-images');
        }

        Guru::where('id', $guru->id)
            ->update($validatedData);

        return redirect('/dashboard/guru')->with('success', 'Teacher has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        if($guru->imgguru) {
                Storage::delete($guru->imgguru);
            }

        Guru::destroy($guru->id);

        return redirect('/dashboard/guru')->with('success', 'Teacher has been deleted');
    }
}
