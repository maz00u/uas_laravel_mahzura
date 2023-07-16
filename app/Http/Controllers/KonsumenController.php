<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsumen;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Konsumen::all();
        return view('konsumen.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('konsumen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Konsumen::create([
            'id_konsumen_barang' => $request->id_konsumen_barang,
            'nama_konsumen' => $request->nama_konsumen,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat
        ]);

        return redirect('konsumen');
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
        $row = Konsumen::find($id);
        return view('konsumen.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Konsumen::findOrFail($id);
        $row->update([
            'id_konsumen_barang' => $request->id_konsumen_barang,
            'nama_konsumen' => $request->nama_konsumen,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat
        ]);

        return redirect('konsumen');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Konsumen::findOrFail($id);
        $row->delete();

        return redirect('konsumen');
    }
}
