@extends('layouts.admin')

@section('title', 'Detail Pesan Contact Form')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">Detail Pesan</h3>
                    <a href="{{ route('admin.contact-form.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Nama:</strong>
                            <p>{{ $contactForm->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>Email:</strong>
                            <p>{{ $contactForm->email }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Subject:</strong>
                            <p>{{ $contactForm->subject }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>Tanggal:</strong>
                            <p>{{ $contactForm->created_at->format('d M Y H:i') }}</p>
                        </div>
                    </div>
                    @if($contactForm->category)
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Kategori:</strong>
                            <p><span class="badge bg-info">{{ $contactForm->category }}</span></p>
                        </div>
                        <div class="col-md-6">
                            <strong>Prioritas:</strong>
                            <p>
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
                                @endif
                            </p>
                        </div>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <strong>Pesan:</strong>
                            <p>{{ nl2br(e($contactForm->message)) }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <strong>Status:</strong>
                            @if($contactForm->is_read)
                                <span class="badge bg-success">Dibaca</span>
                            @else
                                <span class="badge bg-warning">Belum Dibaca</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reply Form -->
    <div id="reply-form" class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Balas Pesan</h3>
                </div>
                <div class="card-body">
                    @if(session("success"))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session("success") }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    @if(session("error"))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session("error") }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <form action="{{ route('admin.contact-form.reply', $contactForm->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="reply_message" class="form-label">Pesan Balasan</label>
                            <textarea class="form-control" id="reply_message" name="reply_message" rows="6" placeholder="Ketik balasan Anda di sini..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="bx bx-send me-1"></i> Kirim Balasan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
