<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardStrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.struktur.index', [
            'struktur' => Struktur::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.struktur.create');
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
            'slug' => 'required|unique:strukturs',
            'imgstruktur' => 'required|image|file|max:10240'
        ]);

        if($request->file('imgstruktur')){
            $validatedData['imgstruktur'] = $request->file('imgstruktur')->store('struktur-images');
        }

        Struktur::create($validatedData);

        return redirect('/dashboard/struktur')->with('success', 'Struktur Telah Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function show(Struktur $struktur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function edit(Struktur $struktur)
    {
        return view('dashboard.struktur.edit', [
            'struktur' => $struktur
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Struktur $struktur)
    {
        $rules = [
            'title' => 'required|max:255',
            'imgstruktur' => 'image|file|max:10240'
        ];

        

        if($request->slug != $struktur->slug){
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if($request->file('imgstruktur')){
            
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['imgstruktur'] = $request->file('imgstruktur')->store('struktur-images');
        }

        Struktur::where('id', $struktur->id)
            ->update($validatedData);

        return redirect('/dashboard/struktur')->with('success', 'Struktur Telah Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Struktur $struktur)
    {
        if($struktur->imgstruktur) {
                Storage::delete($struktur->imgstruktur);
            }

        Struktur::destroy($struktur->id);

        return redirect('/dashboard/struktur')->with('success', 'Struktur telah dihapus');
    }
}
