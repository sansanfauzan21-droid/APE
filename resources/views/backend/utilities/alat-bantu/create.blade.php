@extends('backend.layouts.main')

@section('title', 'Create Alat Bantu')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Tambah Data Alat Bantu</h5>
                    <a href="{{ route('alat-bantu.index') }}" class="btn btn-secondary">
                        <i class="bx bx-arrow-back me-1"></i> Kembali
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('alat-bantu.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nama_peralatan_software" class="form-label">Nama Peralatan Software <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('nama_peralatan_software') is-invalid @enderror"
                                       id="nama_peralatan_software" name="nama_peralatan_software" value="{{ old('nama_peralatan_software') }}" required>
                                @error('nama_peralatan_software')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="merk_spesifikasi" class="form-label">Merk <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('merk_spesifikasi') is-invalid @enderror"
                                       id="merk_spesifikasi" name="merk_spesifikasi" value="{{ old('merk_spesifikasi') }}" required>
                                @error('merk_spesifikasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="tipe" class="form-label">Tipe</label>
                                <input type="text" class="form-control @error('tipe') is-invalid @enderror"
                                       id="tipe" name="tipe" value="{{ old('tipe') }}">
                                @error('tipe')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="nomor_alat" class="form-label">Nomor Alat <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('nomor_alat') is-invalid @enderror"
                                       id="nomor_alat" name="nomor_alat" value="{{ old('nomor_alat') }}" required>
                                @error('nomor_alat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="tanggal_masa_kalibrasi" class="form-label">Tanggal Masa Kalibrasi</label>
                                <input type="text" class="form-control @error('tanggal_masa_kalibrasi') is-invalid @enderror"
                                       id="tanggal_masa_kalibrasi" name="tanggal_masa_kalibrasi" value="{{ old('tanggal_masa_kalibrasi') }}">
                                @error('tanggal_masa_kalibrasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="sisa_masa_kalibrasi" class="form-label">Sisa Masa Kalibrasi</label>
                                <input type="text" class="form-control @error('sisa_masa_kalibrasi') is-invalid @enderror"
                                       id="sisa_masa_kalibrasi" name="sisa_masa_kalibrasi" value="{{ old('sisa_masa_kalibrasi') }}">
                                @error('sisa_masa_kalibrasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                <i class="bx bx-save me-1"></i> Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
