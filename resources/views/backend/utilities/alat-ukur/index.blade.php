@extends('backend.layouts.main')

@section('title', 'Tabel Alat Ukur')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Data Tabel Alat Ukur</h5>
                    <a href="{{ route('alat-ukur.create') }}" class="btn btn-primary">
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
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Nama Peralatan/Software</th>
                                    <th class="text-center">Merk/Spesifikasi</th>
                                    <th class="text-center">Nomor Alat</th>
                                    <th class="text-center">Tanggal Masa Kalibrasi</th>
                                    <th class="text-center">Sisa Masa Kalibrasi</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($alatUkurs as $alat)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $alat->nama_alat }}</td>
                                        <td class="text-center">{{ $alat->merk }} {{ $alat->tipe }}</td>
                                        <td class="text-center">{{ $alat->no_seri }}</td>
                                        <td class="text-center">{{ $alat->tanggal_kalibrasi }}</td>
                                        <td class="text-center">{{ $alat->sisa_masa_kalibrasi ?: '-' }}</td>
                                        <td class="text-center">
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('alat-ukur.show', $alat) }}">
                                                        <i class="bx bx-show me-1"></i> Lihat
                                                    </a>
                                                    <a class="dropdown-item" href="{{ route('alat-ukur.edit', $alat) }}">
                                                        <i class="bx bx-edit me-1"></i> Edit
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <form action="{{ route('alat-ukur.destroy', $alat) }}" method="POST" class="d-inline">
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
                                            Tidak ada data alat ukur ditemukan.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if($alatUkurs->hasPages())
                        <div class="d-flex justify-content-center mt-3">
                            {{ $alatUkurs->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
