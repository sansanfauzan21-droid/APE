@extends('backend.layouts.main')

@section('title', 'Detail Tabel Perusahaan')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Detail Data Tabel Perusahaan</h5>
                    <a href="{{ route('company-license.index') }}" class="btn btn-secondary">
                        <i class="bx bx-arrow-back me-1"></i> Kembali
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Jenis Perizinan</label>
                                <p class="form-control-plaintext">{{ $companyLicense->jenis_perizinan }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Bidang</label>
                                <p class="form-control-plaintext">{{ $companyLicense->bidang }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Sub Bidang</label>
                                <p class="form-control-plaintext">{{ $companyLicense->sub_bidang }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">No Sertifikat</label>
                                <p class="form-control-plaintext">{{ $companyLicense->no_sertifikat }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">No Registrasi</label>
                                <p class="form-control-plaintext">{{ $companyLicense->no_registrasi }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Tanggal Habis Berlaku</label>
                                <p class="form-control-plaintext">{{ $companyLicense->tanggal_habis_berlaku->format('d/m/Y') }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Sisa Masa Berlaku</label>
                                <p class="form-control-plaintext">{{ $companyLicense->sisa_masa_berlaku }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Dokumen</label>
                                @if($companyLicense->dokumen)
                                    <p class="form-control-plaintext">
                                        <a href="{{ asset('storage/' . $companyLicense->dokumen) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                            <i class="bx bx-file"></i> Lihat Dokumen
                                        </a>
                                    </p>
                                @else
                                    <p class="form-control-plaintext text-muted">-</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
