<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardJadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.jadwal.index', [
            'jadwal' => Jadwal::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jadwal.create');
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
            'slug' => 'required|unique:jadwals',
            'imgjadwal' => 'required|mimes:jpeg,png,jpg,pdf|file|max:10240'
        ]);

        if($request->file('imgjadwal')){
            $validatedData['imgjadwal'] = $request->file('imgjadwal')->store('jadwal-images');
        }

        Jadwal::create($validatedData);

        return redirect('/dashboard/jadwal')->with('success', 'Jadwal Telah Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        return view('dashboard.jadwal.edit', [
            'jadwal' => $jadwal
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $rules = [
            'title' => 'required|max:255',
            'imgjadwal' => 'required|mimes:jpeg,png,jpg,pdf|file|max:10240'
        ];

        

        if($request->slug != $jadwal->slug){
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if($request->file('imgjadwal')){
            
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['imgjadwal'] = $request->file('imgjadwal')->store('jadwal-images');
        }


     

        Jadwal::where('id', $jadwal->id)
            ->update($validatedData);

        return redirect('/dashboard/jadwal')->with('success', 'Jadwal Telah Di-Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        if($jadwal->imgjadwal) {
                Storage::delete($jadwal->imgjadwal);
            }

        Jadwal::destroy($jadwal->id);

        return redirect('/dashboard/jadwal')->with('success', 'Jadwal Telah Dihapus');
    }
}
