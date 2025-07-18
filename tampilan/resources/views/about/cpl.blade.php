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
                        style="color:#fff; text-shadow:0 2px 8px #222;">Kompetensi Lulusan JTIK</h1>
                    <hr style="width: 80px; border: 2px solid #fff; margin: 0 auto 24px auto; opacity:0.7;">
                    <h4 class="fw-bold" style="color:#fff; text-shadow:0 2px 8px #222;">Jurusan Teknologi Informasi dan
                        Komputer Politeknik Negeri Subang</h4>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card shadow-sm p-4 about-card"
                        style="background:rgba(255,255,255,0.85); border-radius:8px; margin-bottom:24px;">
                        <h3 class="mb-3">Kompetensi Lulusan</h3>
                        <ol>
                            <li>Operator Aplikasi Komputer (Clerks)
                                <ul style="list-style-type: none; padding-left: 0;">
                                    <li>- Mampu menggunakan aplikasi perangkat lunak perkantoran untuk mendukung kegiatan
                                        rutin kantor</li>
                                    <li>- Mampu membuat algoritma yang akan digunakan dalam program</li>
                                </ul>
                            </li>
                            <li>Teknisi Sistem Informasi (Spesialis)
                                <ul style="list-style-type: none; padding-left: 0;">
                                    <li>- Mampu mengoperasikan perangkat lunak aplikasi Sistem Informasi untuk menyelesaikan
                                        masalah dan/atau pekerjaan di bidang teknologi informasi pada instansi pemerintah,
                                        perusahaan atau manufaktur berskala kecil, menengah besar/go public yang sesuai
                                        dengan standar dan prinsip-prinsip yang berlaku umum dan relevan dibidang teknologi
                                        informasi melalui proses penganalisaan data dan pemilihan metode yang sesuai,
                                        didukung dengan kemampuan di bidang manajemen, akuntansi, keahlian interpersonal,
                                        dan komunikasi.</li>
                                    <li>- Mampu mengimplementasikan rancangan basis data kedalam database</li>
                                </ul>
                            </li>
                            <li>Desain Sistem Informasi (Desainer)
                                <ul style="list-style-type: none; padding-left: 0;">
                                    <li>- Mampu mengidentifikasi penyebab masalah dan menemukan titik keputusan</li>
                                    <li>- Mengumpulkan dan menganalisis semua dokumen, file, formulir yang digunakan pada
                                        sistem yang berjalan saat ini</li>
                                    <li>- Mampu menggambarkan proses bisnis dan mengevaluasi kekurangan pada sistem yang
                                        telah berjalan</li>
                                    <li>- Mampu melakukan pengujian blackbox dan whitebox</li>
                                    <li>- Merancang perbaikan untuk sistem yang baru</li>
                                    <li>- Mampu memberikan gambaran yang jelas untuk memenuhi kebutuhan user (pemakai
                                        sistem)</li>
                                    <li>- Mampu memberikan gambaran rancang bangun lengkap kepada programmer dan ahli teknik
                                        yang terlibat</li>
                                    <li>- Mampu merancang basis data yang diperlukan dalam pembangunan program</li>
                                    <li>- Mampu mengkodekan rancang bangun yang telah dibuat dalam analisis kedalam bahasa
                                        pemrograman</li>
                                </ul>
                            </li>
                        </ol>
                        <div class="mt-3">
                            <p>Untuk dokumen lengkap dapat dilihat di sini:</p>
                            <a href="/docs/Design-Student-HandBook.pdf" target="_blank">STUDENT HANDBOOK JTIK (PDF)</a>
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
