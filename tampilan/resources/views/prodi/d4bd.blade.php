@extends('layouts.landing')
@section('content')
    <!-- Hero Section dengan Parallax Effect -->
    <section class="hero-section position-relative overflow-hidden"
             style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; display: flex; align-items: center;">
        <!-- Animated Background Elements -->
        <div class="animated-bg">
            <div class="floating-shape shape-1"></div>
            <div class="floating-shape shape-2"></div>
            <div class="floating-shape shape-3"></div>
        </div>

        <div class="container position-relative" style="z-index: 3;">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center text-white">
                    <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
                        {{-- <img src="/img/logo/Logo.png" alt="Logo JTIK"
                             class="hero-logo mb-4"
                             style="max-height: 80px; filter: drop-shadow(0 4px 12px rgba(0,0,0,0.3));"> --}}

                        <h1 class="hero-title mb-3"
                            style="font-size: 3.5rem; font-weight: 700; text-shadow: 0 4px 20px rgba(0,0,0,0.3);">
                            D4 Bisnis Digital
                        </h1>

                        <div class="hero-divider mb-4"></div>

                        <h2 class="hero-subtitle mb-4"
                            style="font-size: 1.5rem; font-weight: 300; opacity: 0.9;">
                            Program Studi D4 Bisnis Digital<br>
                            <span class="fw-bold">Politeknik Negeri Subang</span>
                        </h2>

                        <p class="hero-description lead"
                           style="font-size: 1.2rem; opacity: 0.85; max-width: 800px; margin: 0 auto;">
                            Program Studi Bisnis Digital dirancang lulusannya memiliki kemampuan dibidang transformasi digital dan e-commerce.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="content-section py-5" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <!-- Visi Card -->
                    <div class="modern-card mb-5" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Visi</h3>
                            <p class="card-text">
                                Pada tahun 2045 menjadi salah satu program studi bisnis digital yang terbaik di Indonesia dalam pengembangan e-commerce dan transformasi digital.
                            </p>
                        </div>
                    </div>

                    <!-- Misi Card -->
                    <div class="modern-card mb-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-icon">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Misi</h3>
                            <ul>
                                <li>1. Melaksanakan proses pembelajaran agar menghasilkan lulusan dengan kompetensi akademik yang tinggi, memiliki kemampuan kreatif dan inovatif, softskill serta etika profesional yang menonjol dengan berwawasan kewirausahaan;</li>
                                <li>2. Melaksanakan penelitian untuk mendukung proses pembelajaran yang bermutu tinggi serta berkontribusi pada pengembangan ilmu bagi masyarakat nasional dan internasional dengan berupaya menggali potensi lokal;</li>
                                <li>3. Melaksanakan pengabdian kepada masyarakat dengan berkontribusi untuk memajukan masyarakat dalam meningkatkan pengetahuan dan pemanfaatan teknologi informasi dan komunikasi;</li>
                                <li>4. Meningkatkan kuantitas dan kualitas sarana dan prasarana pembelajaran untuk peningkatan kualitas pendidikan secara berkelanjutan.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Tujuan Card -->
                    <div class="modern-card mb-5" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Tujuan</h3>
                            <ol>
                                <li>1. Menyelenggarakan pendidikan guna menghasilkan lulusan ahli di bidang bisnis digital yang kompetitif, inovatif, mandiri, disiplin, serta mampu bersaing di tingkat nasional maupun global.</li>
                                <li>2. Menghasilkan pengetahuan dan teknologi di bidang e-commerce dan transformasi digital melalui penelitian yang terintegrasi dengan kebutuhan masyarakat.</li>
                                <li>3. Menghasilkan pengabdian masyarakat yang berkualitas untuk meningkatkan kompetensi masyarakat, di bidang bisnis digital.</li>
                                <li>4. Menghasilkan produk dan jasa guna mendukung program kemitraan, kewirausahaan dan peningkatan kesejahteraan masyarakat melalui kegiatan pengabdian kepada masyarakat.</li>
                            </ol>
                        </div>
                    </div>

                    <!-- Profil Lulusan Card -->
                    <div class="modern-card mb-5" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Profil Lulusan</h3>
                            <ol type="1">
                                <li>1. Digital Entrepreneur</li>
                                <li>2. Smart Agribusiness Developer</li>
                                <li>3. Business Analyst</li>
                                <li>4. Digital Marketing Specialist</li>
                            </ol>
                        </div>
                    </div>

                    <!-- Kompetensi Lulusan Card -->
                    <div class="modern-card mb-5" data-aos="fade-up" data-aos-delay="500">
                        <div class="card-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Kompetensi Lulusan</h3>
                            <p class="card-text mb-4">
                                Kompetensi lulusan program studi D4 Bisnis Digital terdiri atas:
                            </p>
                            <h5>Kompetensi utama lulusan:</h5>
                            <ol type="1">
                                <li>1. Mampu menggunakan aplikasi perangkat lunak perkantoran untuk mendukung kegiatan rutin kantor.</li>
                                <li>2. Mampu memecahkan <i>trouble shooting</i> perangkat komputer baik personal komputer maupun <i>computer portable</i></li>
                                <li>3. Mampu melakukan <i>assembling</i> perangkat <i>computer portable</i></li>
                                <li>4. Dapat menyatakan prinsip dan tatacara pelayanan informasi dan menyediakan layanan informasi terhadap klien.</li>
                                <li>5. Information Ordering – Mampu memaknai informasi mengikuti pola atau suatu aturan tertentu.</li>
                                <li>6. Mampu mengelola dan memelihara sistem database.</li>
                                <li>7. Mampu membaca dan memilih library, framework dan pattern yang dapat digunakan dalam mengkustomisasi sistem informasi sesuai dengan spesifikasi yang diberikan.</li>
                                <li>8. Melakukan problem solving untuk masalah rutin dan terprediksi dengan menggunakan sistem informasi.</li>
                                <li>9. Mampu mengelola konten web.</li>
                                <li>10. Melakukan perancangan sistem informasi.</li>
                                <li>11. Merancang model data konseptual, logikal dan fisik berdasarkan Software Requirement Specification (SRS) yang telah didefinisikan.</li>
                                <li>12. Merancang tahap dan proses modifikasi sistem (customization) untuk manfaat baru atau meningkatkan work flow.</li>
                                <li>13. Mampu merancang dan mengimplementasikan jaringan komputer baik yang memiliki cakupan dalam skala kecil maupun besar.</li>
                            </ol>
                            <h5 class="mt-4">Kompetensi pendukung lulusan:</h5>
                            <ol type="1">
                                <li>1. Active Listening – Mendengarkan apa yang diucapkan orang, menyediakan waktu untuk berpikir sehingga dapat memahami dengan benar poin dari suatu pernyataan, bertanya secara tepat momen, dan tidak menginterupsi pembicaraan orang secara sembarang.</li>
                                <li>2. Mendemonstrasikan cara mengumpulkan/Gathering, menyimpan/Storing dan mengelola/Organising Informasi.</li>
                                <li>3. Menerapkan tool komputasi untuk membantu prosedur klerikel dan administratif.</li>
                                <li>4. Mampu membangakan sistem informasi sederhana dengan menggunakan instrumen pemodelan.</li>
                                <li>5. Mampu mendokumentasikan program secara implisit.</li>
                                <li>6. Mempresentasikan perilaku aplikasi perangkat lunak kepada stakeholders dengan memperhatikan dan menerapkan prinsip komunikasi dan tool presentasi.</li>
                                <li>7. Mampu berkomunikasi efektif dengan customer.</li>
                                <li>8. Mendokumentasikan rancangan sistem informasi berdasarkan standar dokumentasi tertentu.</li>
                                <li>9. Mempresentasikan hasil perancangan sistem informasi kepada stakeholders.</li>
                            </ol>
                            <h5 class="mt-4">Kompetensi lainnya:</h5>
                            <ol type="1">
                                <li>1. Adaptif terhadap perkembangan ilmu pengetahuan dan teknologi, khususnya di bidang TIK.</li>
                                <li>2. Softskill (Team Building, Presentation Skills, Leadership, Teknik Negosiasi, Manajemen Perubahan dan Conflict Resolution)</li>
                            </ol>
                        </div>
                    </div>

                    <!-- Staf Pengajar Card -->
                    <div class="modern-card mb-5" data-aos="fade-up" data-aos-delay="600">
                        <div class="card-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Staf Pengajar</h3>
                            <ol type="1">
                                @foreach ($dosens as $dosen)
                                    <li>{{ $dosen->nama }}</li>
                                @endforeach
                            </ol>
                        </div>
                    </div>

                    <!-- Daftar Mata Kuliah Card -->
                    <div class="modern-card mb-5" data-aos="fade-up" data-aos-delay="700">
                        <div class="card-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Daftar Mata Kuliah D4 Bisnis Digital</h3>
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
                                            <td class="table-number">{{ $no++ }}</td>
                                            <td class="table-code">{{ $mk->kode }}</td>
                                            <td class="table-name">{{ $mk->nama }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <style>
        /* Hero Section Styles */
        .hero-section {
            position: relative;
            overflow: hidden;
        }

        .animated-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .floating-shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 6s ease-in-out infinite;
        }

        .shape-1 {
            width: 100px;
            height: 100px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape-2 {
            width: 150px;
            height: 150px;
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }

        .shape-3 {
            width: 80px;
            height: 80px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .hero-logo {
            transition: transform 0.3s ease;
        }

        .hero-logo:hover {
            transform: scale(1.1);
        }

        .hero-divider {
            width: 120px;
            height: 3px;
            background: linear-gradient(90deg, transparent, #fff, transparent);
            margin: 0 auto;
            border-radius: 2px;
            position: relative;
            overflow: hidden;
        }

        .hero-divider::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.8), transparent);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        /* Modern Card Styles */
        .modern-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 24px;
            padding: 2.5rem;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(15px);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .modern-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #667eea, #764ba2, #667eea);
            background-size: 200% 100%;
            animation: gradient-shift 3s ease infinite;
        }

        .modern-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.02), rgba(118, 75, 162, 0.02));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .modern-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 35px 70px rgba(0, 0, 0, 0.12);
        }

        .modern-card:hover::after {
            opacity: 1;
        }

        @keyframes gradient-shift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .card-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.8rem;
            color: white;
            font-size: 1.6rem;
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.25);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .card-icon::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.2), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .card-icon:hover {
            transform: translateY(-3px) rotate(5deg);
            box-shadow: 0 20px 40px rgba(102, 126, 234, 0.35);
        }

        .card-icon:hover::before {
            opacity: 1;
        }

        .card-title {
            color: #2d3748;
            font-weight: 700;
            margin-bottom: 1rem;
            font-size: 1.8rem;
        }

        .card-text {
            color: #4a5568;
            line-height: 1.7;
            font-size: 1.1rem;
        }

        /* Mission & Objective Styles */
        .mission-list, .objective-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .mission-item, .objective-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            padding: 1rem;
            background: rgba(102, 126, 234, 0.05);
            border-radius: 12px;
            border-left: 4px solid #667eea;
            transition: all 0.3s ease;
        }

        .mission-item:hover, .objective-item:hover {
            background: rgba(102, 126, 234, 0.1);
            transform: translateX(5px);
        }

        .mission-number, .objective-number {
            width: 30px;
            height: 30px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 0.9rem;
            flex-shrink: 0;
        }

        .mission-text, .objective-text {
            color: #4a5568;
            line-height: 1.6;
        }

        /* Profile Grid Styles */
        .profile-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }

        .profile-item {
            display: flex;
            align-items: center;
            gap: 1.2rem;
            padding: 1.2rem;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.08), rgba(118, 75, 162, 0.08));
            border-radius: 16px;
            border: 1px solid rgba(102, 126, 234, 0.15);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .profile-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(102, 126, 234, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .profile-item:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.15);
            border-color: rgba(102, 126, 234, 0.3);
        }

        .profile-item:hover::before {
            left: 100%;
        }

        .profile-item i {
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
        }

        .profile-item:hover i {
            transform: rotate(10deg) scale(1.1);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
        }

        .profile-item span {
            color: #2d3748;
            font-weight: 500;
        }

        /* Competency Styles */
        .competency-section {
            margin-bottom: 2rem;
        }

        .competency-title {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #2d3748;
            font-weight: 600;
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }

        .competency-title i {
            color: #667eea;
        }

        .competency-list {
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
        }

        .competency-item {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            padding: 0.8rem;
            background: rgba(102, 126, 234, 0.05);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .competency-item:hover {
            background: rgba(102, 126, 234, 0.1);
        }

        .competency-number {
            width: 25px;
            height: 25px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: bold;
            flex-shrink: 0;
        }

        .competency-text {
            color: #4a5568;
            line-height: 1.5;
            font-size: 0.95rem;
        }

        /* Lecturer Grid Styles */
        .lecturer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1rem;
        }

        .lecturer-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: rgba(102, 126, 234, 0.05);
            border-radius: 12px;
            border: 1px solid rgba(102, 126, 234, 0.1);
            transition: all 0.3s ease;
        }

        .lecturer-item:hover {
            background: rgba(102, 126, 234, 0.1);
            transform: translateX(5px);
        }

        .lecturer-avatar {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }

        .lecturer-info {
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .lecturer-name {
            color: #2d3748;
            font-weight: 500;
            font-size: 1rem;
        }

        .lecturer-number {
            color: #667eea;
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* Table Styles */
        .table-container {
            overflow-x: auto;
            border-radius: 16px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            background: white;
            border: 1px solid rgba(102, 126, 234, 0.1);
        }

        .modern-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 16px;
            overflow: hidden;
        }

        .modern-table thead {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            position: relative;
        }

        .modern-table thead::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.1), transparent);
            pointer-events: none;
        }

        .modern-table th {
            padding: 1.2rem 1rem;
            text-align: left;
            font-weight: 600;
            font-size: 1.1rem;
            position: relative;
            z-index: 1;
        }

        .modern-table tbody tr {
            transition: all 0.3s ease;
            border-bottom: 1px solid rgba(102, 126, 234, 0.08);
            position: relative;
        }

        .modern-table tbody tr:hover {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.03), rgba(118, 75, 162, 0.03));
            transform: scale(1.01);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.1);
        }

        .modern-table tbody tr:last-child {
            border-bottom: none;
        }

        .modern-table td {
            padding: 1.2rem 1rem;
            color: #4a5568;
            transition: all 0.3s ease;
        }

        .table-number {
            font-weight: bold;
            color: #667eea;
            width: 60px;
        }

        .table-code {
            font-family: 'Courier New', monospace;
            font-weight: 600;
            color: #2d3748;
            width: 150px;
        }

        .table-name {
            color: #4a5568;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem !important;
            }

            .hero-subtitle {
                font-size: 1.2rem !important;
            }

            .modern-card {
                padding: 1.5rem;
            }

            .profile-grid {
                grid-template-columns: 1fr;
            }

            .lecturer-grid {
                grid-template-columns: 1fr;
            }

            .mission-item, .objective-item {
                flex-direction: column;
                gap: 0.5rem;
            }
        }

        /* Animation Classes */
        [data-aos] {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        [data-aos].aos-animate {
            opacity: 1;
            transform: translateY(0);
        }

        [data-aos].aos-animate {
            opacity: 1;
            transform: translateY(0);
        }

        /* Staggered animations for child elements */
        .mission-item, .objective-item, .profile-item, .competency-item, .lecturer-item {
            opacity: 0;
            transform: translateX(-20px);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Loading animation */
        body:not(.loaded) .hero-section {
            opacity: 0;
        }

        body.loaded .hero-section {
            opacity: 1;
            transition: opacity 1s ease;
        }

        /* Enhanced hover effects */
        .modern-card:hover .card-icon {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        /* Smooth transitions for all interactive elements */
        * {
            transition: color 0.3s ease, background-color 0.3s ease, border-color 0.3s ease;
        }
    </style>


    <script>
        // Enhanced AOS (Animate On Scroll) implementation
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('aos-animate');

                        // Add staggered animation for child elements
                        const children = entry.target.querySelectorAll('.mission-item, .objective-item, .profile-item, .competency-item, .lecturer-item');
                        children.forEach((child, index) => {
                            setTimeout(() => {
                                child.style.opacity = '1';
                                child.style.transform = 'translateX(0)';
                            }, index * 100);
                        });
                    }
                });
            }, observerOptions);

            document.querySelectorAll('[data-aos]').forEach(el => {
                observer.observe(el);
            });

            // Add smooth scroll behavior
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Add loading animation
            window.addEventListener('load', function() {
                document.body.classList.add('loaded');
            });
        });
    </script>
@endsection
