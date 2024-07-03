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
        $laporans = Laporan::all();
        return view('laporans.create', compact('laporans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'lokasi' => 'required|string|max:255',
            'jenis_sampah' => 'required|string|in:Organik,Non Organik,Bahaya',
        ]);

        Laporan::create([
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
            'jenis_sampah' => $request->jenis_sampah,
        ]);

        return redirect()->route('laporans.index')->with('success', 'Laporan berhasil dibuat');
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
    public function update(Request $request, $id)
{
    $request->validate([
        'tanggal' => 'required|date',
        'lokasi' => 'required|string|max:255',
        'jenis_sampah' => 'required|string|in:Organik,Non Organik,Bahaya',
    ]);

    $laporan = Laporan::findOrFail($id);
    $laporan->tanggal = $request->input('tanggal');
    $laporan->lokasi = $request->input('lokasi');
    $laporan->jenis_sampah = $request->input('jenis_sampah');
    $laporan->save();

    return redirect()->route('laporans.index')->with('success', 'Laporan berhasil diperbarui');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->delete();
    
        return redirect()->route('laporans.index')->with('success', 'Data berhasil dihapus.');
    }
}