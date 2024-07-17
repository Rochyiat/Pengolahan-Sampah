<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laporans = Laporan::all();

        return view('laporans.index',compact('laporans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('laporans.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
           
            'iframe' => 'required|',
            'jenis_sampah' => 'required|string|max:255',
        ]);

        Laporan::create([
            'tanggal' => $request->tanggal,
           
            'iframe' => $request->iframe,
            'jenis_sampah' => $request->jenis_sampah,
        ]);

        return redirect()->route('laporans.index')->with('success', 'Laporan berhasil ditambahkan.');
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
        $laporan = Laporan::findOrFail($id);
        return view('laporans.edit', compact('laporan'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laporan $laporan)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'iframe' => 'required|',
            'jenis_sampah' => 'required|string|max:255',
        ]);

        $laporan->update([
            'tanggal' => $request->tanggal,
            'iframe' => $request->iframe,
            'jenis_sampah' => $request->jenis_sampah,
        ]);

        return redirect()->route('laporans.index')->with('success', 'Laporan berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laporan $laporan)
    {
        $laporan->delete();
        return redirect()->route('laporans.index')->with('success', 'Laporan berhasil dihapus.');
    }
}
