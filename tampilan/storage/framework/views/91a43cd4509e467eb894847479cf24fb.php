
<?php $__env->startSection('title', 'Program Studi'); ?>
<?php $__env->startSection('content'); ?>
    <section class="prodi-section"
        style="background: url('/img/about/gedung-jtik.jpg') center center/cover no-repeat; position: relative; width: 100vw; min-height: 100vh; margin: 0; padding: 0; left: 50%; right: 50%; transform: translateX(-50%); padding-top: 80px;">
        <div style="position: absolute; inset: 0; background: rgba(5,12,54,0.6);"></div>
        <div class="container py-5" style="position: relative; z-index: 1;">
            <h1 class="mb-4 text-center text-white">Program Studi JTIK POLSUB</h1>
            <!-- Dua Card Prodi -->
            <div class="row justify-content-center g-4 mb-5">
                <div class="col-md-5">
                    <div class="card prodi-modern-card h-100 border-0 d-flex flex-column">
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <div>
                                <div class="prodi-icon mb-3" style="font-size:2.5rem; color:#3b82f6;"><i
                                        class="bi bi-cpu"></i></div>
                                <h3 class="card-title mb-2">D3 Sistem Informasi</h3>
                                <p class="card-text mb-4">Program Diploma 3 yang berfokus pada pengembangan sistem
                                    informasi,
                                    aplikasi bisnis, dan teknologi digital untuk dunia industri dan pemerintahan.</p>
                            </div>
                            <div class="mt-auto">
                                <a href="<?php echo e(url('prodi/d3si')); ?>"
                                    class="btn btn-primary rounded-pill px-4 py-2 shadow-sm">Detail D3SI</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card prodi-modern-card h-100 border-0 d-flex flex-column">
                        <div class="card-body text-center d-flex flex-column justify-content-between">
                            <div>
                                <div class="prodi-icon mb-3" style="font-size:2.5rem; color:#10b981;"><i
                                        class="bi bi-code-slash"></i></div>
                                <h3 class="card-title mb-2">D4 Teknologi Rekayasa Perangkat Lunak</h3>
                                <p class="card-text mb-4">Program Sarjana Terapan yang menekankan pada pengembangan
                                    perangkat lunak,
                                    rekayasa sistem, dan inovasi teknologi untuk kebutuhan industri 4.0.</p>
                            </div>
                            <div class="mt-auto">
                                <a href="<?php echo e(url('prodi/d4trpl')); ?>"
                                    class="btn btn-success rounded-pill px-4 py-2 shadow-sm">Detail D4TRPL</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Visi & Misi -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <div class="bg-white rounded shadow p-4">
                        <h2 class="mb-3 text-primary">Visi</h2>
                        <p class="mb-4">Menjadi jurusan unggul dalam bidang teknologi informasi dan komputer yang
                            inovatif, adaptif, dan berdaya saing global.</p>
                        <h2 class="mb-3 text-primary">Misi</h2>
                        <ul class="mb-0">
                            <li>Menyelenggarakan pendidikan berkualitas di bidang teknologi informasi dan komputer.</li>
                            <li>Mengembangkan penelitian dan inovasi yang bermanfaat bagi masyarakat dan industri.</li>
                            <li>Menjalin kerjasama dengan dunia usaha, industri, dan institusi pendidikan lain.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Keunggulan/Highlight -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10">
                    <h2 class="mb-4 text-center text-white">Keunggulan JTIK POLSUB</h2>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="bg-white rounded shadow p-3 h-100 text-center">
                                <div class="mb-2"><i class="bi bi-award-fill text-primary" style="font-size:2rem;"></i>
                                </div>
                                <h5>Fasilitas Modern</h5>
                                <p>Laboratorium komputer, ruang kelas multimedia, dan akses internet cepat untuk mendukung
                                    pembelajaran.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-white rounded shadow p-3 h-100 text-center">
                                <div class="mb-2"><i class="bi bi-people-fill text-primary" style="font-size:2rem;"></i>
                                </div>
                                <h5>Dosen Profesional</h5>
                                <p>Tenaga pengajar berpengalaman di bidang teknologi informasi, lulusan S2 dan S3 dari
                                    universitas ternama.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-white rounded shadow p-3 h-100 text-center">
                                <div class="mb-2"><i class="bi bi-lightning-fill text-primary"
                                        style="font-size:2rem;"></i></div>
                                <h5>Koneksi Industri</h5>
                                <p>Kerjasama dengan perusahaan IT, magang industri, dan peluang kerja luas bagi lulusan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<style>
    .prodi-modern-card {
        border-radius: 1.5rem;
        box-shadow: 0 4px 24px 0 rgba(30, 41, 59, 0.10), 0 1.5px 6px 0 rgba(30, 41, 59, 0.08);
        transition: transform 0.25s cubic-bezier(.4, 2, .6, 1), box-shadow 0.25s;
        background: rgba(255, 255, 255, 0.95);
    }

    .prodi-modern-card:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 8px 32px 0 rgba(30, 41, 59, 0.18), 0 3px 12px 0 rgba(30, 41, 59, 0.12);
        background: #fff;
    }

    .prodi-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 64px;
        height: 64px;
        border-radius: 50%;
        background: linear-gradient(135deg, #e0e7ff 0%, #f0fdfa 100%);
        margin: 0 auto 1rem auto;
        box-shadow: 0 2px 8px 0 rgba(59, 130, 246, 0.08);
    }
</style>

<?php echo $__env->make('layouts.landing', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Jurusan\jtik\tampilan\resources\views/prodi/index.blade.php ENDPATH**/ ?>