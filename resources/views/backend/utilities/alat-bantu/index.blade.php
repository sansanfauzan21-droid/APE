@extends('backend.layouts.main')

@section('title', 'Tabel Alat Bantu')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Data Tabel Alat Bantu</h5>
                    <a href="{{ route('alat-bantu.create') }}" class="btn btn-primary">
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
                                    <th>Nama Peralatan Software</th>
                                    <th>Merk Spesifikasi</th>
                                    <th>Nomor Alat</th>
                                    <th>Tanggal Masa Kalibrasi</th>
                                    <th>Sisa Masa Kalibrasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($alatBantus as $alat)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $alat->nama_peralatan_software }}</td>
                                        <td>{{ $alat->merk_spesifikasi }} {{ $alat->tipe }}</td>
                                        <td>{{ $alat->nomor_alat }}</td>
                                        <td>{{ $alat->tanggal_masa_kalibrasi }}</td>
                                        <td>{{ $alat->sisa_masa_kalibrasi }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('alat-bantu.show', $alat) }}">
                                                        <i class="bx bx-show me-1"></i> Lihat
                                                    </a>
                                                    <a class="dropdown-item" href="{{ route('alat-bantu.edit', $alat) }}">
                                                        <i class="bx bx-edit me-1"></i> Edit
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <form action="{{ route('alat-bantu.destroy', $alat) }}" method="POST" class="d-inline">
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
                                        <td colspan="7" class="text-center text-muted">
                                            Tidak ada data alat bantu ditemukan.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if($alatBantus->hasPages())
                        <div class="d-flex justify-content-center mt-3">
                            {{ $alatBantus->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
