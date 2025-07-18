@extends('layouts.landing')
@section('content')
    <section class="min-vh-100 position-relative"
        style="background: url('/img/about/gedung-jtik.jpg') center top/cover no-repeat fixed; min-height: 100vh; width: 100vw;">
        <div
            style="position: absolute; top:0; left:0; width:100%; height:100%; background:rgba(246,248,249,0.4); backdrop-filter: blur(1.5px); z-index:1;">
        </div>
        <div class="container position-relative" style="z-index:2;">
            <div class="row justify-content-center pt-5 pb-3" style="padding-top: 110px !important;">
                <div class="col-lg-10 text-center text-white">
                    <img src="/img/logo/Logo.png" alt="Logo JTIK"
                        style="max-height:64px; margin-bottom: 16px; filter: drop-shadow(0 2px 8px #222);">
                    <h1 class="vl-section-title vl-section-title-2 pt-16 pb-8"
                        style="color:#fff; text-shadow:0 2px 8px #222;">Tujuan JTIK</h1>
                    <hr style="width: 80px; border: 2px solid #fff; margin: 0 auto 24px auto; opacity:0.7;">
                    <h4 class="fw-bold" style="color:#fff; text-shadow:0 2px 8px #222;">Jurusan Teknologi Informasi dan
                        Komputer Politeknik Negeri Subang</h4>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card shadow-sm p-4 about-card"
                        style="background:rgba(255,255,255,0.85); border-radius:8px; margin-bottom:24px;">
                        <h3 class="mb-3">Tujuan</h3>
                        <ul>
                            <li>1. Menghasilkan tenaga profesional di bidang teknologi informasi dan komputer yang memiliki
                                sikap dan kemampuan sebagai berikut:
                                <ul style="list-style-type: lower-alpha; margin-left: 20px;">
                                    <li>a. Beradaptasi terhadap perkembangan teknologi informasi</li>
                                    <li>b. Berfikir kreatif, analitis dan sistematis</li>
                                    <li>c. Berwirausaha</li>
                                    <li>d. Bermoral</li>
                                    <li>e. Disiplin</li>
                                </ul>
                            </li>
                            <li>2. Menghasilkan penelitian terapan yang inovatif di bidang teknologi informasi dan komputer.
                            </li>
                            <li>3. Menghasilkan pengabdian masyarakat yang berkualitas untuk meningkatkan kompetensi
                                masyarakat.</li>
                            <li>4. Menghasilkan hubungan kerja sama yang saling menguntungkan dengan pihak industri,
                                asosiasi dan institusi.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .about-card {
            max-width: 1320px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
@endsection
