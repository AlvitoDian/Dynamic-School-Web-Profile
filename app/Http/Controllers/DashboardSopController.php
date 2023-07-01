<?php

namespace App\Http\Controllers;

use App\Models\Sop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardSopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.sop.index', [
            'sops' => Sop::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sop.create');
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
            'slug' => 'required|unique:sops',
            'desc' => 'required|max:255',
            'imgsop' => 'required|image|file|max:10240'
        ]);

        if($request->file('imgsop')){
            $validatedData['imgsop'] = $request->file('imgsop')->store('sop-images');
        }

        Sop::create($validatedData);

        return redirect('/dashboard/sop')->with('success', 'SOP Baru telah ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sop  $sop
     * @return \Illuminate\Http\Response
     */
    public function show(Sop $sop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sop  $sop
     * @return \Illuminate\Http\Response
     */
    public function edit(Sop $sop)
    {
        return view('dashboard.sop.edit', [
            'sop' => $sop
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sop  $sop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sop $sop)
    {
        $rules = [
            'title' => 'required|max:255',
            'desc' => 'required',
            'imgsop' => 'image|file|max:10240'
        ];

        if($request->slug != $sop->slug){
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if($request->file('imgsop')){
            
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['imgsop'] = $request->file('imgsop')->store('sop-images');
        }

        Sop::where('id', $sop->id)
            ->update($validatedData);

        return redirect('/dashboard/sop')->with('success', 'Sop has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sop  $sop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sop $sop)
    {
        if($sop->imgsop) {
                Storage::delete($sop->imgsop);
            }

        Sop::destroy($sop->id);

        return redirect('/dashboard/sop')->with('success', 'Teacher has been deleted');
    }
}
