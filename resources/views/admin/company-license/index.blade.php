@extends('layouts.admin')

@section('title', 'Tabel Perusahaan')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabel Perusahaan</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.company-license.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Tambah Data
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Berhasil!</h5>
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
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
                                @forelse($companyLicenses as $index => $license)
                                    <tr>
                                        <td>{{ $companyLicenses->firstItem() + $index }}</td>
                                        <td>{{ $license->jenis_perizinan }}</td>
                                        <td>{{ $license->bidang }}</td>
                                        <td>{{ $license->sub_bidang }}</td>
                                        <td>{{ $license->no_sertifikat }}</td>
                                        <td>{{ $license->no_registrasi }}</td>
                                        <td>{{ $license->tanggal_habis_berlaku->format('d/m/Y') }}</td>
                                        <td>{{ $license->sisa_masa_berlaku }}</td>
                                        <td>
                                            @if($license->dokumen)
                                                <a href="{{ Storage::url($license->dokumen) }}" target="_blank" class="btn btn-sm btn-info">
                                                    <i class="fas fa-eye"></i> Lihat
                                                </a>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.company-license.show', $license) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.company-license.edit', $license) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.company-license.destroy', $license) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">Tidak ada data perusahaan.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{ $companyLicenses->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
