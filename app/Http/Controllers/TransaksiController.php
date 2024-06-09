<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
   
    public function index()
    {
        $transaksi= Transaksi ::all();

        return view('transaksi.tampil', ['transaksi' => $transaksi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'transaction_date'=> 'required|min:5',
            'total_amount'=> 'required',
            'payment_status'=> 'required',
            'user_id'=> 'required',
            'tiket_id'=> 'required',
        ],
        [
            'transaction_date.required' => 'transaction_date harus diisi tidak boleh kosong',
            'total_amount' => 'total_amount diisi tidak boleh kosong',
            'payment_status.required' => 'payment_statusharus diisi tidak boleh kosong',
            'user_id.required' => 'user_id harus diisi tidak boleh kosong',
            'tiket_id.required' => 'tiket_id harus diisi tidak boleh kosong',
        ]);

        $transaksi = new Transaksi;
 
        $transaksi->transaction_date = $request->input('transaction_date');
        $transaksi->total_amount = $request->input('total_amount');
        $transaksi->payment_status = $request->input('payment_status');
        $transaksi->user_id = $request->input('user_id');
        $transaksi->tiket_id = $request->input('tiket_id');

        $transaksi->save();
 
        return redirect('/transaki');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaksi = transaksi::find($id);

        return view('transaksi.detail', ['transaksi' => $transaksi]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaksi = transaksi::find($id);

        return view('transaksi.edit', ['transaksi' => $transaksi]);
    }

    
    public function update(Request $request, transaksi $transaksi)
    {
        $request->validate([
           'transaction_date'=> 'required|min:5',
            'total_amount'=> 'required',
            'payment_status'=> 'required',
            'user_id'=> 'required',
            'tiket_id'=> 'required',
        ]);

        $transaksi->update($request->all());

        return redirect()->route('transaksi.index')
                         ->with('success', 'Konser updated successfully');
    }

    public function destroy(transaksi $transaki)
    {
        $transaksi->delete();

        return redirect()->route('transaksi.index')
                         ->with('success', 'Konser deleted successfully');
    }
}