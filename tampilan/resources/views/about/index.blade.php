@extends('layouts.landing')
@section('title', 'About')
@section('content')
    <!-- Section utama dengan background gambar fullscreen (tidak repeat) -->
    <section class="min-vh-100 position-relative"
        style="background: url('/img/about/gedung-jtik.jpg') center top/cover no-repeat fixed; min-height: 100vh; width: 100vw;">
        <div
            style="position: absolute; top:0; left:0; width:100%; height:100%; background:rgba(246,248,249,0.4); backdrop-filter: blur(1.5px); z-index:1;">
        </div>
        <div class="container position-relative" style="z-index:2;">
            <!-- Header -->
            <div class="row justify-content-center pt-5 pb-3" style="padding-top: 110px !important;">
                <div class="col-lg-10 text-center text-white">
                    <img src="/img/logo/Logo.png" alt="Logo JTIK"
                        style="max-height:64px; margin-bottom: 16px; filter: drop-shadow(0 2px 8px #222);">
                    <h1 class="vl-section-title vl-section-title-2 pt-16 pb-8"
                        style="color:#fff; text-shadow:0 2px 8px #222;">Tentang JTIK</h1>
                    <hr style="width: 80px; border: 2px solid #fff; margin: 0 auto 24px auto; opacity:0.7;">
                    <h4 class="fw-bold" style="color:#fff; text-shadow:0 2px 8px #222;">Jurusan Teknologi Informasi dan
                        Komputer Politeknik Negeri Subang</h4>
                </div>
            </div>
            <!-- Paragraf deskripsi jurusan di bawah header -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="mb-5 text-center">
                        <p class="lead"
                            style="color:#fff; text-shadow:0 2px 8px #222; font-size:1.15rem; margin-bottom:0;">Jurusan
                            Teknologi Informasi dan Komputer adalah jurusan yang melakukan pemanfaatan dan pemeliharaan atas
                            sumber daya secara efektif untuk bidang informasi demi mewujudkan tujuan yang telah ditentukan
                            agar dapat memperoleh hasil yang diharapkan secara maksimal.</p>
                    </div>
                </div>
            </div>
            <!-- Semua card visi, misi, tujuan, dst -->
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div id="visimisi" class="card shadow-sm p-4 about-card"
                        style="background:rgba(255,255,255,0.85); border-radius:8px; margin-bottom:24px;">
                        <h3 class="mb-3">Visi</h3>
                        <p>Pada tahun 2030 menjadi salah satu Program Studi terbaik di Bidang Manajemen Informatika secara
                            nasional untuk mendukung perkembangan industri.</p>
                    </div>
                    <div id="misi" class="card shadow-sm p-4 about-card"
                        style="background:rgba(255,255,255,0.85); border-radius:8px; margin-bottom:24px;">
                        <h3 class="mb-3">Misi</h3>
                        <ul>
                            <li>1. Menyelenggarakan proses pembelajaran berkualitas dengan peningkatan berkelanjutan yang
                                relevan dengan kebutuhan pemangku kepentingan dalam bidang sistem informasi</li>
                            <li>2. Mengembangkan penelitian terapan di bidang sistem informasi</li>
                            <li>3. Melaksanakan kegiatan pengabdian kepada masyarakat dibidang sistem informasi untuk
                                meningkatkan sumber daya dan kesejahteraan masyarakat</li>
                            <li>4. Mengembangkan kerjasama dengan industri, asosiasi, dan institusi, guna menghasilkan mutu
                                lulusan dan sumber daya manusia yang profesional, berjiwa wirausaha dan berkarakter</li>
                        </ul>
                    </div>
                    <div id="tujuan" class="card shadow-sm p-4 about-card"
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
                    <div id="sejarah" class="card shadow-sm p-4 about-card"
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
                    <div id="struktur" class="card shadow-sm p-4 about-card"
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
                    <div id="dosen" class="card shadow-sm p-4 about-card"
                        style="background:rgba(255,255,255,0.85); border-radius:8px; margin-bottom:24px;">
                        <h3 class="mb-3">Dosen & Tenaga Kependidikan</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered" style="background:rgba(255,255,255,0.95);">
                                <tbody>
                                    <tr>
                                        <th colspan="3">A. Manajemen Jurusan Periode 2021-2024</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Ketua Jurusan</td>
                                        <td>Tri Herdiawan A., S.ST., M.T.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sekretaris Jurusan</td>
                                        <td>Rian Piarna, S.E., M.M.</td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">B. Program Studi</th>
                                    </tr>
                                    <tr>
                                        <td>1a</td>
                                        <td>Ka. Prodi D-III Sistem Informasi</td>
                                        <td>Dwi Vernanda, ST., M.Pd.</td>
                                    </tr>
                                    <tr>
                                        <td>2a</td>
                                        <td>Ka. Prodi D-IV Teknologi Rekayasa Perangkat Lunak</td>
                                        <td>Mohammad Iqbal, S.Kom, M.T.</td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">C. Kelompok Bidang Keahlian (KBK)</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Ka. KBK Sistem Informasi dan Database</td>
                                        <td>Mohammad Iqbal, S.Kom, M.T.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Ka. KBK Teknologi Informasi & Rekayasa Perangkat Lunak</td>
                                        <td>Slamet Rahayu, S.Pd, M.Pd</td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">D. Laboratorium</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Ka. Lab. Sistem Informasi</td>
                                        <td>Taufan Abdurrachman, S.T., M.Kom.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Ka. Lab. Manajemen Data dan Informasi</td>
                                        <td>Haryati, S.Pd., M.Pd.</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Ka. Lab. Rekayasa Perangkat Lunak</td>
                                        <td>Sari Azhariyah, S.Pd, M.Pd.T.</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Ka. Lab. Komputer dan Jaringan</td>
                                        <td>Slamet Rahayu, S.Pd, M.Pd.</td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">E. Wali kelas Program Studi D-III Sistem Informasi</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>I A (Angkatan 2022)</td>
                                        <td>Rian Piarna, S.E., M.M.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>I B (Angkatan 2022)</td>
                                        <td>Slamet Rahayu, S.Pd, M.Pd.</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>II A (Angkatan 2021)</td>
                                        <td>Nurfitria Khoirunnisa, S.T.Kom., M.Kom.</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>II B (Angkatan 2021)</td>
                                        <td>Tri Herdiawan A., S.ST., M.T.</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>III A (Angkatan 2020)</td>
                                        <td>Dwi Vernanda, ST., M.Pd.</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>III B (Angkatan 2020)</td>
                                        <td>Nunu Nugraha Purnawan, S.Pd., M.Kom.</td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">F. Pembina Himpunan</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Haryati, S.Pd., M.Pd.</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="cpl" class="card shadow-sm p-4 about-card"
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
                    <div id="fasilitas" class="card shadow-sm p-4 about-card"
                        style="background:rgba(255,255,255,0.85); border-radius:8px; margin-bottom:24px;">
                        <h3 class="mb-3">Fasilitas</h3>
                        <p>JTIK memiliki laboratorium modern, ruang kelas nyaman, dan fasilitas pendukung lainnya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    .about-card {
        max-width: 1320px;
        margin-left: auto;
        margin-right: auto;
    }
</style>
