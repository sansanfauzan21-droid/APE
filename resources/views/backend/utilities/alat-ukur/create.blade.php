@extends('backend.layouts.main')

@section('title', 'Tambah Data Alat Ukur')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Tambah Data Alat Ukur</h5>
                    <a href="{{ route('alat-ukur.index') }}" class="btn btn-secondary">
                        <i class="bx bx-arrow-back me-1"></i> Kembali
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('alat-ukur.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="nama_alat">Nama Peralatan/Alat <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('nama_alat') is-invalid @enderror"
                                           id="nama_alat" name="nama_alat" value="{{ old('nama_alat') }}" required>
                                    @error('nama_alat')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="merk">Merk <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('merk') is-invalid @enderror"
                                           id="merk" name="merk" value="{{ old('merk') }}" required>
                                    @error('merk')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="tipe">Tipe/Spesifikasi <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('tipe') is-invalid @enderror"
                                           id="tipe" name="tipe" value="{{ old('tipe') }}" required>
                                    @error('tipe')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="no_seri">Nomor Alat/Seri <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('no_seri') is-invalid @enderror"
                                           id="no_seri" name="no_seri" value="{{ old('no_seri') }}" required>
                                    @error('no_seri')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="tanggal_kalibrasi">Tanggal Masa Kalibrasi</label>
                                    <input type="text" class="form-control @error('tanggal_kalibrasi') is-invalid @enderror"
                                           id="tanggal_kalibrasi" name="tanggal_kalibrasi" value="{{ old('tanggal_kalibrasi') }}">
                                    @error('tanggal_kalibrasi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="sisa_masa_kalibrasi">Sisa Masa Kalibrasi</label>
                                    <input type="text" class="form-control @error('sisa_masa_kalibrasi') is-invalid @enderror"
                                           id="sisa_masa_kalibrasi" name="sisa_masa_kalibrasi" value="{{ old('sisa_masa_kalibrasi') }}">
                                    @error('sisa_masa_kalibrasi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bx bx-save me-1"></i> Simpan
                                </button>
                                <a href="{{ route('alat-ukur.index') }}" class="btn btn-secondary">
                                    <i class="bx bx-x me-1"></i> Batal
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
