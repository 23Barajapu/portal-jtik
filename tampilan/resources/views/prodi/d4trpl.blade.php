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
                        style="color:#fff; text-shadow:0 2px 8px #222;">D4 Teknologi Rekayasa Perangkat Lunak</h1>
                    <hr style="width: 80px; border: 2px solid #fff; margin: 0 auto 24px auto; opacity:0.7;">
                    <h4 class="fw-bold" style="color:#fff; text-shadow:0 2px 8px #222;">Program Studi D4 Teknologi Rekayasa
                        Perangkat Lunak Politeknik Negeri Subang</h4>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="mb-5 text-center">
                        <p class="lead"
                            style="color:#fff; text-shadow:0 2px 8px #222; font-size:1.15rem; margin-bottom:0;">Program
                            Studi Teknologi Rekayasa Perangkat Lunak dirancang lulusannya memiliki kemampuan dibidang
                            kecerdasan buatan.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    @php
                        /* Seluruh card dari d3si.blade.php disalin ke sini, kecuali judul diubah ke D4 TRPL */
                    @endphp
                    <div class="card shadow-sm p-4 about-card"
                        style="background:rgba(255,255,255,0.85); border-radius:8px; margin-bottom:24px;">
                        <h3 class="mb-3">Visi</h3>
                        <p>Pada tahun 2045 menjadi salah satu program studi teknologi rekayasa perangkat lunak bidang
                            kecerdasan buatan yang terbaik di Indonesia.</p>
                    </div>
                    <div class="card shadow-sm p-4 about-card"
                        style="background:rgba(255,255,255,0.85); border-radius:8px; margin-bottom:24px;">
                        <h3 class="mb-3">Misi</h3>
                        <ul>
                            <li>1. Melaksanakan proses pembelajaran agar menghasilkan lulusan dengan kompetensi akademik
                                yang tinggi, memiliki kemampuan kreatif dan inovatif, softskill serta etika profesional yang
                                menonjol dengan berwawasan kewirausahaan;</li>
                            <li>2. Melaksanakan penelitian untuk mendukung proses pembelajaran yang bermutu tinggi serta
                                berkontribusi pada pengembangan ilmu bagi masyarakat nasional dan internasional dengan
                                berupaya menggali potensi lokal;</li>
                            <li>3. Melaksanakan pengabdian kepada masyarakat dengan berkontribusi untuk memajukan masyarakat
                                dalam meningkatkan pengetahuan dan pemanfaatan teknologi informasi dan komunikasi;</li>
                            <li>4. Meningkatkan kuantitas dan kualitas sarana dan prasarana pembelajaran untuk peningkatan
                                kualitas pendidikan secara berkelanjutan.</li>
                        </ul>
                    </div>
                    <div class="card shadow-sm p-4 about-card"
                        style="background:rgba(255,255,255,0.85); border-radius:8px; margin-bottom:24px;">
                        <h3 class="mb-3">Tujuan</h3>
                        <ol>
                            <li>1. Menyelenggarakan pendidikan guna menghasilkan lulusan ahli di bidang rekayasa perangkat
                                lunak yang kompetitif, inovatif, mandiri, disiplin, serta mampu bersaing di tingkat nasional
                                maupun global.</li>
                            <li>2. Menghasilkan pengetahuan dan teknologi di bidang kecerdasan buatan dan internet of things
                                melalui penelitian yang terintegrasi dengan kebutuhan masyarakat.</li>
                            <li>3. Menghasilkan pengabdian masyarakat yang berkualitas untuk meningkatkan kompetensi
                                masyarakat, di bidang teknologi rekayasa perangkat lunak.</li>
                            <li>4. Menghasilkan produk dan jasa guna mendukung program kemitraan, kewirausahaan dan
                                peningkatan
                                kesejahteraan masyarakat melalui kegiatan pengabdian kepada masyarakat.</li>
                        </ol>
                    </div>
                    <div class="card shadow-sm p-4 about-card"
                        style="background:rgba(255,255,255,0.85); border-radius:8px; margin-bottom:24px;">
                        <h3 class="mb-3">Profil Lulusan</h3>
                        <ol type="1">
                            <li>1. Programmer</li>
                            <li>2. Software Developer</li>
                            <li>3. Database Administrator</li>
                            <li>4. Information System Analyst</li>
                            <li>5. Computer Support Specialist</li>
                            <li>6. Perekayasa AI</li>
                            <li>7. IT Enterpreneur</li>
                        </ol>
                    </div>
                    <div class="card shadow-sm p-4 about-card"
                        style="background:rgba(255,255,255,0.85); border-radius:8px; margin-bottom:24px;">
                        <h3 class="mb-3">Kompetensi Lulusan</h3>
                        <p>Kompetensi lulusan program studi D4 TRPL terdiri atas:</p>
                        <h5>Kompetensi utama lulusan:</h5>
                        <ol type="1">
                            <li>1. Mampu menggunakan aplikasi perangkat lunak perkantoran untuk mendukung kegiatan rutin
                                kantor.</li>
                            <li>2. Mampu memecahkan <i>trouble shooting</i> perangkat komputer baik personal komputer maupun
                                <i>computer portable</i>
                            </li>
                            <li>3. Mampu melakukan <i>assembling</i> perangkat <i>computer portable</i></li>
                            <li>4. Dapat menyatakan prinsip dan tatacara pelayanan informasi dan menyediakan layanan
                                informasi
                                terhadap klien.</li>
                            <li>5. Information Ordering – Mampu memaknai informasi mengikuti pola atau suatu aturan
                                tertentu.
                            </li>
                            <li>6. Mampu mengelola dan memelihara sistem database.</li>
                            <li>7. Mampu membaca dan memilih library, framework dan pattern yang dapat digunakan dalam
                                mengkustomisasi sistem informasi sesuai dengan spesifikasi yang diberikan.</li>
                            <li>8. Melakukan problem solving untuk masalah rutin dan terprediksi dengan menggunakan sistem
                                informasi.</li>
                            <li>9. Mampu mengelola konten web.</li>
                            <li>10. Melakukan perancangan sistem informasi.</li>
                            <li>11. Merancang model data konseptual, logikal dan fisik berdasarkan Software Requirement
                                Specification (SRS) yang telah didefinisikan.</li>
                            <li>12. Merancang tahap dan proses modifikasi sistem (customization) untuk manfaat baru atau
                                meningkatkan work flow.</li>
                            <li>13. Mampu merancang dan mengimplementasikan jaringan komputer baik yang memiliki cakupan
                                dalam
                                skala kecil maupun besar.</li>
                        </ol>
                        <h5 class="mt-4">Kompetensi pendukung lulusan:</h5>
                        <ol type="1">
                            <li>1. Active Listening – Mendengarkan apa yang diucapkan orang, menyediakan waktu untuk
                                berpikir
                                sehingga dapat memahami dengan benar poin dari suatu pernyataan, bertanya secara tepat
                                momen, dan tidak menginterupsi pembicaraan orang secara sembarang.</li>
                            <li>2. Mendemonstrasikan cara mengumpulkan/Gathering, menyimpan/Storing dan mengelola/Organising
                                Informasi.</li>
                            <li>3. Menerapkan tool komputasi untuk membantu prosedur klerikel dan administratif.</li>
                            <li>4. Mampu membangakan sistem informasi sederhana dengan menggunakan instrumen pemodelan.</li>
                            <li>5. Mampu mendokumentasikan program secara implisit.</li>
                            <li>6. Mempresentasikan perilaku aplikasi perangkat lunak kepada stakeholders dengan
                                memperhatikan
                                dan menerapkan prinsip komunikasi dan tool presentasi.</li>
                            <li>7. Mampu berkomunikasi efektif dengan customer.</li>
                            <li>8. Mendokumentasikan rancangan sistem informasi berdasarkan standar dokumentasi tertentu.
                            </li>
                            <li>9. Mempresentasikan hasil perancangan sistem informasi kepada stakeholders.</li>
                        </ol>
                        <h5 class="mt-4">Kompetensi lainnya:</h5>
                        <ol type="1">
                            <li>1. Adaptif terhadap perkembangan ilmu pengetahuan dan teknologi, khususnya di bidang TIK.
                            </li>
                            <li>2. Softskill (Team Building, Presentation Skills, Leadership, Teknik Negosiasi, Manajemen
                                Perubahan dan Conflict Resolution)</li>
                        </ol>
                    </div>
                    <div class="card shadow-sm p-4 about-card"
                        style="background:rgba(255,255,255,0.85); border-radius:8px; margin-bottom:24px;">
                        <h3 class="mb-3">Staf Pengajar</h3>
                        <ol type="1">
                            @foreach ($dosens as $dosen)
                                <li>{{ $dosen->nama }}</li>
                            @endforeach
                        </ol>
                    </div>
                    <div class="card shadow-sm p-4 about-card"
                        style="background:rgba(255,255,255,0.85); border-radius:8px; margin-bottom:24px;">
                        <h3 class="mb-3">Daftar Mata Kuliah D4 Teknologi Rekayasa Perangkat Lunak</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered" style="background:rgba(255,255,255,0.95);">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Mata Kuliah</th>
                                        <th>Nama Matakuliah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($mataKuliahs as $mk)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $mk->kode }}</td>
                                            <td>{{ $mk->nama }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
