@extends('backend.layouts.main')

@section('title', 'Edit Data Perusahaan')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit Data Perusahaan</h5>
                    <a href="{{ route('company-license.index') }}" class="btn btn-secondary">
                        <i class="bx bx-arrow-back me-1"></i> Kembali
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('company-license.update', $companyLicense) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="jenis_perizinan">Jenis Perizinan <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('jenis_perizinan') is-invalid @enderror"
                                           id="jenis_perizinan" name="jenis_perizinan" value="{{ old('jenis_perizinan', $companyLicense->jenis_perizinan) }}" required>
                                    @error('jenis_perizinan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="bidang">Bidang <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('bidang') is-invalid @enderror"
                                           id="bidang" name="bidang" value="{{ old('bidang', $companyLicense->bidang) }}" required>
                                    @error('bidang')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="sub_bidang">Sub Bidang <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('sub_bidang') is-invalid @enderror"
                                           id="sub_bidang" name="sub_bidang" value="{{ old('sub_bidang', $companyLicense->sub_bidang) }}" required>
                                    @error('sub_bidang')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="no_sertifikat">No Sertifikat <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('no_sertifikat') is-invalid @enderror"
                                           id="no_sertifikat" name="no_sertifikat" value="{{ old('no_sertifikat', $companyLicense->no_sertifikat) }}" required>
                                    @error('no_sertifikat')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="no_registrasi">No Registrasi <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('no_registrasi') is-invalid @enderror"
                                           id="no_registrasi" name="no_registrasi" value="{{ old('no_registrasi', $companyLicense->no_registrasi) }}" required>
                                    @error('no_registrasi')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="tanggal_habis_berlaku">Tanggal Habis Berlaku <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control @error('tanggal_habis_berlaku') is-invalid @enderror"
                                           id="tanggal_habis_berlaku" name="tanggal_habis_berlaku" value="{{ old('tanggal_habis_berlaku', $companyLicense->tanggal_habis_berlaku->format('Y-m-d')) }}" required>
                                    @error('tanggal_habis_berlaku')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="sisa_masa_berlaku">Sisa Masa Berlaku <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('sisa_masa_berlaku') is-invalid @enderror"
                                           id="sisa_masa_berlaku" name="sisa_masa_berlaku" value="{{ old('sisa_masa_berlaku', $companyLicense->sisa_masa_berlaku) }}" required>
                                    @error('sisa_masa_berlaku')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="dokumen">Dokumen</label>
                                    <input type="file" class="form-control @error('dokumen') is-invalid @enderror"
                                           id="dokumen" name="dokumen" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">
                                    @error('dokumen')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="form-text">
                                        Format: PDF, DOC, DOCX, JPG, JPEG, PNG. Maksimal 2MB.
                                        @if($companyLicense->dokumen)
                                            <br><small class="text-muted">File saat ini: <a href="{{ asset('storage/' . $companyLicense->dokumen) }}" target="_blank">{{ basename($companyLicense->dokumen) }}</a></small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bx bx-save me-1"></i> Update
                                </button>
                                <a href="{{ route('company-license.index') }}" class="btn btn-secondary">
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
