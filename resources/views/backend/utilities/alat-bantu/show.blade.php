@extends('backend.layouts.main')

@section('title', 'Detail Alat Bantu')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Detail Data Alat Bantu</h5>
                    <a href="{{ route('alat-bantu.index') }}" class="btn btn-secondary">
                        <i class="bx bx-arrow-back me-1"></i> Kembali
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Nama Alat:</label>
                            <p class="mb-0">{{ $alatBantu->nama_alat }}</p>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Jenis Alat:</label>
                            <p class="mb-0">{{ $alatBantu->jenis_alat }}</p>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Merk:</label>
                            <p class="mb-0">{{ $alatBantu->merk }}</p>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Tipe:</label>
                            <p class="mb-0">{{ $alatBantu->tipe }}</p>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">No Seri:</label>
                            <p class="mb-0">{{ $alatBantu->no_seri }}</p>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">No Registrasi:</label>
                            <p class="mb-0">{{ $alatBantu->no_registrasi }}</p>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Tanggal Pembelian:</label>
                            <p class="mb-0">{{ $alatBantu->tanggal_pembelian->format('d/m/Y') }}</p>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Tanggal Habis Berlaku:</label>
                            <p class="mb-0">{{ $alatBantu->tanggal_habis_berlaku->format('d/m/Y') }}</p>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-bold">Lokasi Penyimpanan:</label>
                            <p class="mb-0">{{ $alatBantu->lokasi_penyimpanan }}</p>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-bold">Dokumen:</label>
                            @if($alatBantu->dokumen)
                                <p class="mb-0">
                                    <a href="{{ asset('storage/' . $alatBantu->dokumen) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                        <i class="bx bx-file"></i> Lihat Dokumen
                                    </a>
                                </p>
                            @else
                                <p class="mb-0 text-muted">Tidak ada dokumen</p>
                            @endif
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('alat-bantu.edit', $alatBantu) }}" class="btn btn-warning me-2">
                            <i class="bx bx-edit me-1"></i> Edit
                        </a>
                        <form action="{{ route('alat-bantu.destroy', $alatBantu) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                <i class="bx bx-trash me-1"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
