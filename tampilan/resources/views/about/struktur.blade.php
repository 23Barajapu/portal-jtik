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
                        style="color:#fff; text-shadow:0 2px 8px #222;">Struktur Organisasi JTIK</h1>
                    <hr style="width: 80px; border: 2px solid #fff; margin: 0 auto 24px auto; opacity:0.7;">
                    <h4 class="fw-bold" style="color:#fff; text-shadow:0 2px 8px #222;">Jurusan Teknologi Informasi dan
                        Komputer Politeknik Negeri Subang</h4>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card shadow-sm p-4 about-card"
                        style="background:rgba(255,255,255,0.85); border-radius:8px; margin-bottom:24px;">
                        <h3 class="mb-3">Struktur Organisasi</h3>
                        <p>Struktur organisasi jurusan dapat dilihat pada bagan berikut:</p>
                        <div style="text-align:center;">
                            <img src="/img/about/struktur-organisasi.jpg" alt="Struktur Organisasi JTIK"
                                class="img-fluid br-8"
                                style="max-width:1000px; width:100%; border:3px solid #ddd; box-shadow:0 4px 16px rgba(0,0,0,0.15); cursor:zoom-in;"
                                data-bs-toggle="modal" data-bs-target="#strukturModal">
                        </div>
                        <!-- Modal untuk zoom gambar -->
                        <div class="modal fade" id="strukturModal" tabindex="-1" aria-labelledby="strukturModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content" style="background:transparent; border:none; box-shadow:none;">
                                    <div class="modal-body p-0 text-center">
                                        <img src="/img/about/struktur-organisasi.jpg" alt="Struktur Organisasi JTIK"
                                            style="width:100%; max-width:1400px; border-radius:8px; box-shadow:0 8px 32px rgba(0,0,0,0.25); background:#fff;">
                                    </div>
                                </div>
                            </div>
                        </div>
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
