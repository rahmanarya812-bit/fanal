<?php

namespace App\Http\Controllers;

use App\Models\aset;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'aset' => aset::all(),
        ];
        return view('aset.aset', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aset.aset_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nama_aset' => $request->nama_aset,
        ];
        aset::create($data);
        return redirect('/aset')->with('success', 'data berhasil disimpan!');
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
            'aset' => aset::where('id', $id)->first(),
        ];

        return view('aset.aset_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $id_aset = aset::find($id);
        $data = [
            'nama_aset' => $request->nama_aset,
        ];
        $id_aset->update($data);
        return redirect('/aset')->with('success', 'data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        aset::where('id', $id)->delete();

        return redirect('/aset')->with('success', 'data berhasil dihapus!');
    }
}
