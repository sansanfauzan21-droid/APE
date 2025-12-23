@extends('backend.layouts.main')

@section('title', 'Tabel Perusahaan')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Data Tabel Perusahaan</h5>
                    <a href="{{ route('company-license.create') }}" class="btn btn-primary">
                        <i class="bx bx-plus me-1"></i> Tambah Data
                    </a>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Perizinan</th>
                                    <th>Bidang</th>
                                    <th>Sub Bidang</th>
                                    <th>No Sertifikat</th>
                                    <th>No Registrasi</th>
                                    <th>Tanggal Habis Berlaku</th>
                                    <th>Sisa Masa Berlaku</th>
                                    <th>Dokumen</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($companyLicenses as $license)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $license->jenis_perizinan }}</td>
                                        <td>{{ $license->bidang }}</td>
                                        <td>{{ $license->sub_bidang }}</td>
                                        <td>{{ $license->no_sertifikat }}</td>
                                        <td>{{ $license->no_registrasi }}</td>
                                        <td>{{ $license->tanggal_habis_berlaku->format('d/m/Y') }}</td>
                                        <td>{{ $license->sisa_masa_berlaku }}</td>
                                        <td>
                                            @if($license->dokumen)
                                                <a href="{{ asset('storage/' . $license->dokumen) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                                    <i class="bx bx-file"></i>
                                                </a>
                                            @else
                                                <span class="text-muted">-</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('company-license.show', $license) }}">
                                                        <i class="bx bx-show me-1"></i> Lihat
                                                    </a>
                                                    <a class="dropdown-item" href="{{ route('company-license.edit', $license) }}">
                                                        <i class="bx bx-edit me-1"></i> Edit
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <form action="{{ route('company-license.destroy', $license) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item text-danger"
                                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                            <i class="bx bx-trash me-1"></i> Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center text-muted">
                                            Tidak ada data perusahaan ditemukan.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if($companyLicenses->hasPages())
                        <div class="d-flex justify-content-center mt-3">
                            {{ $companyLicenses->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
