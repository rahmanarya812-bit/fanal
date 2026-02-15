<?php

namespace App\Http\Controllers;


use App\Models\aset;
use App\Models\pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'pembeli' => pembeli::all(),
        ];

        return view('pembeli.pembeli', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $aset = aset::all();
        return view('pembeli.pembeli_create', compact('aset'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'kode_pembeli' => $request->kode_pembeli,
            'nama' => $request->nama,
            'aset' => $request->aset,
            'jenis_kelamin' => $request->jenis_kelamin,
        ];

        pembeli::create($data);
        return redirect('/pembeli')->with('success', 'data berhasil di simpan');
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
    public function edit($id)
    {
        $data = [
            'pembeli' => pembeli::where('id', $id)->first(),
            'aset' => aset::all(),
        ];

        return view('pembeli.pembeli_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $id_pembeli = pembeli::find($id);

        $data = [
            'kode_pembeli' => $request->kode_pembeli,
            'nama' => $request->nama,
            'aset' => $request->aset,
            'jenis_kelamin' => $request->jenis_kelamin,
        ];

        $id_pembeli->update($data);
        return redirect('/pembeli')->with('success', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        pembeli::where('id', $id)->delete();
        return redirect('/pembeli')->with('success', 'data berhasil dihapus');
    }
}
