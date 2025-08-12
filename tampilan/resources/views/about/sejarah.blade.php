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
                        style="color:#fff; text-shadow:0 2px 8px #222;">Sejarah JTIK</h1>
                    <hr style="width: 80px; border: 2px solid #fff; margin: 0 auto 24px auto; opacity:0.7;">
                    <h4 class="fw-bold" style="color:#fff; text-shadow:0 2px 8px #222;">Jurusan Teknologi Informasi dan
                        Komputer Politeknik Negeri Subang</h4>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card shadow-sm p-4 about-card"
                        style="background:rgba(255,255,255,0.85); border-radius:8px; margin-bottom:24px;">
                        <h3 class="mb-3">Sejarah</h3>
                        <p>Politeknik Negeri Subang (POLSUB) sebagai salah satu dari 43 Politeknik Negeri di Indonesia,
                            memiliki peran yang cukup strategis dalam pembangunan nasional, untuk menghasilkan lulusan siap
                            pakai sesuai dengan bidang keahliannya. Dalam upaya mewujudkan peran tersebut, sejak awal POLSUB
                            telah melaksanakan program pendidikan vokasi yang dahulu disebut sebagai jalur pendidikan
                            profesional. Pada pendidikan vokasi, porsi peningkatan keterampilan dalam bentuk kegiatan
                            praktik dan praktikum menempati porsi lebih tinggi dibanding kegiatan perkuliahan di dalam
                            kelas. Untuk mewujudkan peran tersebut, berbagai upaya pengembangan juga telah dilakukan untuk
                            membenahi pelaksanaan proses pembelajaran yang lebih baik. Pelaksanaan program pengembangan
                            dilakukan secara bertahap.</p>
                        <p>Politeknik Negeri Subang (POLSUB) merupakan perguruan tinggi negeri baru yang rencana proses
                            pendiriannya dimulai melalui nota kesepakatan (MOU) antara Pemerintah Kabupaten Subang dengan
                            Direktur Jenderal Pendidikan Tinggi Kemdikbud pada tahun 2011. Pada tanggal 2 April 2014
                            Politeknik Negeri Subang diresmikan oleh Presiden Republik Indonesia saat itu, Bapak Susilo
                            Bambang Yudhoyono di Istana Negara. Setelah peresmian tersebut, diangkat Direktur pertama POLSUB
                            melalui Surat Keputusan Menteri Pendidikan dan Kebudayaan no. 112/MPK.A4/KP/2014, tertanggal 24
                            April 2014.</p>
                        <p>Saat itu belum ada sama sekali gedung serta fasilitas kampus, sehingga Pemkab Subang sesuai MOU
                            meminjamkan gedung kelas sementara untuk Politeknik Negeri Subang yang berada di SMA PGRI 2 dan
                            SMA Langlang Buana yang sampai saat ini masih digunakan untuk menjalankan perkuliahan. Disamping
                            itu Pemkab Subang juga meminjamkan rumah dinas Ketua DPRD Kabupaten Subang sebagai kantor
                            Direktorat sementara. Dengan bertambahnya kegiatan, karyawan, serta dosen, maka sejak akhir
                            tahun 2015 kantor Rektorat Politeknik Negeri Subang resmi berpindah dari rumah Dinas Ketua DPRD
                            Kab. Subang ke Gedung Islamic Center yang berada di jalan Arief Rahman Hakim nomor 8 sampai saat
                            ini.</p>
                        <p>POLSUB yang pada awalnya belum memiliki sumber daya manusia sama sekali, banyak mendapat bantuan
                            teknis dari Politeknik Negeri Bandung (POLBAN) dan Politeknik Negeri Manufaktur Bandung
                            (POLMAN). Dengan bantuan teknis dari kedua Politeknik Negeri tersebut, maka secara perlahan
                            POLSUB mulai dapat berjalan. Di tahun 2015 dilakukan MoU dan Perjanjian Kerja Sama dengan
                            beberapa lembaga pemerintah, yaitu dengan Pusat Pengembangan Teknologi Tepat Guna LIPI dan Balai
                            Latihan Kerja (BLK) Kabupaten Subang, guna membantu proses perkuliahan dan praktik mahasiswa.
                        </p>
                        <p>Politeknik Negeri Subang memiliki tiga Jurusan yaitu Managemen Informatika (MI), Agroindustri
                            (AI), dan Teknik Perawatan dan Perbaikan Mesin (TPPM). Pendirian Politeknik Negeri Subang ini
                            dilandasi dengan konsep dasar yang sesuai dan berorientasi pada potensi pengembangan kawasan di
                            Kabupaten Subang. Konsep inti adalah untuk mempercepat pembangunan pada daerah yang baru tumbuh
                            untuk mendukung pertumbuhan industri maupun pada daerah yang telah berkembang untuk mempercepat
                            pengembangan industri secara global di wilayah Indonesia.</p>
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
