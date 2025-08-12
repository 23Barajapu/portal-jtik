@extends('layouts.landing')

@section('title', $berita->judul)

@section('content')
<!-- ================= Breadcrumb section start ================= -->
<section class="vl-breadcrumb-area" style="margin-top: 0; background: #000e5f;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="vl-breadcrumb-content text-center">
                    <h2 class="vl-breadcrumb-title">{{ Str::limit($berita->judul, 60) }}</h2>
                    <ul class="vl-breadcrumb-list justify-content-center">
                        <li><a href="{{ route('root') }}">Beranda</a></li>
                        <li><a href="{{ route('root') }}#berita">Berita</a></li>
                        <li class="active">{{ Str::limit($berita->judul, 30) }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================= Breadcrumb section End ================= -->

<!-- ================= Berita Detail section start ================= -->
<section class="vl-blog-area pt-100 pb-70" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="vl-blog-single-content bg-white rounded-3 shadow-sm p-4">
                    <!-- Berita Header -->
                    <div class="vl-blog-single-header mb-40">
                        <div class="vl-blog-meta-top mb-3">
                            @if($berita->kategori)
                            <span class="badge fs-6 px-3 py-2" style="background-color: #000e5f;">{{ $berita->kategori->nama }}</span>
                            @endif
                            <span class="text-muted ms-3">
                                <i class="fas fa-calendar-alt me-2"></i>
                                {{ $berita->tanggal->format('d F Y') }}
                            </span>
                        </div>
                        <h1 class="vl-blog-single-title mb-20">{{ $berita->judul }}</h1>
                    </div>

                    <!-- Berita Image -->
                    @if($berita->gambar)
                    <div class="vl-blog-single-image mb-40">
                        @if(str_starts_with($berita->gambar, 'data:image'))
                            <img src="{{ $berita->gambar }}"
                                 alt="{{ $berita->judul }}"
                                 class="img-fluid rounded-3 shadow"
                                 style="width: 100%; max-height: 450px; object-fit: cover;">
                        @else
                            <img src="/storage/berita/{{ $berita->gambar }}"
                                 alt="{{ $berita->judul }}"
                                 class="img-fluid rounded-3 shadow"
                                 style="width: 100%; max-height: 450px; object-fit: cover;">
                        @endif
                    </div>
                    @endif

                    <!-- Berita Content -->
                    <div class="vl-blog-single-content-text">
                        @if($berita->ringkasan)
                        <div class="vl-blog-summary mb-40">
                            <div class="vl-summary-box">
                                <h4 class="vl-summary-title mb-3">
                                    <i class="fas fa-quote-left me-2" style="color: #000e5f;"></i>
                                    Ringkasan
                                </h4>
                                <p class="lead mb-0">{{ $berita->ringkasan }}</p>
                            </div>
                        </div>
                        @endif

                        <div class="vl-blog-content">
                            {!! $berita->isi !!}
                        </div>
                    </div>

                    <!-- Berita Footer -->
                    <div class="vl-blog-single-footer mt-50 pt-30 border-top">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <div class="vl-blog-share">
                                    <h6 class="mb-3 fw-bold text-dark">
                                        <i class="fas fa-share-alt me-2"></i>
                                        Bagikan Berita Ini
                                    </h6>
                                    <div class="d-flex flex-column gap-2">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                                           target="_blank" class="btn btn-sm" style="background-color: #1877f2; border-color: #1877f2; color: white;">
                                            <i class="fab fa-facebook-f me-2"></i> Facebook
                                        </a>
                                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($berita->judul) }}"
                                           target="_blank" class="btn btn-sm" style="background-color: #1da1f2; border-color: #1da1f2; color: white;">
                                            <i class="fab fa-twitter me-2"></i> Twitter
                                        </a>
                                        <a href="https://wa.me/?text={{ urlencode($berita->judul . ' - ' . request()->url()) }}"
                                           target="_blank" class="btn btn-sm" style="background-color: #25d366; border-color: #25d366; color: white;">
                                            <i class="fab fa-whatsapp me-2"></i> WhatsApp
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-md-end">
                                <a href="{{ route('root') }}" class="btn btn-primary">
                                    <i class="fas fa-home me-2"></i> Kembali ke Home
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="vl-blog-sidebar">
                    <!-- Berita Terbaru -->
                    @if($beritaTerbaru->count() > 0)
                    <div class="vl-sidebar-widget mb-40">
                        <h4 class="vl-sidebar-widget-title mb-25">
                            <i class="fas fa-newspaper me-2"></i>
                            Berita Terbaru
                        </h4>
                        <div class="vl-sidebar-widget-content">
                            @foreach($beritaTerbaru as $beritaLain)
                            <div class="vl-sidebar-post-item d-flex align-items-center mb-20">
                                <div class="vl-sidebar-post-image me-3">
                                    @if($beritaLain->gambar)
                                        @if(str_starts_with($beritaLain->gambar, 'data:image'))
                                            <img src="{{ $beritaLain->gambar }}"
                                                 alt="{{ $beritaLain->judul }}"
                                                 style="width: 70px; height: 70px; object-fit: cover; border-radius: 8px;">
                                        @else
                                            <img src="/storage/berita/{{ $beritaLain->gambar }}"
                                                 alt="{{ $beritaLain->judul }}"
                                                 style="width: 70px; height: 70px; object-fit: cover; border-radius: 8px;">
                                        @endif
                                    @else
                                        <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                             style="width: 70px; height: 70px;">
                                            <i class="fas fa-newspaper text-muted"></i>
                                        </div>
                                    @endif
                                </div>
                                <div class="vl-sidebar-post-content">
                                    <h6 class="vl-sidebar-post-title">
                                        <a href="{{ route('berita.detail', $beritaLain->id) }}">
                                            {{ Str::limit($beritaLain->judul, 50) }}
                                        </a>
                                    </h6>
                                    <small class="text-muted">
                                        <i class="fas fa-calendar-alt me-1"></i>
                                        {{ $beritaLain->tanggal->format('d/m/Y') }}
                                    </small>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Kategori -->
                    @if($berita->kategori)
                    <div class="vl-sidebar-widget mb-40">
                        <h4 class="vl-sidebar-widget-title mb-25">
                            <i class="fas fa-tag me-2"></i>
                            Kategori
                        </h4>
                        <div class="vl-sidebar-widget-content">
                            <div class="vl-category-item">
                                <span class="badge fs-6 px-3 py-2" style="background-color: #000e5f;">{{ $berita->kategori->nama }}</span>
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Info Kontak -->
                    <div class="vl-sidebar-widget">
                        <h4 class="vl-sidebar-widget-title mb-25">
                            <i class="fas fa-phone me-2"></i>
                            Hubungi Kami
                        </h4>
                        <div class="vl-sidebar-widget-content">
                            <div class="vl-contact-info">
                                <div class="vl-contact-item d-flex align-items-center mb-3">
                                    <div class="vl-contact-icon me-3">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block">Alamat</small>
                                        <span>Jl. Brigjen Katamso No.37, Subang</span>
                                    </div>
                                </div>
                                <div class="vl-contact-item d-flex align-items-center mb-3">
                                    <div class="vl-contact-icon me-3">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block">Telepon</small>
                                        <span>(0260) 411 413</span>
                                    </div>
                                </div>
                                <div class="vl-contact-item d-flex align-items-center">
                                    <div class="vl-contact-icon me-3">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block">Email</small>
                                        <span>jtik@polsub.ac.id</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================= Berita Detail section End ================= -->

<style>
/* Breadcrumb Styles */
.vl-breadcrumb-area {
    padding: 60px 0;
    color: white;
    position: relative;
    margin-top: 0 !important;
}

.vl-breadcrumb-title {
    font-size: 2rem;
    font-weight: 700;
    margin-top: 60px;
    margin-bottom: 15px;
    line-height: 1.3;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
}

.vl-breadcrumb-list {
    list-style: none;
    padding: 0;
    margin: 0;
    margin-top: 40px;
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.vl-breadcrumb-list li {
    position: relative;
}

.vl-breadcrumb-list li:not(:last-child)::after {
    content: '/';
    margin-left: 15px;
    color: rgba(255,255,255,0.7);
}

.vl-breadcrumb-list a {
    color: rgba(255,255,255,0.9);
    text-decoration: none;
    transition: color 0.3s ease;
    font-weight: 500;
}

.vl-breadcrumb-list a:hover {
    color: white;
    text-decoration: underline;
}

.vl-breadcrumb-list .active {
    color: white;
    font-weight: 600;
}

/* Blog Content Styles */
.vl-blog-single-content {
    border: 1px solid #e9ecef;
}

.vl-blog-single-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2c3e50;
    line-height: 1.3;
    margin-bottom: 20px;
}

.vl-blog-meta-top {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;
}

.vl-blog-summary {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    padding: 30px;
    border-radius: 15px;
    border-left: 5px solid #000e5f;
    position: relative;
}

.vl-summary-box {
    position: relative;
}

.vl-summary-title {
    color: #2c3e50;
    font-weight: 600;
    font-size: 1.2rem;
}

.vl-blog-summary .lead {
    font-size: 1.15rem;
    line-height: 1.7;
    color: #495057;
    margin: 0;
    font-weight: 500;
}

.vl-blog-content {
    line-height: 1.8;
    font-size: 1.1rem;
    color: #2c3e50;
}

.vl-blog-content img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    margin: 25px 0;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.vl-blog-content p {
    margin-bottom: 1.5rem;
    text-align: justify;
}

.vl-blog-content h1, .vl-blog-content h2, .vl-blog-content h3,
.vl-blog-content h4, .vl-blog-content h5, .vl-blog-content h6 {
    margin-top: 2.5rem;
    margin-bottom: 1.2rem;
    color: #2c3e50;
    font-weight: 600;
}

.vl-blog-content h1 { font-size: 2rem; }
.vl-blog-content h2 { font-size: 1.8rem; }
.vl-blog-content h3 { font-size: 1.6rem; }
.vl-blog-content h4 { font-size: 1.4rem; }
.vl-blog-content h5 { font-size: 1.2rem; }
.vl-blog-content h6 { font-size: 1.1rem; }

/* Sidebar Styles */
.vl-sidebar-widget {
    background: #fff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    border: 1px solid #e9ecef;
    margin-bottom: 30px;
}

.vl-sidebar-widget-title {
    font-size: 1.4rem;
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 3px solid #f8f9fa;
    position: relative;
}

.vl-sidebar-widget-title::after {
    content: '';
    position: absolute;
    bottom: -3px;
    left: 0;
    width: 50px;
    height: 3px;
    background: #000e5f;
}

.vl-sidebar-post-item {
    transition: all 0.3s ease;
    padding: 15px;
    border-radius: 10px;
    border: 1px solid transparent;
}

.vl-sidebar-post-item:hover {
    transform: translateX(8px);
    background-color: #f8f9fa;
    border-color: #e9ecef;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.vl-sidebar-post-title a {
    color: #2c3e50;
    text-decoration: none;
    font-weight: 500;
    line-height: 1.4;
    transition: color 0.3s ease;
    font-size: 0.95rem;
}

.vl-sidebar-post-title a:hover {
    color: #000e5f;
}

.vl-contact-item {
    padding: 15px 0;
    border-bottom: 1px solid #f1f3f4;
}

.vl-contact-item:last-child {
    border-bottom: none;
}

.vl-contact-icon {
    width: 40px;
    height: 40px;
    background: #000e5f;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 0.9rem;
}

/* Share Buttons */
.vl-blog-share .btn {
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s ease;
    padding: 8px 16px;
    font-size: 0.9rem;
}

.vl-blog-share .btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    opacity: 0.9;
}



/* Tombol Kembali ke Home */
.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,123,255,0.3);
}

/* Responsive Design */
@media (max-width: 768px) {
    .vl-breadcrumb-title {
        font-size: 1.6rem;
        margin-top: 40px;
    }

    .vl-blog-single-title {
        font-size: 2rem;
    }

    .vl-blog-single-footer .row {
        text-align: center;
    }

    .vl-blog-share {
        margin-bottom: 20px;
    }

    .vl-blog-share .btn {
        margin-bottom: 10px;
        width: 100%;
    }

    .vl-blog-meta-top {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
}

@media (max-width: 576px) {
    .vl-breadcrumb-area {
        padding: 50px 0;
    }

    .vl-breadcrumb-title {
        margin-top: 30px;
    }

    .vl-blog-single-title {
        font-size: 1.8rem;
    }

    .vl-blog-summary {
        padding: 20px;
    }

    .vl-sidebar-widget {
        padding: 20px;
    }
}

/* Animation */
.vl-sidebar-post-item {
    animation: fadeInUp 0.6s ease-out;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
@endsection
