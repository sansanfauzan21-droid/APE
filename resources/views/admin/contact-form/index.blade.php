@extends('layouts.admin')

@section('title', 'Contact Form Messages')

@push('head')
<style>
.nav-tabs .nav-link.active.contact-us-tab {
    background-color: #007bff !important;
    color: white !important;
    border-color: #007bff !important;
}
.nav-tabs .nav-link.active.complaints-tab {
    background-color: #dc3545 !important;
    color: white !important;
    border-color: #dc3545 !important;
}
</style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pesan Masuk - Contact Form</h3>
                </div>
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link {{ $type == 'contact_us' ? 'active contact-us-tab' : '' }}" href="{{ route('admin.contact-form.index', ['type' => 'contact_us']) }}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $type == 'complaints' ? 'active complaints-tab' : '' }}" href="{{ route('admin.contact-form.index', ['type' => 'complaints']) }}">Complaints & Issues</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    @if($type == 'complaints')
                                        <th>Kategori</th>
                                        <th>Prioritas</th>
                                    @endif
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($contactForms as $contactForm)
                                    <tr>
                                        <td>{{ $contactForm->name }}</td>
                                        <td>{{ $contactForm->email }}</td>
                                        <td>{{ $contactForm->subject }}</td>
                                        @if($type == 'complaints')
                                            <td>
                                                @if($contactForm->category)
                                                    <span class="badge bg-info">{{ $contactForm->category }}</span>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>
                                                @if($contactForm->priority)
                                                    @if($contactForm->priority == 'Kritis')
                                                        <span class="badge bg-danger">{{ $contactForm->priority }}</span>
                                                    @elseif($contactForm->priority == 'Tinggi')
                                                        <span class="badge bg-warning">{{ $contactForm->priority }}</span>
                                                    @elseif($contactForm->priority == 'Sedang')
                                                        <span class="badge bg-secondary">{{ $contactForm->priority }}</span>
                                                    @else
                                                        <span class="badge bg-light text-dark">{{ $contactForm->priority }}</span>
                                                    @endif
                                                @else
                                                    -
                                                @endif
                                            </td>
                                        @endif
                                        <td>
                                            @if($contactForm->is_read)
                                                <span class="badge bg-success">Dibaca</span>
                                            @else
                                                <span class="badge bg-warning">Belum Dibaca</span>
                                            @endif
                                        </td>
                                        <td>{{ $contactForm->created_at->format('d M Y H:i') }}</td>
                                        <td>
                                            <a href="{{ route('admin.contact-form.show', $contactForm->id) }}" class="btn btn-sm btn-primary">Lihat</a>
                                            <a href="{{ route('admin.contact-form.show', $contactForm->id) }}#reply-form" class="btn btn-sm btn-success">Balas</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="{{ $type == 'complaints' ? '8' : '6' }}" class="text-center">Tidak ada pesan contact form.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{ $contactForms->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
