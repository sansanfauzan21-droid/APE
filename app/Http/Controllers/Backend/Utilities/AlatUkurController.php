<?php

namespace App\Http\Controllers\Backend\Utilities;

use App\Http\Controllers\Controller;
use App\Models\Backend\Utilities\AlatUkur;
use Illuminate\Http\Request;

class AlatUkurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alatUkurs = AlatUkur::orderBy('id')->paginate(10);
        return view('backend.utilities.alat-ukur.index', compact('alatUkurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.utilities.alat-ukur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_alat' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'tipe' => 'required|string|max:255',
            'no_seri' => 'required|string|max:255',
            'tanggal_kalibrasi' => 'nullable|string|max:255',
            'sisa_masa_kalibrasi' => 'nullable|string|max:255',
        ]);

        AlatUkur::create($request->all());

        return redirect()->route('alat-ukur.index')->with('success', 'Data alat ukur berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AlatUkur $alatUkur)
    {
        return view('backend.utilities.alat-ukur.show', compact('alatUkur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AlatUkur $alatUkur)
    {
        return view('backend.utilities.alat-ukur.edit', compact('alatUkur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AlatUkur $alatUkur)
    {
        $request->validate([
            'nama_alat' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'tipe' => 'required|string|max:255',
            'no_seri' => 'required|string|max:255',
            'tanggal_kalibrasi' => 'nullable|string|max:255',
            'sisa_masa_kalibrasi' => 'nullable|string|max:255',
        ]);

        $alatUkur->update($request->all());

        return redirect()->route('alat-ukur.index')->with('success', 'Data alat ukur berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AlatUkur $alatUkur)
    {
        $alatUkur->delete();

        return redirect()->route('alat-ukur.index')->with('success', 'Data alat ukur berhasil dihapus.');
    }
}
