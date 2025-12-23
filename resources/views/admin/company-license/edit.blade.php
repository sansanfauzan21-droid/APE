@extends('layouts.admin')

@section('title', 'Edit Data Perusahaan')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Perusahaan</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.company-license.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.company-license.update', $companyLicense) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jenis_perizinan">Jenis Perizinan *</label>
                                    <input type="text" class="form-control @error('jenis_perizinan') is-invalid @enderror"
                                           id="jenis_perizinan" name="jenis_perizinan" value="{{ old('jenis_perizinan', $companyLicense->jenis_perizinan) }}" required>
                                    @error('jenis_perizinan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bidang">Bidang *</label>
                                    <input type="text" class="form-control @error('bidang') is-invalid @enderror"
                                           id="bidang" name="bidang" value="{{ old('bidang', $companyLicense->bidang) }}" required>
                                    @error('bidang')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sub_bidang">Sub Bidang *</label>
                                    <input type="text" class="form-control @error('sub_bidang') is-invalid @enderror"
                                           id="sub_bidang" name="sub_bidang" value="{{ old('sub_bidang', $companyLicense->sub_bidang) }}" required>
                                    @error('sub_bidang')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_sertifikat">No Sertifikat *</label>
                                    <input type="text" class="form-control @error('no_sertifikat') is-invalid @enderror"
                                           id="no_sertifikat" name="no_sertifikat" value="{{ old('no_sertifikat', $companyLicense->no_sertifikat) }}" required>
                                    @error('no_sertifikat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="no_registrasi">No Registrasi *</label>
                                    <input type="text" class="form-control @error('no_registrasi') is-invalid @enderror"
                                           id="no_registrasi" name="no_registrasi" value="{{ old('no_registrasi', $companyLicense->no_registrasi) }}" required>
                                    @error('no_registrasi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal_habis_berlaku">Tanggal Habis Berlaku *</label>
                                    <input type="date" class="form-control @error('tanggal_habis_berlaku') is-invalid @enderror"
                                           id="tanggal_habis_berlaku" name="tanggal_habis_berlaku" value="{{ old('tanggal_habis_berlaku', $companyLicense->tanggal_habis_berlaku->format('Y-m-d')) }}" required>
                                    @error('tanggal_habis_berlaku')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sisa_masa_berlaku">Sisa Masa Berlaku *</label>
                                    <input type="text" class="form-control @error('sisa_masa_berlaku') is-invalid @enderror"
                                           id="sisa_masa_berlaku" name="sisa_masa_berlaku" value="{{ old('sisa_masa_berlaku', $companyLicense->sisa_masa_berlaku) }}" required>
                                    @error('sisa_masa_berlaku')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dokumen">Dokumen</label>
                                    <input type="file" class="form-control @error('dokumen') is-invalid @enderror"
                                           id="dokumen" name="dokumen" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">
                                    @error('dokumen')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <small class="form-text text-muted">Format: PDF, DOC, DOCX, JPG, JPEG, PNG. Maksimal 2MB.</small>
                                    @if($companyLicense->dokumen)
                                        <div class="mt-2">
                                            <small class="text-muted">File saat ini: <a href="{{ Storage::url($companyLicense->dokumen) }}" target="_blank">{{ basename($companyLicense->dokumen) }}</a></small>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update
                            </button>
                            <a href="{{ route('admin.company-license.index') }}" class="btn btn-secondary">
                                <i class="fas fa-times"></i> Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
