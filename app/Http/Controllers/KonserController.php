<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\konser;

class KonserController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        $konser = konser ::all();

        return view('konser.tampil', ['konser' => $konser]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('konser.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'event'=> 'required|min:5',
            'artis'=> 'required',
            'venue'=> 'required',
            'date'=> 'required'
        ],
        [
            'event.required' => 'event harus diisi tidak boleh kosong',
            'artis.required' => 'artis  harus diisi tidak boleh kosong',
            'venue.required' => 'venue harus diisi tidak boleh kosong',
            'date.required' => 'date harus diisi tidak boleh kosong'
        ]);

        $konser = new konser;
 
        $konser->event= $request->input('event');
        $konser->artis = $request->input('artis');
        $konser->venue = $request->input('venue');
        $konser->date = $request->input('date');
        
        $konser->save();
 
        return redirect('/konser');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $konser = konser::find($id);

        return view('konser.detail', ['konser' => $konser]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $konser = konser::find($id);

        return view('konser.edit', ['konser' => $konser]);
    }

    
    public function update(Request $request, Konser $konser)
    {
        $request->validate([
            'event' => 'required',
            'artis' => 'required',
            'venue' => 'required',
            'date' => 'required|date',
        ]);

        $konser->update($request->all());

        return redirect()->route('konser.index')
                         ->with('success', 'Konser updated successfully');
    }

    public function destroy(Konser $konser)
    {
        $konser->delete();

        return redirect()->route('konser.index')
                         ->with('success', 'Konser deleted successfully');
    }
}