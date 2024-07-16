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
        $kecamatans = [
            'Andir', 'Astana Anyar', 'Antapani', 'Arcamanik', 'Babakan Ciparay', 'Bandung Kidul', 'Bandung Kulon', 
            'Bandung Wetan', 'Batununggal', 'Bojongloa Kaler', 'Bojongloa Kidul', 'Buahbatu', 'Cibeunying Kaler', 
            'Cibeunying Kidul', 'Cibiru', 'Cicendo', 'Cidadap', 'Cinambo', 'Coblong', 'Gedebage', 'Kiaracondong', 
            'Lengkong', 'Mandalajati', 'Panyileukan', 'Rancasari', 'Regol', 'Sukajadi', 'Sukasari', 'Sumur Bandung', 
            'Ujungberung'
        ];
        return view('laporans.create', compact('kecamatans'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'lokasi' => 'required|string|max:255',
            'jenis_sampah' => 'required|string|max:255',
        ]);

        Laporan::create([
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
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
    public function edit(Laporan $laporan)
    {
        $kecamatans = [
            'Andir', 'Astana Anyar', 'Antapani', 'Arcamanik', 'Babakan Ciparay', 'Bandung Kidul', 'Bandung Kulon', 
            'Bandung Wetan', 'Batununggal', 'Bojongloa Kaler', 'Bojongloa Kidul', 'Buahbatu', 'Cibeunying Kaler', 
            'Cibeunying Kidul', 'Cibiru', 'Cicendo', 'Cidadap', 'Cinambo', 'Coblong', 'Gedebage', 'Kiaracondong', 
            'Lengkong', 'Mandalajati', 'Panyileukan', 'Rancasari', 'Regol', 'Sukajadi', 'Sukasari', 'Sumur Bandung', 
            'Ujungberung'
        ];
        return view('laporans.edit', compact('laporan', 'kecamatans'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laporan $laporan)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'lokasi' => 'required|string|max:255',
            'jenis_sampah' => 'required|string|max:255',
        ]);

        $laporan->update([
            'tanggal' => $request->tanggal,
            'lokasi' => $request->lokasi,
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
