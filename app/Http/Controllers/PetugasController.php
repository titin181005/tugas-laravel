<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $petugass = Db::table('petugass')->get();
        return view('petugas.index', compact('petugass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petugas.petugas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'jabatan' => 'required',
        'telp' => 'required|numeric|min:10',
        'alamat' => 'required',
    ]);

    $query = DB::table('petugass')->insert([
        'nama_petugas' => $request['nama'],
        'jabatan_petugas' => $request['jabatan'],
        'no_tlp_petugas' => $request['telp'],
        'alamat_petugas' => $request['alamat'],
    ]);
    
    return redirect()->route('petugas.index');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $petugass = DB::table('petugass')->where('id', $id)->get();
        return view('petugas.show', compact('petugass'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $petugass = DB::table('petugass')->where('id', $id)->get();
        return view('petugas.edit', compact('petugass'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'telp' => 'required|numeric|min:10',
            'alamat' => 'required',
        ]);

        $query = DB::table('petugass')->where('id', $id)->update([
            'nama_petugas' => $request['nama'],
            'jabatan_petugas' => $request['jabatan'],
            'no_tlp_petugas' => $request['telp'],
            'alamat_petugas' => $request['alamat'],
        ]);
        return redirect()->route('petugas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $petugass = DB::table('petugass')->where('id', $id)->delete();
        return redirect()->route('petugas.index');
    }
}