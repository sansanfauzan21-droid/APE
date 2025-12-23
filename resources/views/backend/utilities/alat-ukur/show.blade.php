@extends('backend.layouts.main')

@section('title', 'Detail Data Alat Ukur')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Detail Data Alat Ukur</h5>
                    <a href="{{ route('alat-ukur.index') }}" class="btn btn-secondary">
                        <i class="bx bx-arrow-back me-1"></i> Kembali
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Nama Peralatan/Alat:</label>
                                <p class="form-control-plaintext">{{ $alatUkur->nama_alat }}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Merk:</label>
                                <p class="form-control-plaintext">{{ $alatUkur->merk }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Tipe/Spesifikasi:</label>
                                <p class="form-control-plaintext">{{ $alatUkur->tipe }}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Nomor Alat/Seri:</label>
                                <p class="form-control-plaintext">{{ $alatUkur->no_seri }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Tanggal Masa Kalibrasi:</label>
                                <p class="form-control-plaintext">{{ $alatUkur->tanggal_kalibrasi }}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Sisa Masa Kalibrasi:</label>
                                <p class="form-control-plaintext">{{ $alatUkur->sisa_masa_kalibrasi ?: '-' }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('alat-ukur.edit', $alatUkur) }}" class="btn btn-primary">
                                <i class="bx bx-edit me-1"></i> Edit
                            </a>
                            <a href="{{ route('alat-ukur.index') }}" class="btn btn-secondary">
                                <i class="bx bx-arrow-back me-1"></i> Kembali
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
