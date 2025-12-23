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
                                {{ CompanyHelper::get() && CompanyHelper::get()['nickname'] ? CompanyHelper::get()['nickname'] : 'PT Aliansi Prima Energi' }}
                                Visi & Misi
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>
@endpush

@section('content')
    <!-- Vision Section -->
    <div class="vision-section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="vision-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="vision-header text-center mb-4">
                            <div class="vision-icon mb-3">
                                <i class="fas fa-eye" style="font-size: 4rem; color: #0048ffff;"></i>
                            </div>
                            <h1 class="vision-section" data-aos="fade-up" style="background: linear-gradient(45deg, #1976d2, #ff5722); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-weight: bold; margin-bottom: 20px; font-size: 3rem; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">VISI PERUSAHAAN</h1>

                        </div>
                        <div class="vision-content">
                            <div class="vision-text-container" style="background: rgba(255,255,255,0.1); border-radius: 20px; padding: 2rem; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                                <p class="vision-text" style="color: #000000ff; font-size: 1.3rem; line-height: 1.8; text-align: center; margin: 0; font-weight: 300;">
                                    <span class="highlight-word" style="color: #0077ffff; font-weight: bold;">Menjadi perusahaan jasa ketenagalsitrikan</span> yang terdepan, handal, inovatif, dan ramah lingkungan. Dan juga selalu berkomitmen menyediakan solusi ketenagalistrikan yang berkualitas bagi masyarakat dan juga dunia industri, guna mendukung pembangunan nasional yang berkelanjutan.
                                </p>
                            </div>
                        </div>
                        <div class="vision-interactive mt-4 text-center">
                            <button class="btn btn-outline-light btn-lg vision-btn" onclick="toggleVisionDetails()">
                                <i class="fas fa-lightbulb"></i> Jelajahi Visi Kami
                            </button>
                        </div>
                        <div class="vision-details" id="visionDetails" style="display: none; margin-top: 2rem;">
                            <div class="row">
                                <div class="col-md-4 text-center mb-3">
                                    <div class="vision-point" style="background: rgba(255,255,255,0.1); border-radius: 15px; padding: 1rem; height: 100%;">
                                        <i class="fas fa-bolt" style="font-size: 2rem; color: #0073ffff; margin-bottom: 0.5rem;"></i>
                                        <h5 style="color: #000000ff;">Inovatif</h5>
                                        <p style="color: #000000ff; font-size: 0.9rem;">Selalu mengadopsi teknologi terbaru</p>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center mb-3">
                                    <div class="vision-point" style="background: rgba(255,255,255,0.1); border-radius: 15px; padding: 1rem; height: 100%;">
                                        <i class="fas fa-shield-alt" style="font-size: 2rem; color: #007bffff; margin-bottom: 0.5rem;"></i>
                                        <h5 style="color: #000000ff;">Handal</h5>
                                        <p style="color: #000000ff; font-size: 0.9rem;">Komitmen terhadap kualitas dan keamanan</p>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center mb-3">
                                    <div class="vision-point" style="background: rgba(255,255,255,0.1); border-radius: 15px; padding: 1rem; height: 100%;">
                                        <i class="fas fa-leaf" style="font-size: 2rem; color: #004cffff; margin-bottom: 0.5rem;"></i>
                                        <h5 style="color: #000000ff;">Ramah Lingkungan</h5>
                                        <p style="color: #000000ff; font-size: 0.9rem;">Dukung energi terbarukan dan keberlanjutan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Animated background elements -->
        <div class="vision-bg-element" style="position: absolute; top: 10%; left: 10%; width: 50px; height: 50px; background: rgba(0, 102, 255, 0.6); border-radius: 50%; animation: float 6s ease-in-out infinite;"></div>
        <div class="vision-bg-element" style="position: absolute; top: 50%; right: 10%; width: 50px; height: 50px; background: rgba(0, 102, 255, 0.6); border-radius: 50%; animation: float 6s ease-in-out infinite;"></div>
        <div class="vision-bg-element" style="position: absolute; top: 60%; right: 15%; width: 30px; height: 30px; background: rgba(0, 102, 255, 0.6); border-radius: 50%; animation: float 8s ease-in-out infinite reverse;"></div>
        <div class="vision-bg-element" style="position: absolute; bottom: 20%; left: 20%; width: 40px; height: 40px; background: rgba(0, 102, 255, 0.6); border-radius: 50%; animation: float 7s ease-in-out infinite;"></div>
    </div>

    <style>
        .vision-section {
            position: relative;
        }

        .vision-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 25px;
            padding: 3rem 2rem;
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .vision-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
        }

        .vision-icon {
            animation: pulse 2s infinite;
        }

        .vision-btn {
            border: 2px solid #0037ffff;
            color: #0040ffff;
            transition: all 0.3s ease;
            border-radius: 30px;
            padding: 0.75rem 2rem;
        }

        .vision-btn:hover {
            background: #0051ffff;
            color: #333;
            transform: scale(1.05);
        }

        .vision-point {
            transition: all 0.3s ease;
        }

        .vision-point:hover {
            transform: translateY(-5px);
            background: rgba(255,255,255,0.2) !important;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .highlight-word {
            position: relative;
            display: inline-block;
        }

        .highlight-word::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #ff0000ff, #FFA500);
            border-radius: 2px;
        }
    </style>

    <script>
        function toggleVisionDetails() {
            const details = document.getElementById('visionDetails');
            const btn = document.querySelector('.vision-btn');
            if (details.style.display === 'none') {
                details.style.display = 'block';
                btn.innerHTML = '<i class="fas fa-times"></i> Tutup Detail';
                details.style.animation = 'fadeIn 0.5s ease-in-out';
            } else {
                details.style.display = 'none';
                btn.innerHTML = '<i class="fas fa-lightbulb"></i> Jelajahi Visi Kami';
            }
        }

        // Add fadeIn animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
        `;
        document.head.appendChild(style);
    </script>

    <!-- Mission Section Wrapper -->
    <div class="mission-section-wrapper py-5">
        <!-- Animated background elements for mission -->
        <div class="mission-bg-element" style="position: absolute; top: 15%; left: 5%; width: 60px; height: 60px; background: rgba(25, 185, 210, 0.48); border-radius: 50%; animation: float 8s ease-in-out infinite;"></div>
        <div class="mission-bg-element" style="position: absolute; top: 40%; right: 8%; width: 40px; height: 40px; background: rgba(34, 141, 255, 0.4); border-radius: 50%; animation: float 6s ease-in-out infinite reverse;"></div>
        <div class="mission-bg-element" style="position: absolute; top: 70%; left: 15%; width: 50px; height: 50px; background: rgba(76, 175, 80, 0.4); border-radius: 50%; animation: float 7s ease-in-out infinite;"></div>
        <div class="mission-bg-element" style="position: absolute; bottom: 10%; right: 20%; width: 35px; height: 35px; background: rgba(39, 82, 176, 0.4); border-radius: 50%; animation: float 9s ease-in-out infinite;"></div>

        <div id="mission-section" class="row justify-content-center text-center mb-5">
            <div class="col-md-10">
                <h1 class="section-heading" data-aos="fade-up" style="background: linear-gradient(45deg, #1976d2, #ff5722); -webkit-background-clip: text; 
                -webkit-text-fill-color: transparent; background-clip: text; font-weight: bold; margin-bottom: 20px; font-size: 3rem; 
                text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">
                MISI PERUSAHAAN
                </h1>
                <p class="lead" data-aos="fade-up" data-aos-delay="200" style="color: #1565c0; font-size: 1.3em; font-weight: 500;">Komitmen Aliansi Prima Energi dalam memberikan pelayanan terbaik</p>
            </div>
        </div>

        <style>
            .mission-card {
                position: relative;
                border-radius: 20px;
                overflow: hidden;
                background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0);
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                border: 2px solid transparent;
                background-clip: padding-box;
                cursor: pointer;
                perspective: 1000px;
                height: 350px;
            }

            .mission-card-inner {
                position: relative;
                width: 100%;
                height: 100%;
                text-align: center;
                transition: transform 0.8s;
                transform-style: preserve-3d;
            }

            .mission-card.flipped .mission-card-inner {
                transform: rotateY(180deg);
            }

            .card-front, .card-back {
                position: absolute;
                width: 100%;
                height: 100%;
                -webkit-backface-visibility: hidden;
                backface-visibility: hidden;
                border-radius: 20px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 1rem;
            }

            .card-back {
                transform: rotateY(180deg);
                background: linear-gradient(135deg, #1976d2 0%, #42a5f5 100%);
                color: white;
            }

            .mission-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;  
                background: linear-gradient(135deg,
                    rgba(25, 118, 210, 0.4) 0%,
                    rgba(19, 146, 249, 0.75) 25%,
                    rgba(7, 134, 238, 0.78) 50%,
                    rgba(34, 144, 255, 0.5) 75%,
                    rgba(3, 96, 245, 0.68) 100%);
                border-radius: 20px;
                z-index: -1;
                padding: 2px;
                box-shadow: inset 0 1px 0 rgba(2, 65, 255, 0.95),
                            inset 0 -1px 0 rgba(2, 65, 255, 0.95);
            }

            .mission-card:hover {
                transform: translateY(-10px) scale(1.02);
                box-shadow: 0 20px 40px rgba(17, 247, 255, 0.2);
                border-color: #1048e180;
            }

            .mission-card:hover .card-title {
                color: #d21919ff;
                transform: scale(1.05);
                transition: all 0.3s ease;
            }

            .mission-card .card-text {
                font-weight: bold;
                font-family: 'Calibri', sans-serif;
            }

            .mission-card .card-title {
                margin-bottom: 1rem;
                transition: all 0.3s ease;
                color: #ffffffff;
                font-weight: bold;
                font-size: 1.4em;
            }

            .mission-card img {
                transition: all 0.3s ease;
                max-width: 70px;
                margin-bottom: 1rem;
            }

            .mission-card:hover img {
                transform: scale(1.1) rotate(5deg);
                filter: drop-shadow(0 0 10px rgba(255, 87, 34, 0.5));
            }

            .flip-btn {
                background: linear-gradient(45deg, #1976d2, #ff5722);
                border: none;
                color: white;
                padding: 0.5rem 1rem;
                border-radius: 25px;
                font-weight: bold;
                transition: all 0.3s ease;
                margin-top: 1rem;
            }

            .flip-btn:hover {
                transform: scale(1.1);
                box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            }

            .vision-text p {
                text-shadow: 0 2px 4px rgba(0,0,0,0.3);
            }

            .btn-outline-light:hover {
                background-color: rgba(1, 0, 0, 0.1);
                border-color: #000000ff;
            }

            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-20px); }
            }
        </style>

        <div class="row">
            <!-- Misi 1 -->
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card mission-card">
                    <div class="mission-card-inner">
                        <div class="card-front card-body text-center p-4">
                            <div class="mb-3">
                                <img src="{{ asset('assets/img/1.png') }}" alt="Reliable Services" class="img-fluid">
                            </div>
                            <h4 class="card-title">Memberikan Layanan Ketenagalistrikan yang Andal dan Aman</h4>
                            <p class="card-text">
                                Menyediakan jasa kelistrikan yang berkualitas tinggi dengan mengutamakan keamanan, stabilitas, dan keandalan sistem listrik.
                            </p>
                            <button class="flip-btn" onclick="flipCard(this)">Learn More</button>
                        </div>
                        <div class="card-back card-body text-center p-4">
                            <h4 class="card-title" style="color: white; font-size: 1.6em;">Providing Reliable and Safe Electrical Services</h4>
                            <p class="card-text" style="color: white; font-size: 1.1em; line-height: 1.6;">
                                Providing high-quality electrical services with a focus on safety, stability, and system reliability.
                            </p>
                            <button class="flip-btn" onclick="flipCard(this)">Back</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Misi 2 -->
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card mission-card">
                    <div class="mission-card-inner">
                        <div class="card-front card-body text-center p-4">
                            <div class="mb-3">
                                <img src="{{ asset('assets/img/2.png') }}" alt="Customer Satisfaction" class="img-fluid">
                            </div>
                            <h4 class="card-title">Mengutamakan Kepuasan Pelanggan</h4>
                            <p class="card-text">
                                Fokus pada pemenuhan kebutuhan pelanggan melalui pelayanan yang profesional, tepat waktu, dan responsif terhadap setiap permintaan atau keluhan.
                            </p>
                            <button class="flip-btn" onclick="flipCard(this)">Learn More</button>
                        </div>
                        <div class="card-back card-body text-center p-4">
                            <h4 class="card-title" style="color: white; font-size: 1.6em;">Focusing on Customer Satisfaction</h4>
                            <p class="card-text" style="color: white; font-size: 1.1em; line-height: 1.6;">
                                Focusing on meeting customer needs through professional, timely service, and being responsive to every request or complaint.
                            </p>
                            <button class="flip-btn" onclick="flipCard(this)">Back</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Misi 3 -->
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card mission-card">
                    <div class="mission-card-inner">
                        <div class="card-front card-body text-center p-4">
                            <div class="mb-3">
                                <img src="{{ asset('assets/img/3.png') }}" alt="Innovation" class="img-fluid">
                            </div>
                            <h4 class="card-title">Mendorong Inovasi Teknologi</h4>
                            <p class="card-text">
                                Mengembangkan solusi kelistrikan berbasis teknologi terbaru untuk meningkatkan efisiensi dan efektivitas pelayanan.
                            </p>
                            <button class="flip-btn" onclick="flipCard(this)">Learn More</button>
                        </div>
                        <div class="card-back card-body text-center p-4">
                            <h4 class="card-title" style="color: white; font-size: 1.6em;">Encouraging Technological Innovation</h4>
                            <p class="card-text" style="color: white; font-size: 1.1em; line-height: 1.6;">
                                Developing electrical solutions based on the latest technology to enhance service efficiency and effectiveness.
                            </p>
                            <button class="flip-btn" onclick="flipCard(this)">Back</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Misi 4 -->
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card mission-card">
                    <div class="mission-card-inner">
                        <div class="card-front card-body text-center p-4">
                            <div class="mb-3">
                                <img src="{{ asset('assets/img/4.png') }}" alt="Renewable Energy" class="img-fluid">
                            </div>
                            <h4 class="card-title">Mendukung Energi Terbarukan</h4>
                            <p class="card-text">
                                Berpartisipasi aktif dalam pengembangan dan implementasi energi terbarukan sebagai bagian dari komitmen terhadap keberlanjutan lingkungan.
                            </p>
                            <button class="flip-btn" onclick="flipCard(this)">Learn More</button>
                        </div>
                        <div class="card-back card-body text-center p-4">
                            <h4 class="card-title" style="color: white; font-size: 1.6em;">Supporting Renewable Energy</h4>
                            <p class="card-text" style="color: white; font-size: 1.1em; line-height: 1.6;">
                                Actively participating in the development and implementation of renewable energy as part of our commitment to environmental sustainability.
                            </p>
                            <button class="flip-btn" onclick="flipCard(this)">Back</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Misi 5 -->
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card mission-card">
                    <div class="mission-card-inner">
                        <div class="card-front card-body text-center p-4">
                            <div class="mb-3">
                                <img src="{{ asset('assets/img/5.png') }}" alt="Human Resources" class="img-fluid">
                            </div>
                            <h4 class="card-title">Memperkuat Kompetensi Sumber Daya Manusia</h4>
                            <p class="card-text">
                                Melakukan pengembangan dan pelatihan berkelanjutan bagi karyawan agar memiliki keterampilan dan pengetahuan yang sesuai dengan perkembangan teknologi kelistrikan.
                            </p>
                            <button class="flip-btn" onclick="flipCard(this)">Learn More</button>
                        </div>
                        <div class="card-back card-body text-center p-4">
                            <h4 class="card-title" style="color: white; font-size: 1.6em;">Strengthening Human Resource Competence</h4>
                            <p class="card-text" style="color: white; font-size: 1.1em; line-height: 1.6;">
                                Implementing continuous development and training for employees to ensure they possess the skills and knowledge in line with the advancements in electrical technology.
                            </p>
                            <button class="flip-btn" onclick="flipCard(this)">Back</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Misi 6 -->
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="card mission-card">
                    <div class="mission-card-inner">
                        <div class="card-front card-body text-center p-4">
                            <div class="mb-3">
                                <img src="{{ asset('assets/img/6.png') }}" alt="Safety" class="img-fluid">
                            </div>
                            <h4 class="card-title">Mengedepankan Keselamatan dan Keamanan Kerja</h4>
                            <p class="card-text">
                                Memastikan seluruh pekerjaan dilakukan sesuai standar keselamatan dan keamanan, baik bagi karyawan maupun pelanggan, demi meminimalkan risiko.
                            </p>
                            <button class="flip-btn" onclick="flipCard(this)">Learn More</button>
                        </div>
                        <div class="card-back card-body text-center p-4">
                            <h4 class="card-title" style="color: white; font-size: 1.6em;">Prioritizing Workplace Safety and Security</h4>
                            <p class="card-text" style="color: white; font-size: 1.1em; line-height: 1.6;">
                                Ensuring that all work is carried out in accordance with safety and security standards, for both employees and customers, to minimize risks.
                            </p>
                            <button class="flip-btn" onclick="flipCard(this)">Back</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Misi 7 -->
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                <div class="card mission-card">
                    <div class="mission-card-inner">
                        <div class="card-front card-body text-center p-4">
                            <div class="mb-3">
                                <img src="{{ asset('assets/img/7.png') }}" alt="Partnership" class="img-fluid">
                            </div>
                            <h4 class="card-title">Membangun Kemitraan yang Kuat</h4>
                            <p class="card-text">
                                Meningkatkan kerja sama dengan pihak terkait seperti pemerintah, industri, dan masyarakat dalam rangka menyediakan solusi kelistrikan yang komprehensif.
                            </p>
                            <button class="flip-btn" onclick="flipCard(this)">Learn More</button>
                        </div>
                        <div class="card-back card-body text-center p-4">
                            <h4 class="card-title" style="color: white; font-size: 1.6em;">Building Strong Partnerships</h4>
                            <p class="card-text" style="color: white; font-size: 1.1em; line-height: 1.6;">
                                Enhancing cooperation with relevant stakeholders such as the government, industry, and the community to provide comprehensive electrical solutions.
                            </p>
                            <button class="flip-btn" onclick="flipCard(this)">Back</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Misi 8 -->
            <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="800">
                <div class="card mission-card">
                    <div class="mission-card-inner">
                        <div class="card-front card-body text-center p-4">
                            <div class="mb-3">
                                <img src="{{ asset('assets/img/8.png') }}" alt="Environment" class="img-fluid">
                            </div>
                            <h4 class="card-title">Mengurangi Dampak Lingkungan</h4>
                            <p class="card-text">
                                Mengoptimalkan penggunaan teknologi ramah lingkungan dan meningkatkan efisiensi energi dalam setiap proyek kelistrikan.
                            </p>
                            <button class="flip-btn" onclick="flipCard(this)">Learn More</button>
                        </div>
                        <div class="card-back card-body text-center p-4">
                            <h4 class="card-title" style="color: white; font-size: 1.6em;">Reducing Environmental Impact</h4>
                            <p class="card-text" style="color: white; font-size: 1.1em; line-height: 1.6;">
                                Optimizing the use of environmentally friendly technology and improving energy efficiency in every electrical project.
                            </p>
                            <button class="flip-btn" onclick="flipCard(this)">Back</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function flipCard(button) {
            const card = button.closest('.mission-card');
            card.classList.toggle('flipped');
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Add click animation to mission cards (only for front side)
            const missionCards = document.querySelectorAll('.mission-card');

            missionCards.forEach(card => {
                // Remove the old click event that was adding pulse
                // Now handled by flip buttons

                // Add mouse enter/leave effects for icons
                const icon = card.querySelector('img');
                if (icon) {
                    card.addEventListener('mouseenter', function() {
                        icon.style.filter = 'brightness(1.2) drop-shadow(0 0 8px rgba(255, 87, 34, 0.5))';
                    });

                    card.addEventListener('mouseleave', function() {
                        icon.style.filter = '';
                    });
                }
            });

            // Smooth scroll for the "Lihat Misi Kami" button
            const missionButton = document.querySelector('a[href="#mission-section"]');
            if (missionButton) {
                missionButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.getElementById('mission-section');
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            }

            // Add intersection observer for enhanced animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Initially hide cards and observe them
            missionCards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });
        });
    </script>

    <style>
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
    </style>
@endsection
