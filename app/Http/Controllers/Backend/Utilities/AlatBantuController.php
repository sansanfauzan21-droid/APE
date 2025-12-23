<?php

namespace App\Http\Controllers\Backend\Utilities;

use App\Http\Controllers\Controller;
use App\Models\Backend\Utilities\AlatBantu;
use Illuminate\Http\Request;

class AlatBantuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alatBantus = AlatBantu::orderBy('id')->paginate(10);
        return view('backend.utilities.alat-bantu.index', compact('alatBantus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.utilities.alat-bantu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_peralatan_software' => 'required|string|max:255',
            'merk_spesifikasi' => 'required|string|max:255',
            'tipe' => 'nullable|string|max:255',
            'nomor_alat' => 'required|string|max:255',
            'tanggal_masa_kalibrasi' => 'nullable|string|max:255',
            'sisa_masa_kalibrasi' => 'nullable|string|max:255',
        ]);

        AlatBantu::create($request->all());

        return redirect()->route('alat-bantu.index')->with('success', 'Data alat bantu berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AlatBantu $alatBantu)
    {
        return view('backend.utilities.alat-bantu.show', compact('alatBantu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AlatBantu $alatBantu)
    {
        return view('backend.utilities.alat-bantu.edit', compact('alatBantu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AlatBantu $alatBantu)
    {
        $request->validate([
            'nama_peralatan_software' => 'required|string|max:255',
            'merk_spesifikasi' => 'required|string|max:255',
            'tipe' => 'nullable|string|max:255',
            'nomor_alat' => 'required|string|max:255',
            'tanggal_masa_kalibrasi' => 'nullable|string|max:255',
            'sisa_masa_kalibrasi' => 'nullable|string|max:255',
        ]);

        $alatBantu->update($request->all());

        return redirect()->route('alat-bantu.index')->with('success', 'Data alat bantu berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AlatBantu $alatBantu)
    {
        $alatBantu->delete();

        return redirect()->route('alat-bantu.index')->with('success', 'Data alat bantu berhasil dihapus.');
    }
}
