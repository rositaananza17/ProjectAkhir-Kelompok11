<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profil;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $idUser = Auth::id();

        $profil = profil::where('users_id', $idUser)->first();

        return view('profil.update', ["profil" => $profil]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'ttl' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
        ]);

        Profil::where('id', $id)
            ->update(
                [
                    'ttl' => $request->input('ttl'),
                    'gender' => $request->input('gender'),
                    'alamat' => $request->input('alamat'),
                ]
            );

        return redirect('profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
