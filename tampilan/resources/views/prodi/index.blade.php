@extends('layouts.landing')
@section('title', 'Program Studi')
@section('content')
    <!-- Hero Section -->
    <section class="hero-section" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative; padding: 120px 0 80px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content text-white">
                        <h1 class="display-4 fw-bold mb-3" style="font-size: 3.5rem;">Program Studi</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" style="background: transparent; color: rgba(255,255,255,0.8);">
                                <li class="breadcrumb-item"><a href="{{ route('any', 'index') }}" class="text-white-50">Home</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Program Studi</li>
                            </ol>
                        </nav>
                    </div>
                {{-- </div>
                <div class="col-lg-6 text-center">
                    <div class="hero-image">
                        <img src="/img/logo/Logo.png" alt="JTIK Logo" style="max-height: 120px; filter: brightness(0) invert(1);">
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- Abstract Elements -->
        <div class="hero-elements">
            <div class="element element-1"></div>
            <div class="element element-2"></div>
            <div class="element element-3"></div>
        </div>
    </section>

    <!-- Program Studi Grid -->
    <section class="prodi-grid-section py-5" style="background: #f8fafc;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-3">Program Studi JTIK POLSUB</h2>
                    <p class="section-subtitle text-muted">Pilih program studi yang sesuai dengan minat dan karir masa depan Anda</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-6 col-xl-3">
                    <div class="prodi-card">
                        <div class="prodi-card-image">
                            <img src="/img/studies/d3si.jpg" alt="D3 Sistem Informasi" class="img-fluid">
                            <span class="prodi-badge">D3 Sistem Informasi</span>
                            <div class="prodi-card-overlay">
                                <div class="prodi-card-content">
                                    <h3>D3 Sistem Informasi</h3>
                                    <p>Program Diploma 3 yang berfokus pada pengembangan sistem informasi, aplikasi bisnis, dan teknologi digital untuk dunia industri dan pemerintahan.</p>
                                    <a href="{{ url('prodi/d3si') }}" class="btn btn-primary">Detail D3SI</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3">
                    <div class="prodi-card">
                        <div class="prodi-card-image">
                            <img src="/img/studies/d3ak.jpg" alt="D3 Akuntansi" class="img-fluid">
                            <span class="prodi-badge">D3 Akuntansi</span>
                            <div class="prodi-card-overlay">
                                <div class="prodi-card-content">
                                    <h3>D3 Akuntansi</h3>
                                    <p>Program Diploma 3 yang berfokus pada akuntansi, keuangan, dan pengelolaan data keuangan untuk dunia bisnis dan pemerintahan.</p>
                                    <a href="{{ url('prodi/d3ak') }}" class="btn btn-warning">Detail D3AK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3">
                    <div class="prodi-card">
                        <div class="prodi-card-image">
                            <img src="/img/studies/d4trpl.jpg" alt="D4 Teknologi Rekayasa Perangkat Lunak" class="img-fluid">
                            <span class="prodi-badge">D4 TRPL</span>
                            <div class="prodi-card-overlay">
                                <div class="prodi-card-content">
                                    <h3>D4 Teknologi Rekayasa Perangkat Lunak</h3>
                                    <p>Program Sarjana Terapan yang menekankan pada pengembangan perangkat lunak, rekayasa sistem, dan inovasi teknologi untuk kebutuhan industri 4.0.</p>
                                    <a href="{{ url('prodi/d4trpl') }}" class="btn btn-success">Detail D4TRPL</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-3">
                    <div class="prodi-card">
                        <div class="prodi-card-image">
                            <img src="/img/studies/d4bd.jpg" alt="D4 Bisnis Digital" class="img-fluid">
                            <span class="prodi-badge">D4 Bisnis Digital</span>
                            <div class="prodi-card-overlay">
                                <div class="prodi-card-content">
                                    <h3>D4 Bisnis Digital</h3>
                                    <p>Program Sarjana Terapan yang menekankan pada transformasi digital, e-commerce, dan strategi bisnis digital untuk era teknologi modern.</p>
                                    <a href="{{ url('prodi/d4bd') }}" class="btn btn-info">Detail D4BD</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- Visi & Misi Section -->
    <section class="vision-mission-section py-5" style="background: white;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="vision-mission-card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="vision-content">
                                    <h2 class="section-title mb-4">Visi</h2>
                                    <p class="vision-text">Menjadi jurusan unggul dalam bidang teknologi informasi dan komputer yang inovatif, adaptif, dan berdaya saing global.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mission-content">
                                    <h2 class="section-title mb-4">Misi</h2>
                                    <ul class="mission-list">
                                        <li>Menyelenggarakan pendidikan berkualitas di bidang teknologi informasi dan komputer.</li>
                                        <li>Mengembangkan penelitian dan inovasi yang bermanfaat bagi masyarakat dan industri.</li>
                                        <li>Menjalin kerjasama dengan dunia usaha, industri, dan institusi pendidikan lain.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Keunggulan Section -->
    <section class="advantages-section py-5" style="background: #f8fafc;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-3">Keunggulan JTIK POLSUB</h2>
                    <p class="section-subtitle text-muted">Mengapa memilih JTIK POLSUB untuk masa depan karir Anda</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="advantage-card">
                        <div class="advantage-icon">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <h5>Fasilitas Modern</h5>
                        <p>Laboratorium komputer, ruang kelas multimedia, dan akses internet cepat untuk mendukung pembelajaran.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advantage-card">
                        <div class="advantage-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h5>Dosen Profesional</h5>
                        <p>Tenaga pengajar berpengalaman di bidang teknologi informasi, lulusan S2 dan S3 dari universitas ternama.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="advantage-card">
                        <div class="advantage-icon">
                            <i class="bi bi-lightning-fill"></i>
                        </div>
                        <h5>Koneksi Industri</h5>
                        <p>Kerjasama dengan perusahaan IT, magang industri, dan peluang kerja luas bagi lulusan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    {{-- <section class="cta-section py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-3">Transform Your Future</h2>
                    <p class="text-white-50 mb-4">Bergabunglah dengan JTIK POLSUB dan wujudkan impian karir Anda di bidang teknologi informasi</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('second', ['pages', 'contact']) }}" class="btn btn-light btn-lg">Contact Us Today</a>
                </div>
            </div>
        </div>
    </section> --}}
@endsection

<style>
/* Hero Section */
.hero-section {
    position: relative;
    overflow: hidden;
}

.hero-elements {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
}

.element {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.1);
}

.element-1 {
    width: 100px;
    height: 100px;
    top: 20%;
    right: 10%;
    animation: float 6s ease-in-out infinite;
}

.element-2 {
    width: 60px;
    height: 60px;
    top: 60%;
    right: 20%;
    animation: float 8s ease-in-out infinite reverse;
}

.element-3 {
    width: 80px;
    height: 80px;
    top: 40%;
    right: 5%;
    animation: float 7s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

/* Section Titles */
.section-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: 1rem;
}

.section-subtitle {
    font-size: 1.1rem;
    color: #718096;
}

/* Program Studi Cards */
.prodi-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);
    transition: all 0.3s ease;
    height: 400px;
}

.prodi-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 25px rgba(0, 0, 0, 0.1);
}

.prodi-card-image {
    position: relative;
    height: 100%;
    overflow: hidden;
}

.prodi-badge {
    position: absolute;
    top: 12px;
    left: 12px;
    background: rgba(0, 0, 0, 0.7);
    color: #fff;
    padding: 6px 12px;
    border-radius: 999px;
    font-size: 0.85rem;
    font-weight: 600;
    letter-spacing: 0.3px;
    z-index: 2;
    backdrop-filter: blur(4px);
    border: 1px solid rgba(255, 255, 255, 0.15);
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}

.prodi-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.prodi-card:hover .prodi-card-image img {
    transform: scale(1.1);
}

.prodi-card-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
    color: white;
    padding: 2rem 1.5rem 1.5rem;
    transform: translateY(100%);
    transition: transform 0.3s ease;
}

.prodi-card:hover .prodi-card-overlay {
    transform: translateY(0);
}

.prodi-card-content h3 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.prodi-card-content p {
    font-size: 0.9rem;
    margin-bottom: 1rem;
    opacity: 0.9;
}

/* Vision Mission Card */
.vision-mission-card {
    background: white;
    border-radius: 16px;
    padding: 3rem;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
}

.vision-text {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #4a5568;
}

.mission-list {
    list-style: none;
    padding: 0;
}

.mission-list li {
    position: relative;
    padding-left: 1.5rem;
    margin-bottom: 1rem;
    font-size: 1.1rem;
    line-height: 1.6;
    color: #4a5568;
}

.mission-list li:before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #667eea;
    font-weight: bold;
}

/* Advantage Cards */
.advantage-card {
    background: white;
    border-radius: 12px;
    padding: 2rem;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);
    transition: transform 0.3s ease;
    height: 100%;
}

.advantage-card:hover {
    transform: translateY(-5px);
}

.advantage-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    color: white;
    font-size: 2rem;
}

.advantage-card h5 {
    font-weight: 600;
    margin-bottom: 1rem;
    color: #2d3748;
}

.advantage-card p {
    color: #718096;
    line-height: 1.6;
}

/* CTA Section */
.cta-section {
    position: relative;
    overflow: hidden;
}

.btn-light {
    background: white;
    color: #667eea;
    border: none;
    font-weight: 600;
    padding: 0.75rem 2rem;
    border-radius: 50px;
    transition: all 0.3s ease;
}

.btn-light:hover {
    background: #f7fafc;
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

/* Responsive */
@media (max-width: 768px) {
    .section-title {
        font-size: 2rem;
    }

    .prodi-card {
        height: 350px;
    }

    .vision-mission-card {
        padding: 2rem;
    }
}
</style>
