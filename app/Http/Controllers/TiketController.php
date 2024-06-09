<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        $tiket = Tiket ::all();

        return view('tiket.tampil', ['tiket' => $tiket]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tiket.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'price'=> 'required|min:5',
            'seat_number'=> 'required',
            'availability_status'=> 'required',
            'konser_id'=> 'required'
        ],
        [
            'price.required' => 'price harus diisi tidak boleh kosong',
            'seat_number.required' => 'seat_number  harus diisi tidak boleh kosong',
            'availability_status.required' => 'availability_status harus diisi tidak boleh kosong',
            'konser_id.required' => 'konser_id harus diisi tidak boleh kosong'
        ]);

        $tiket = new Tiket;
 
        $tiket->price= $request->input('price');
        $tiket->seat_number = $request->input('seat_number');
        $tiket->availability_status = $request->input('availability_status');
        $tiket->konser_id = $request->input('konser_id');
        
        $tiket->save();
 
        return redirect('/tiket');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tiket = Tiket::find($id);

        return view('tiket.detail', ['tiket' => $tiket]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tiket = Tiket::find($id);

        return view('tiket.edit', ['tiket' => $tiket]);
    }

    
    public function update(Request $request, Tiket $tiket)
    {
        $request->validate([
            'price' => 'required',
            'seat_number' => 'required',
            'availability_status' => 'required',
        ]);

        $tiket->update($request->all());

        return redirect()->route('tiket.index')
                         ->with('success', 'Tiket updated successfully');
    }

    public function destroy(Tiket $tiket)
    {
        $tiket->delete();

        return redirect()->route('tiket.index')
                         ->with('success', 'Tiket deleted successfully');
    }
}