@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container-fluid">
    <!-- Welcome Hero Section -->
    <div class="row">
        <div class="col-12">
            <div class="card bg-gradient-primary">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h2 class="text-white mb-3">
                                <i class="fas fa-user-shield mr-2"></i>
                                Selamat Datang di Dashboard Admin
                            </h2>
                            <p class="text-white-50 mb-4 lead">
                                Kelola pesan masuk dari contact form dengan mudah dan efisien.
                                Balas pertanyaan pelanggan dan kelola komunikasi perusahaan.
                            </p>
                            <div class="d-flex flex-wrap gap-2">
                                <a href="{{ route('admin.contact-form.index') }}" class="btn btn-light btn-lg">
                                    <i class="fas fa-envelope mr-1"></i> Kelola Pesan
                                </a>
                                <a href="{{ route('admin.profile.index') }}" class="btn btn-outline-light btn-lg">
                                    <i class="fas fa-user mr-1"></i> Profile Saya
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-envelope text-white" style="font-size: 8rem; opacity: 0.3;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row">
        <div class="col-lg-4 col-6">
            <div class="small-box bg-gradient-info">
                <div class="inner">
                    <h3>{{ $totalMessages }}</h3>
                    <p>Total Pesan Masuk</p>
                    <div class="progress">
                        <div class="progress-bar bg-white" style="width: {{ $totalMessages > 0 ? '100' : '0' }}%"></div>
                    </div>
                </div>
                <div class="icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <a href="{{ route('admin.contact-form.index') }}" class="small-box-footer">
                    Lihat Semua <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-4 col-6">
            <div class="small-box bg-gradient-warning">
                <div class="inner">
                    <h3>{{ $unreadMessages }}</h3>
                    <p>Pesan Belum Dibaca</p>
                    <div class="progress">
                        <div class="progress-bar bg-white" style="width: {{ $totalMessages > 0 ? round(($unreadMessages / $totalMessages) * 100) : '0' }}%"></div>
                    </div>
                </div>
                <div class="icon">
                    <i class="fas fa-envelope-open"></i>
                </div>
                <a href="{{ route('admin.contact-form.index') }}" class="small-box-footer">
                    Lihat Pesan <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-4 col-6">
            <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3>{{ $totalMessages - $unreadMessages }}</h3>
                    <p>Pesan Sudah Dibaca</p>
                    <div class="progress">
                        <div class="progress-bar bg-white" style="width: {{ $totalMessages > 0 ? round((($totalMessages - $unreadMessages) / $totalMessages) * 100) : '0' }}%"></div>
                    </div>
                </div>
                <div class="icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <a href="{{ route('admin.contact-form.index') }}" class="small-box-footer">
                    Lihat Detail <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Recent Messages -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h3 class="card-title mb-0"><i class="fas fa-clock mr-2"></i> Pesan Terbaru</h3>
                </div>
                <div class="card-body">
                    @if($recentMessages->count() > 0)
                        <div class="list-group">
                            @foreach($recentMessages as $message)
                                <div class="list-group-item">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{{ $message->name }}</h5>
                                        <small>{{ $message->created_at->diffForHumans() }}</small>
                                    </div>
                                    <p class="mb-1">{{ Str::limit($message->subject, 50) }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">{{ $message->email }}</small>
                                        <div>
                                            @if($message->is_read)
                                                <span class="badge bg-success">Dibaca</span>
                                            @else
                                                <span class="badge bg-warning">Belum Dibaca</span>
                                            @endif
                                            <a href="{{ route('admin.contact-form.show', $message->id) }}" class="btn btn-sm btn-primary ml-2">Lihat</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-4">
                            <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                            <p class="text-muted">Belum ada pesan masuk.</p>
                        </div>
                    @endif
                </div>
                @if($recentMessages->count() > 0)
                    <div class="card-footer">
                        <a href="{{ route('admin.contact-form.index') }}" class="btn btn-info btn-block">
                            <i class="fas fa-list mr-1"></i> Lihat Semua Pesan
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h3 class="card-title mb-0"><i class="fas fa-bolt mr-2"></i> Aksi Cepat</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('admin.contact-form.index') }}" class="btn btn-outline-primary btn-block mb-3">
                                <i class="fas fa-envelope fa-2x mb-2"></i><br>
                                <strong>Kelola Contact Form</strong>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('admin.contact-form.index', ['type' => 'complaints']) }}" class="btn btn-outline-warning btn-block mb-3">
                                <i class="fas fa-exclamation-triangle fa-2x mb-2"></i><br>
                                <strong>Lihat Keluhan & Masalah</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
