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
                                Budaya Perusahaan</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endpush

@section('content')
    <style>
        .section-heading {
            color: #1e40af;
            font-weight: bold;
            margin-bottom: 20px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .lead {
            color: #374151;
            font-size: 1.2em;
            font-style: italic;
        }
        .smart-card {
            background: linear-gradient(135deg, #6973dcff 0%, #0c38ea69 100%);
            color: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
            padding: 4px;
            border-radius: 25px;
        }
        .smart-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
            border-radius: 25px;
        }
        .smart-card::after {
            content: '';
            position: absolute;
            top: 4px;
            left: 4px;
            right: 4px;
            bottom: 4px;
            background: linear-gradient(135deg, #0000007f 0%, #0c26ea6c 100%);
            border-radius: 21px;
            z-index: -1;
        }
        .smart-card:hover::before {
            left: 100%;
        }
        .smart-card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 15px 35px rgba(0,0,0,0.3);
        }
        .culture-card {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            border: 1px solid #ffffffff;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }
        .culture-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(30,64,175,0.1) 0%, rgba(55,65,81,0.1) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        .culture-card:hover::after {
            opacity: 1;
        }
        .culture-card:hover {
            transform: translateY(-8px) rotate(1deg);
            box-shadow: 0 12px 25px rgba(0,0,0,0.2);
            border-color: #ffffffff;
        }
        .card-title {
            color: #0000008f;
            font-weight: bold;
            margin-bottom: 15px;
            transition: color 0.3s ease;
        }
        .culture-card:hover .card-title {
            color: #1e3a8a;
        }
        .card-text {
            color: #374151;
            line-height: 1.6;
        }
        .card-text:last-child {
            color: #6b7280;
            font-style: italic;
            font-size: 0.9em;
        }

        /* Animated Counter */
        .counter {
            font-size: 2.5em;
            font-weight: bold;
            color: #1e40af;
            display: inline-block;
        }

        /* Timeline Styles */
        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }
        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background: linear-gradient(to bottom, #1e40af, #374151);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
            border-radius: 3px;
        }
        .timeline-item {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
        }
        .timeline-item::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -17px;
            background: linear-gradient(135deg, #1e40af, #374151);
            border: 4px solid #fff;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }
        .left {
            left: 0;
        }
        .right {
            left: 50%;
        }
        .right::after {
            left: -16px;
        }
        .timeline-content {
            padding: 20px 30px;
            background: linear-gradient(135deg, #f8fafc, #e2e8f0);
            position: relative;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .timeline-content:hover {
            transform: translateY(-5px);
        }

        /* Floating Animation */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }

        /* Pulse Animation */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        .pulse-animation {
            animation: pulse 2s infinite;
        }

        /* Particle Background */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }
        .particle {
            position: absolute;
            background: rgba(30, 64, 175, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }
        .particle:nth-child(1) { width: 20px; height: 20px; left: 10%; animation-delay: 0s; }
        .particle:nth-child(2) { width: 15px; height: 15px; left: 20%; animation-delay: 1s; }
        .particle:nth-child(3) { width: 25px; height: 25px; left: 30%; animation-delay: 2s; }
        .particle:nth-child(4) { width: 18px; height: 18px; left: 40%; animation-delay: 3s; }
        .particle:nth-child(5) { width: 22px; height: 22px; left: 50%; animation-delay: 4s; }
        .particle:nth-child(6) { width: 16px; height: 16px; left: 60%; animation-delay: 5s; }
        .particle:nth-child(7) { width: 28px; height: 28px; left: 70%; animation-delay: 6s; }
        .particle:nth-child(8) { width: 14px; height: 14px; left: 80%; animation-delay: 7s; }
        .particle:nth-child(9) { width: 24px; height: 24px; left: 90%; animation-delay: 8s; }
        .particle:nth-child(10) { width: 19px; height: 19px; left: 95%; animation-delay: 9s; }
    </style>

    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-8">
            <h1 class="section-heading" data-aos="fade-up">BUDAYA PERUSAHAAN</h1>
            <p class="lead" data-aos="fade-up" data-aos-delay="200">Nilai-nilai yang Mendorong Kami Menuju Kesuksesan Bersama</p>
        </div>
    </div>
    <!-- Nilai Utama -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="card shadow-lg smart-card position-relative" style="border: none; border-radius: 25px; overflow: hidden;" data-aos="zoom-in">
                <div class="particles">
                    <div class="particle"></div>
                    <div class="particle"></div>
                    <div class="particle"></div>
                    <div class="particle"></div>
                    <div class="particle"></div>
                    <div class="particle"></div>
                    <div class="particle"></div>
                    <div class="particle"></div>
                    <div class="particle"></div>
                    <div class="particle"></div>
                </div>
                <div class="card-body text-center p-5">
                    <h3 class="card-title float-animation" style="font-size: 4em; font-family: 'Times New Roman', serif; margin: 0; text-shadow: 0 4px 8px rgba(0,0,0,0.4);">SMART</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Budaya Perusahaan -->
    <div class="row">
        <!-- SYNERGY -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100 culture-card" style="border-radius: 20px; overflow: hidden;" data-aos="fade-up" data-aos-delay="100">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/synergy.png') }}" alt="Synergy" class="img-fluid float-animation" style="max-width: 80px; filter: drop-shadow(0 4px 8px rgba(0,0,0,0.2));">
                    </div>
                    <h4 class="card-title">SYNERGY</h4>
                    <p class="card-text">
                        Membangun lingkungan kerja yang mendorong untuk melakukan kolaborasi antar individu dan tim untuk bisa mencapai tujuan bersama.
                    </p>
                    <p class="card-text">
                        Building a work environment that encourages collaboration between individuals and teams to achieve common goals.
                    </p>
                </div>
            </div>
        </div>

        <!-- MOTIVATION -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100 culture-card" style="border-radius: 20px; overflow: hidden;" data-aos="fade-up" data-aos-delay="200">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/motivasi.png') }}" alt="Motivation" class="img-fluid float-animation" style="max-width: 80px; filter: drop-shadow(0 4px 8px rgba(0,0,0,0.2));">
                    </div>
                    <h4 class="card-title">MOTIVATION</h4>
                    <p class="card-text">
                        Mendorong semua individu dan tim untuk bisa mencapai tujuan, serta dapat menghadapi tantangan dan terus selalu bersemangat, serta fokus pada apa yang ingin dicapai.
                    </p>
                    <p class="card-text">
                        Encouraging all individuals and teams to achieve their goals, face challenges, stay motivated, and remain focused on what they want to accomplish.
                    </p>
                </div>
            </div>
        </div>

        <!-- AKHLAK -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100 culture-card" style="border-radius: 20px; overflow: hidden;" data-aos="fade-up" data-aos-delay="300">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/morals.png') }}" alt="Morals" class="img-fluid float-animation" style="max-width: 80px; filter: drop-shadow(0 4px 8px rgba(0,0,0,0.2));">
                    </div>
                    <h4 class="card-title">AKHLAK</h4>
                    <p class="card-text">
                        Mendorong semua individu dan tim untuk memiliki nilai nilai moral, etika dan integritas kepada semua Stakeholder untuk bisa membentuk hubungan yang harmonis.
                    </p>
                    <p class="card-text">
                        Encouraging all individuals and teams to uphold moral values, ethics, and integrity with all stakeholders in order to build harmonious relationships.
                    </p>
                </div>
            </div>
        </div>

        <!-- RESPECT -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100 culture-card" style="border-radius: 20px; overflow: hidden;" data-aos="fade-up" data-aos-delay="400">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/respect.png') }}" alt="Respect" class="img-fluid float-animation" style="max-width: 80px; filter: drop-shadow(0 4px 8px rgba(0,0,0,0.2));">
                    </div>
                    <h4 class="card-title">RESPECT</h4>
                    <p class="card-text">
                        Mendorong semua individu dan tim untuk selalu menghargai, menghormati dan memperlakukan orang lain dengan penuh penghargaan, baik dalam ucapan, tindakan, maupun pikiran.
                    </p>
                    <p class="card-text">
                        Encouraging all individuals and teams to always appreciate, respect, and treat others with full regard, in words, actions, and thoughts.
                    </p>
                </div>
            </div>
        </div>

        <!-- TARGET -->
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm h-100 culture-card" style="border-radius: 20px; overflow: hidden;" data-aos="fade-up" data-aos-delay="500">
                <div class="card-body text-center p-4">
                    <div class="mb-3">
                        <img src="{{ asset('assets/img/target.png') }}" alt="Target" class="img-fluid float-animation" style="max-width: 80px; filter: drop-shadow(0 4px 8px rgba(0,0,0,0.2));">
                    </div>
                    <h4 class="card-title">TARGET</h4>
                    <p class="card-text">
                        Mendorong semua individu dan tim untuk selalu memiliki tujuan atau sasaran yang spesifik, relevan, jelas dan terukur. Serta menciptakan rasa urgensi dan mendorong tindakan yang lebih terencana dalam menyelesaikan semua pekerjaan.
                    </p>
                    <p class="card-text">
                        Encouraging all individuals and teams to always have specific, relevant, clear, and measurable goals or objectives.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Company Timeline -->
    <!-- <div class="row justify-content-center mt-5 mb-5">
        <div class="col-12">
            <h2 class="text-center mb-5" style="color: #1e40af; font-weight: bold;" data-aos="fade-up">Perjalanan Kami</h2>
            <div class="timeline">
                <div class="timeline-item left" data-aos="fade-right">
                    <div class="timeline-content">
                        <h4 style="color: #1e40af;">2019</h4>
                        <p>Berdiri dan memulai operasional PT Aliansi Prima Energi dengan visi memberikan solusi energi terdepan.</p>
                    </div>
                </div>
                <div class="timeline-item right" data-aos="fade-left">
                    <div class="timeline-content">
                        <h4 style="color: #1e40af;">2020</h4>
                        <p>Mengembangkan tim profesional dan menyelesaikan proyek-proyek awal dengan standar kualitas tinggi.</p>
                    </div>
                </div>
                <div class="timeline-item left" data-aos="fade-right">
                    <div class="timeline-content">
                        <h4 style="color: #1e40af;">2021</h4>
                        <p>Memperluas jangkauan layanan dan membangun kemitraan strategis dengan berbagai perusahaan terkemuka.</p>
                    </div>
                </div>
                <div class="timeline-item right" data-aos="fade-left">
                    <div class="timeline-content">
                        <h4 style="color: #1e40af;">2022</h4>
                        <p>Menerapkan nilai-nilai SMART sebagai budaya perusahaan dan mencapai milestone 50+ proyek selesai.</p>
                    </div>
                </div>
                <div class="timeline-item left" data-aos="fade-right">
                    <div class="timeline-content">
                        <h4 style="color: #1e40af;">2023</h4>
                        <p>Menjadi perusahaan energi terpercaya dengan tim yang solid dan komitmen terhadap inovasi berkelanjutan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <script>
        // Animated Counter
        function animateCounter(element, target) {
            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    element.textContent = target;
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current);
                }
            }, 30);
        }

        // Intersection Observer for counters
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = parseInt(counter.getAttribute('data-target'));
                    animateCounter(counter, target);
                    observer.unobserve(counter);
                }
            });
        }, observerOptions);

        // Observe all counters
        document.querySelectorAll('.counter').forEach(counter => {
            observer.observe(counter);
        });

        // Add click interaction to culture cards
        document.querySelectorAll('.culture-card').forEach(card => {
            card.addEventListener('click', function() {
                this.style.transform = this.style.transform.includes('rotate(1deg)') ?
                    'translateY(-8px) rotate(1deg)' : 'translateY(-8px) rotate(-1deg)';
                setTimeout(() => {
                    this.style.transform = 'translateY(-8px) rotate(1deg)';
                }, 150);
            });
        });
    </script>

@endsection
