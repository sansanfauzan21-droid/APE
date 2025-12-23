@extends('frontend.layouts.main')

@push('hero')
    <section class="hero-section inner-page">
        <svg width="0" height="0">
    <defs>
        <clipPath id="hero-clip" clipPathUnits="objectBoundingBox">
            <path 
    d="M0,0 L1,0 L1, 0.85  
    C0.9, 0.90 0.7, 0.90 0.5, 0.85  
    C0.3, 0.80 0.1, 0.85 0, 0.88 Z" 
/>
</clipPath>
    </defs>
</svg>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-md-7 text-center hero-text">
                            <h1 data-aos="fade-up" data-aos-delay="">
                                Legalitas Perusahaan</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endpush

@section('content')
    <section class="section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8">
                    <div style="border: 2px solid #ddd; border-radius: 10px; padding: 20px; background-color: #f9f9f9;">
                        <h2 class="section-heading">Legalitas</h2>
                        <p class="lead">Kami berkomitmen untuk menjalankan bisnis dengan standar legalitas dan sertifikasi yang tinggi untuk memberikan kepercayaan kepada pelanggan.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
    <div class="col-md-8"> 
        <div style="border: 2px solid #ddd; border-radius: 10px; padding: 25px; background-color: #f9f9f9; text-align: center;">
            
            <div class="card" style="border: none; background: transparent;">
                <div style="border: 2px solid #ddd; border-radius: 5px; padding: 10px; display: inline-block;">
                    <img src="{{ asset('assets/img/aktapendirian.png') }}"  
                         alt="Akta Pendirian" 
                         class="img-fluid d-block mx-auto" 
                         style="width: 100%; max-width: 500px; height: auto; border-radius: 5px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                </div>
            </div>

        </div>
    </div>
</div>

            <div id="sertifikat" class="row mt-5">
                <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8">
                    <div style="border: 0.5px solid #ddd; border-radius: 2px; padding: 3px; background-color: #f9f9f9;">
                        <h1 class="section-heading" style="font-size: 1.5em;">Lisensi & Izin Operasional <br>Perusahaan</br></h1>
                    </div>
                </div>
            </div>
                <div class="row justify-content-center">
    <div class="col-md-8"> 
        <div style="border: 2px solid #ddd; border-radius: 10px; padding: 20px; background-color: #f9f9f9; text-align: center;">
            
            <div class="card mb-4" style="border: none; background: transparent;">
                <div style="border: 2px solid #ddd; border-radius: 5px; padding: 10px; display: inline-block;">
                    <img src="{{ asset('assets/img/izin1.png') }}" 
                         alt="Perizinan Berusaha Berbasis Resiko" 
                         class="img-fluid d-block mx-auto" 
                         style="width: 100%; max-width: 500px; height: auto; border-radius: 5px;">
                </div>
            </div>

        </div>
    </div>
</div>

                         <!-- Tabel Perusahaan -->
            <div class="row justify-content-center mt-4">
                <div class="col-md-12">
                    <div style="border: 2px solid #ddd; border-radius: 10px; padding: 20px; background-color: #f9f9f9;">
                        <h3 class="text-center mb-4">Tabel Perusahaan</h3>
                        <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>Jenis Perizinan</th>
                                    <th>Bidang</th>
                                    <th>Sub Bidang</th>
                                    <th>No. Sertifikat</th>
                                    <th>No. Registrasi</th>
                                    <th>Tanggal Habis Berlaku</th>
                                    <th>Sisa Masa Berlaku</th>
                                    <th>Dokumen</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($perusahaanData as $data)
                                <tr>
                                    <td>{{ $data['no'] }}</td>
                                    <td>{{ $data['jenis_perizinan'] }}</td>
                                    <td>{{ $data['bidang'] }}</td>
                                    <td>{{ $data['sub_bidang'] }}</td>
                                    <td>{{ $data['no_sertifikat'] }}</td>
                                    <td>{{ $data['no_registrasi'] }}</td>
                                    <td>{{ $data['tanggal_habis_berlaku'] }}</td>
                                    <td>{{ $data['sisa_masa_berlaku'] }}</td>
                                    <td><a href="{{ $data['dokumen'] }}" class="btn btn-sm btn-primary">Lihat</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
                        </div>
                    </div>
                </div>

            <div class="row justify-content-center mt-5">
                <div class="col-md-8 text-center">
                    <div class="alert alert-success">
                        <h5>Komitmen Kepatuhan</h5>
                        <p>Semua dokumen legalitas dan sertifikasi kami selalu diperbaharui sesuai dengan peraturan yang berlaku untuk menjamin kepatuhan dan kepercayaan pelanggan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
