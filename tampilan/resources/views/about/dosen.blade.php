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
                        style="color:#fff; text-shadow:0 2px 8px #222;">Dosen & Tenaga Kependidikan JTIK</h1>
                    <hr style="width: 80px; border: 2px solid #fff; margin: 0 auto 24px auto; opacity:0.7;">
                    <h4 class="fw-bold" style="color:#fff; text-shadow:0 2px 8px #222;">Jurusan Teknologi Informasi dan
                        Komputer Politeknik Negeri Subang</h4>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                @foreach ($dosens as $dosen)
                    <div class="col-md-3 col-6 mb-4">
                        <div class="vl-team-sin text-center">
                            <img src="{{ $dosen->foto ? asset('storage/foto_dosen/' . $dosen->foto) : '/img/placeholder-dosen1.png' }}"
                                alt="{{ $dosen->nama }}" class="w-100"
                                style="border-radius:16px; object-fit:cover; max-width:160px; max-height:160px; margin:auto;" />
                            <h4 class="title mt-3">{{ $dosen->nama }}</h4>
                            <span>Dosen</span>
                        </div>
                    </div>
                @endforeach
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
