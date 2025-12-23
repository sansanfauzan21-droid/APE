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
                            <h1 data-aos="fade-up" data-aos-delay="">{{ $title }}</h1>
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
            <div class="row justify-content-center mt-4">
                <div class="col-md-12">
                    <div style="border: 2px solid #ddd; border-radius: 10px; padding: 25px; background-color: #f9f9f9; box-shadow: 0 4px 8px rgba(0,0,0,0.05);">
                        
                        <h3 class="text-center mb-4" style="font-weight: bold; color: #333;">Tabel Alat Bantu</h3>
                        
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle">
                                <thead style="background-color: #e67e22; color: white; text-align: center;">
                                    <tr>
                                        <th style="vertical-align: middle; width: 50px;">No.</th>
                                        <th style="vertical-align: middle;">Nama Peralatan/Software</th>
                                        <th style="vertical-align: middle;">Merk/Spesifikasi</th>
                                        <th style="vertical-align: middle;">Nomor Alat</th>
                                        <th style="vertical-align: middle;">Tanggal Masa Kalibrasi</th>
                                        <th style="vertical-align: middle;">Sisa Masa Kalibrasi</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    {{-- Loop Data Alat Bantu --}}
                                    @foreach($alatUBantuData as $data)
                                    <tr style="background-color: {{ $loop->iteration % 2 == 0 ? '#fcfcfc' : '#ffffff' }};">
                                        <td class="text-center">{{ $data['no'] }}</td>
                                        <td><strong>{{ $data['nama_alat'] }}</strong></td>
                                        <td>{{ $data['merk_spesifikasi'] }}</td>
                                        <td>{{ $data['nomor_alat'] }}</td>
                                        <td class="text-center">{{ $data['tanggal_kalibrasi'] }}</td>
                                        <td class="text-center">{{ $data['sisa_masa_kalibrasi'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
