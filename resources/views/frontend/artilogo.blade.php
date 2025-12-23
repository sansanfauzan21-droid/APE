@extends('frontend.layouts.main')

@push('hero')
<section class="hero-section inner-page" style="padding-bottom: 120px;">
    <svg width="0" height="0">
        <defs>
            <clipPath id="hero-clip" clipPathUnits="objectBoundingBox">
                <path
                    d="M0,0 L1,0 L1, 0.85
    C0.9, 0.90 0.7, 0.90 0.5, 0.85
    C0.3, 0.80 0.1, 0.85 0, 0.88 Z" />
            </clipPath>
        </defs>
    </svg>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center hero-text">
                        <h1 data-aos="fade-up" data-aos-delay="100" class="display-4 fw-bold text-white mb-4">
                            Arti Logo
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endpush

@section('content')
<div id="logo-section" class="row justify-content-center text-center mb-5">
    <div class="col-md-8">
        <h1 class="section-heading" data-aos="fade-up" style="color: #333; font-weight: bold; margin-bottom: 20px;">ARTI LOGO ALIANSI PRIMA ENERGI</h1>
        <p class="lead" data-aos="fade-up" data-aos-delay="200" style="color: #666; font-size: 1.2em;">Makna dan Filosofi di Balik Identitas Visual Kami</p>
    </div>
</div>

<!-- Logo Utama -->
<div class="row justify-content-center mb-5">
    <div class="col-md-8 text-center">
        <div class="card shadow-lg logo-main-card" data-aos="zoom-in" style="border: none; border-radius: 25px; overflow: hidden; background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);">
            <div class="card-body p-5">
                <div class="logo-container mb-4" style="position: relative;">
                    <div class="logo-glow" style="position: absolute; top: -10px; left: 50%; transform: translateX(-50%); width: 280px; height: 280px; background: radial-gradient(circle, rgba(255, 165, 0, 0.1) 0%, transparent 70%); border-radius: 50%; z-index: 1;"></div>
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo Aliansi Prima Energi" class="img-fluid logo-image" style="max-width: 250px; position: relative; z-index: 2; transition: all 0.3s ease;">
                </div>
                <h3 class="card-title" style="color: #FFA500; font-weight: bold; font-size: 2.2em; margin-bottom: 1rem;">Logo Utama</h3>
                <p class="card-text" style="color: #555; font-size: 1.1em; line-height: 1.6; max-width: 600px; margin: 0 auto;">
                    Logo Aliansi Prima Energi melambangkan kekuatan, kehandalan, dan inovasi dalam bidang jasa ketenagalistrikan.
                    Setiap elemen desain memiliki makna filosofis yang mendalam.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Elemen-elemen Logo -->
<div class="row">
    <!-- Berpegangan Tangan -->
    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card logo-element-card h-100" style="border: none; border-radius: 20px; overflow: hidden; background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); cursor: pointer;">
            <div class="card-body text-center p-4">
                <div class="icon-container mb-3" style="position: relative;">
                    <div class="icon-bg" style="position: absolute; top: -5px; left: 50%; transform: translateX(-50%); width: 90px; height: 90px; background: radial-gradient(circle, rgba(255, 165, 0, 0.1) 0%, transparent 70%); border-radius: 50%; transition: all 0.3s ease;"></div>
                    <img src="{{ asset('assets/img/berpegangan.png') }}" alt="Berpegangan Tangan" class="img-fluid logo-icon" style="max-width: 80px; position: relative; z-index: 1; transition: all 0.3s ease;">
                </div>
                <h4 class="card-title" style="color: #FFA500; font-weight: bold; font-size: 1.4em; margin-bottom: 1rem; transition: all 0.3s ease;">Berpegangan Tangan</h4>
                <p class="card-text" style="color: #555; line-height: 1.6; font-size: 1em;">
                    Melambangkan kebersamaan, kekuatan, persatuan dan dukungan antar individu yang saling terikat.
                    Berpegangan tangan yang dilakukan oleh empat orang menunjukkan bahwa setiap individu memiliki peran penting.
                </p>
                <p class="card-text" style="color: #888; font-style: italic; font-size: 0.9em;">
                    Holding hands symbolizes togetherness, strength, unity, and mutual support between individuals who are connected.
                </p>
            </div>
        </div>
    </div>

    <!-- Kincir Angin -->
    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card logo-element-card h-100" style="border: none; border-radius: 20px; overflow: hidden; background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); cursor: pointer;">
            <div class="card-body text-center p-4">
                <div class="icon-container mb-3" style="position: relative;">
                    <div class="icon-bg" style="position: absolute; top: -5px; left: 50%; transform: translateX(-50%); width: 90px; height: 90px; background: radial-gradient(circle, rgba(255, 165, 0, 0.1) 0%, transparent 70%); border-radius: 50%; transition: all 0.3s ease;"></div>
                    <img src="{{ asset('assets/img/kincir.png') }}" alt="Kincir Angin" class="img-fluid logo-icon" style="max-width: 80px; position: relative; z-index: 1; transition: all 0.3s ease;">
                </div>
                <h4 class="card-title" style="color: #FFA500; font-weight: bold; font-size: 1.4em; margin-bottom: 1rem; transition: all 0.3s ease;">Kincir Angin</h4>
                <p class="card-text" style="color: #555; line-height: 1.6; font-size: 1em;">
                    Melambangkan pemanfaatan sumber daya alam dengan bijak, ketekunan, dan kemampuan mengubah tantangan menjadi peluang.
                    Kincir angin mengajarkan kesabaran dan pentingnya timing dalam mencapai tujuan.
                </p>
                <p class="card-text" style="color: #888; font-style: italic; font-size: 0.9em;">
                    The windmill symbolizes the wise utilization of natural resources, perseverance, and the ability to turn challenges into opportunities.
                </p>
            </div>
        </div>
    </div>

    <!-- Petir -->
    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="card logo-element-card h-100" style="border: none; border-radius: 20px; overflow: hidden; background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); cursor: pointer;">
            <div class="card-body text-center p-4">
                <div class="icon-container mb-3" style="position: relative;">
                    <div class="icon-bg" style="position: absolute; top: -5px; left: 50%; transform: translateX(-50%); width: 90px; height: 90px; background: radial-gradient(circle, rgba(255, 165, 0, 0.1) 0%, transparent 70%); border-radius: 50%; transition: all 0.3s ease;"></div>
                    <img src="{{ asset('assets/img/petir.png') }}" alt="Petir" class="img-fluid logo-icon" style="max-width: 80px; position: relative; z-index: 1; transition: all 0.3s ease;">
                </div>
                <h4 class="card-title" style="color: #FFA500; font-weight: bold; font-size: 1.4em; margin-bottom: 1rem; transition: all 0.3s ease;">Petir</h4>
                <p class="card-text" style="color: #555; line-height: 1.6; font-size: 1em;">
                    Melambangkan kekuatan, ketegasan, dan perubahan mendadak yang dapat mengubah keadaan dalam sekejap.
                    Petir juga mampu bersinar ditengah ketidakpastian dan menghadapi tantangan tanpa rasa takut.
                </p>
                <p class="card-text" style="color: #888; font-style: italic; font-size: 0.9em;">
                    Lightning symbolizes strength, decisiveness, and sudden change that can transform a situation in an instant.
                </p>
            </div>
        </div>
    </div>

    <!-- Warna Jingga -->
    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
        <div class="card logo-element-card h-100" style="border: none; border-radius: 20px; overflow: hidden; background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); cursor: pointer;">
            <div class="card-body text-center p-4">
                <div class="icon-container mb-3" style="position: relative;">
                    <div class="icon-bg" style="position: absolute; top: -5px; left: 50%; transform: translateX(-50%); width: 90px; height: 90px; background: radial-gradient(circle, rgba(255, 165, 0, 0.1) 0%, transparent 70%); border-radius: 50%; transition: all 0.3s ease;"></div>
                    <img src="{{ asset('assets/img/warnaorange.png') }}" alt="Warna Jingga" class="img-fluid logo-icon" style="max-width: 80px; position: relative; z-index: 1; transition: all 0.3s ease;">
                </div>
                <h4 class="card-title" style="color: #FFA500; font-weight: bold; font-size: 1.4em; margin-bottom: 1rem; transition: all 0.3s ease;">Warna Jingga</h4>
                <p class="card-text" style="color: #555; line-height: 1.6; font-size: 1em;">
                    Melambangkan antusiasme, energi, dan kreativitas. Warna ini sering diasosiasikan dengan kehangatan, semangat, dan optimisme.
                    Warna jingga juga membawa kesan ramah dan memotivasi.
                </p>
                <p class="card-text" style="color: #888; font-style: italic; font-size: 0.9em;">
                    The orange color symbolizes enthusiasm, energy, and creativity. It is often associated with warmth, spirit, and optimism.
                </p>
            </div>
        </div>
    </div>

    <!-- Warna Hijau Muda -->
    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
        <div class="card logo-element-card h-100" style="border: none; border-radius: 20px; overflow: hidden; background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); cursor: pointer;">
            <div class="card-body text-center p-4">
                <div class="icon-container mb-3" style="position: relative;">
                    <div class="icon-bg" style="position: absolute; top: -5px; left: 50%; transform: translateX(-50%); width: 90px; height: 90px; background: radial-gradient(circle, rgba(255, 165, 0, 0.1) 0%, transparent 70%); border-radius: 50%; transition: all 0.3s ease;"></div>
                    <img src="{{ asset('assets/img/warnahijau.png') }}" alt="Warna Hijau Muda" class="img-fluid logo-icon" style="max-width: 80px; position: relative; z-index: 1; transition: all 0.3s ease;">
                </div>
                <h4 class="card-title" style="color: #FFA500; font-weight: bold; font-size: 1.4em; margin-bottom: 1rem; transition: all 0.3s ease;">Warna Hijau Muda</h4>
                <p class="card-text" style="color: #555; line-height: 1.6; font-size: 1em;">
                    Melambangkan pertumbuhan, pembaruan, dan kesehatan. Hijau muda mengingatkan pada alam, kesegaran, dan kemurnian.
                    Warna ini mencerminkan kebangkitan, perkembangan, dan optimisme.
                </p>
                <p class="card-text" style="color: #888; font-style: italic; font-size: 0.9em;">
                    Light green symbolizes growth, renewal, and health. It reminds us of nature, freshness, and purity.
                </p>
            </div>
        </div>
    </div>

    <!-- Warna Biru Muda -->
    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
        <div class="card logo-element-card h-100" style="border: none; border-radius: 20px; overflow: hidden; background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); cursor: pointer;">
            <div class="card-body text-center p-4">
                <div class="icon-container mb-3" style="position: relative;">
                    <div class="icon-bg" style="position: absolute; top: -5px; left: 50%; transform: translateX(-50%); width: 90px; height: 90px; background: radial-gradient(circle, rgba(255, 165, 0, 0.1) 0%, transparent 70%); border-radius: 50%; transition: all 0.3s ease;"></div>
                    <img src="{{ asset('assets/img/warnabirum.png') }}" alt="Warna Biru Muda" class="img-fluid logo-icon" style="max-width: 80px; position: relative; z-index: 1; transition: all 0.3s ease;">
                </div>
                <h4 class="card-title" style="color: #FFA500; font-weight: bold; font-size: 1.4em; margin-bottom: 1rem; transition: all 0.3s ease;">Warna Biru Muda</h4>
                <p class="card-text" style="color: #555; line-height: 1.6; font-size: 1em;">
                    Melambangkan ketenangan, kedamaian, dan kepercayaan. Warna biru muda sering dihubungkan dengan rasa tenang dan suasana yang santai.
                    Ia juga menginspirasi rasa percaya diri dan keandalan.
                </p>
                <p class="card-text" style="color: #888; font-style: italic; font-size: 0.9em;">
                    The color light blue symbolizes calmness, peace, and trust. Light blue is often associated with a sense of tranquility.
                </p>
            </div>
        </div>
    </div>

    <!-- Warna Hitam -->
    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
        <div class="card logo-element-card h-100" style="border: none; border-radius: 20px; overflow: hidden; background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1); transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); cursor: pointer;">
            <div class="card-body text-center p-4">
                <div class="icon-container mb-3" style="position: relative;">
                    <div class="icon-bg" style="position: absolute; top: -5px; left: 50%; transform: translateX(-50%); width: 90px; height: 90px; background: radial-gradient(circle, rgba(255, 165, 0, 0.1) 0%, transparent 70%); border-radius: 50%; transition: all 0.3s ease;"></div>
                    <img src="{{ asset('assets/img/warnahitam.png') }}" alt="Warna Hitam" class="img-fluid logo-icon" style="max-width: 80px; position: relative; z-index: 1; transition: all 0.3s ease;">
                </div>
                <h4 class="card-title" style="color: #FFA500; font-weight: bold; font-size: 1.4em; margin-bottom: 1rem; transition: all 0.3s ease;">Warna Hitam</h4>
                <p class="card-text" style="color: #555; line-height: 1.6; font-size: 1em;">
                    Melambangkan kekuatan, ketegasan, dan misteri. Warna hitam sering dikaitkan dengan keseriusan dan formalitas,
                    tetapi juga bisa menunjukkan kecanggihan dan kekuatan yang tidak tergoyahkan.
                </p>
                <p class="card-text" style="color: #888; font-style: italic; font-size: 0.9em;">
                    The color black symbolizes strength, decisiveness, and mystery. Black is often associated with seriousness and formality.
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    .logo-element-card:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .logo-element-card:hover .card-title {
        color: #FF8C00;
        transform: scale(1.05);
    }

    .logo-element-card:hover .icon-bg {
        transform: translateX(-50%) scale(1.2);
        background: radial-gradient(circle, rgba(255, 165, 0, 0.2) 0%, transparent 70%);
    }

    .logo-element-card:hover .logo-icon {
        transform: scale(1.1);
        filter: brightness(1.2) drop-shadow(0 0 8px rgba(255, 165, 0, 0.5));
    }

    .logo-main-card:hover .logo-glow {
        animation: pulse-glow 2s infinite;
    }

    @keyframes pulse-glow {
        0%, 100% { opacity: 0.3; transform: scale(1); }
        50% { opacity: 0.6; transform: scale(1.05); }
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .logo-element-card {
            margin-bottom: 2rem;
        }

        .card-title {
            font-size: 1.2em !important;
        }

        .card-text {
            font-size: 0.95em !important;
        }
    }

    @media (max-width: 576px) {
        .hero-text h1 {
            font-size: 2.5rem !important;
        }

        .vision-text p {
            font-size: 1rem !important;
        }

        .logo-element-card .card-body {
            padding: 1.5rem !important;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add click animation to logo element cards
        const logoCards = document.querySelectorAll('.logo-element-card');

        logoCards.forEach(card => {
            card.addEventListener('click', function() {
                // Add a pulse effect
                this.style.animation = 'card-pulse 0.6s ease-in-out';

                // Remove animation after it completes
                setTimeout(() => {
                    this.style.animation = '';
                }, 600);
            });
        });

        // Smooth scroll for the "Jelajahi Logo Kami" button
        const logoButton = document.querySelector('a[href="#logo-section"]');
        if (logoButton) {
            logoButton.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.getElementById('logo-section');
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        }

        // Add card pulse animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes card-pulse {
                0% { transform: scale(1); }
                50% { transform: scale(1.05); }
                100% { transform: scale(1); }
            }
        `;
        document.head.appendChild(style);

        // Intersection Observer for enhanced animations
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

        // Observe logo cards for scroll animations
        document.querySelectorAll('.logo-element-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    });
</script>

@endsection
