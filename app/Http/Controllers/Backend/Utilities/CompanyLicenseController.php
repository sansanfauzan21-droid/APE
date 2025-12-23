<?php

namespace App\Http\Controllers\Backend\Utilities;

use App\Helpers\StoreFileHelper;
use App\Http\Controllers\Controller;
use App\Models\Backend\Utilities\CompanyLicense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyLicenseController extends Controller
{
    public function index()
    {
        $companyLicenses = CompanyLicense::orderBy('id')->paginate(10);
        return view('backend.utilities.company-license.index', compact('companyLicenses'));
    }

    public function create()
    {
        return view('backend.utilities.company-license.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_perizinan' => 'required|string|max:255',
            'bidang' => 'required|string|max:255',
            'sub_bidang' => 'required|string|max:255',
            'no_sertifikat' => 'required|string|max:255',
            'no_registrasi' => 'required|string|max:255',
            'tanggal_habis_berlaku' => 'required|date',
            'sisa_masa_berlaku' => 'required|string|max:255',
            'dokumen' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('dokumen')) {
            $path = $request->file('dokumen')->store(StoreFileHelper::storeCompanyLicenseDocument(), 'public');
            $data['dokumen'] = $path;

            // Copy file to public/storage for Windows compatibility
            $sourcePath = storage_path('app/public/' . $path);
            $destinationPath = public_path('storage/' . $path);
            if (!file_exists(dirname($destinationPath))) {
                mkdir(dirname($destinationPath), 0755, true);
            }
            copy($sourcePath, $destinationPath);
        }

        CompanyLicense::create($data);

        return redirect()->route('company-license.index')->with('success', 'Data perusahaan berhasil ditambahkan.');
    }

    public function show(CompanyLicense $companyLicense)
    {
        return view('backend.utilities.company-license.show', compact('companyLicense'));
    }

    public function edit(CompanyLicense $companyLicense)
    {
        return view('backend.utilities.company-license.edit', compact('companyLicense'));
    }

    public function update(Request $request, CompanyLicense $companyLicense)
    {
        $request->validate([
            'jenis_perizinan' => 'required|string|max:255',
            'bidang' => 'required|string|max:255',
            'sub_bidang' => 'required|string|max:255',
            'no_sertifikat' => 'required|string|max:255',
            'no_registrasi' => 'required|string|max:255',
            'tanggal_habis_berlaku' => 'required|date',
            'sisa_masa_berlaku' => 'required|string|max:255',
            'dokumen' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('dokumen')) {
            // Delete old file if exists
            if ($companyLicense->dokumen && Storage::disk('public')->exists($companyLicense->dokumen)) {
                Storage::disk('public')->delete($companyLicense->dokumen);
                // Also delete from public/storage
                $oldPublicPath = public_path('storage/' . $companyLicense->dokumen);
                if (file_exists($oldPublicPath)) {
                    unlink($oldPublicPath);
                }
            }
            $path = $request->file('dokumen')->store(StoreFileHelper::storeCompanyLicenseDocument(), 'public');
            $data['dokumen'] = $path;

            // Copy file to public/storage for Windows compatibility
            $sourcePath = storage_path('app/public/' . $path);
            $destinationPath = public_path('storage/' . $path);
            if (!file_exists(dirname($destinationPath))) {
                mkdir(dirname($destinationPath), 0755, true);
            }
            copy($sourcePath, $destinationPath);
        }

        $companyLicense->update($data);

        return redirect()->route('company-license.index')->with('success', 'Data perusahaan berhasil diperbarui.');
    }

    public function destroy(CompanyLicense $companyLicense)
    {
        // Delete file if exists
        if ($companyLicense->dokumen && Storage::disk('public')->exists($companyLicense->dokumen)) {
            Storage::disk('public')->delete($companyLicense->dokumen);
            // Also delete from public/storage
            $publicPath = public_path('storage/' . $companyLicense->dokumen);
            if (file_exists($publicPath)) {
                unlink($publicPath);
            }
        }

        $companyLicense->delete();

        return redirect()->route('company-license.index')->with('success', 'Data perusahaan berhasil dihapus.');
    }
}
