<?php $__env->startSection('content'); ?>
  <!-- ================= Banner section start ================= -->
    <section class="vl-hero-area vl-hero-area-4 vl-hero-bg p-relative z-index-1 fix pt-190 pb-70"
        style="background: linear-gradient(135deg, rgba(58,47,217,0.25) 0%, rgba(78,31,174,0.55) 100%), url('/img/about/gedung-jtik.jpg') center center/cover no-repeat; min-height: 100vh;">
    <div class="container">
    <div class="row">
                <div class="col-xl-6 mb-30 d-flex align-items-center" style="min-height:60vh;">
                    <div class="vl-hero-content p-relative z-index-1 ps-4 pe-4" style="max-width: 600px; width:100%; background: rgba(0,0,0,0.01);">
        <div class="vl-section-title-wrapper">
                            <h4 class="vl-section-subtitle-5 vl-white vl-upper mb-3" style="font-size:1.1rem; letter-spacing:1px;">Jurusan Teknologi Informasi dan Komputer</h4>
                            <h1 class="vl-section-heading vl-section-heading-2 vl-white pt-2 mb-4" style="font-size:2.5rem; line-height:1.2; font-weight:700;">Jurusan Teknologi Informasi dan Komputer - Mewujudkan Inovator Digital Masa Depan</h1>
                            <ul class="vl-section-description mb-4" style="color:#fff; font-size:18px; line-height:1.7;">
                                <li>Kurikulum berbasis industri 4.0</li>
                                <li>Dosen berpengalaman dan bersertifikasi</li>
                                <li>Laboratorium lengkap dan modern</li>
                                <li>Peluang magang dan kerja sama industri</li>
                                <li>Sertifikasi kompetensi nasional & internasional</li>
                            </ul>
        </div>
                        <div class="vl-btns mb-2">
        <div class="vl-herobtn vl-upper">
                                <a href=<?php echo e(route('prodi.index')); ?> class="theme-btn" style="padding: 12px 32px; font-size:1.1rem; border-radius:32px; font-weight:600;">Lihat Program Studi<span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
        </div>
      </div>
      </div>
                <!-- Hapus kolom kanan gambar gedung -->
        </div>
        </div>
        <style>
        @media (max-width: 991px) {
          .vl-hero-content {text-align: center !important; margin: 0 auto;}
          .vl-hero-area .col-xl-6 {justify-content: center !important;}
        }
        </style>
  </section>
    <div class="gradient-transition"></div>
    <style>
    .gradient-transition {
      width: 100%;
      height: 160px;
      margin-top: -160px;
      background: linear-gradient(
        to bottom,
        rgba(78,31,174,0.35) 0%,
        rgba(78,31,174,0.18) 30%,
        rgba(78,31,174,0.08) 60%,
        rgba(247,247,250,0.95) 90%,
        #f7f7fa 100%
      );
      z-index: 2;
      position: relative;
    }
    @media (max-width: 991px) {
      .gradient-transition { height: 80px; margin-top: -80px; }
    }
    </style>
  <!-- ================= Banner section End ================= -->

    <!-- ================= Program Studi section start ================= -->
    <!-- Section Program Studi dihapus seluruhnya -->
    <!-- ================= Program Studi section End ================= -->

    <!-- ================= Dosen & Tendik section start ================= -->
    <section class="vl-team vl-team-bg p-relative pt-100 pb-100">
        <div class="container p-relative">
        <div class="row">
          <div class="col-lg-8">
          <div class="vl-section-title-wrapper mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
            <div class="vl-section-subheading">
            <h4 class="vl-section-subtitle-6 vl-upper">Dosen dan Tenaga Kependidikan</h4>
            </div>
            
          </div>
          </div>
          <div class="col-lg-4"></div>
          </div>

        <div class="contain">
          <div id="test" class="owl-carousel owl-theme">
          <?php
            $prioritas = [
              'Ketua Jurusan',
              'Sekretaris Jurusan',
              'Ketua Prodi TRPL',
              'Ketua Prodi SI',
            ];
            $dosens_prioritas = collect($dosens)->filter(fn($d) => in_array($d->jabatan, $prioritas));
            $dosens_biasa = collect($dosens)->filter(fn($d) => !in_array($d->jabatan, $prioritas));
            $dosens_urut = $dosens_prioritas->sortBy(function($d) use ($prioritas) {
              return array_search($d->jabatan, $prioritas);
            })->concat($dosens_biasa);
          ?>
          <?php $__currentLoopData = $dosens_urut; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dosen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="vl-team-sin">
              <div class="vl-team-thumb">
                <div class="vl-team-shape">
                  <img src="/img/icons/vl-tean-shap1.svg" alt="" />
                </div>
                <img class="w-100" src="<?php echo e($dosen->foto ? asset('storage/' . $dosen->foto) : '/img/team/vl-team-4.1.png'); ?>" alt="<?php echo e($dosen->nama); ?>" />
                <div class="vl-tem-social">
                  <ul>
                    <li><a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a></li>
                    <li><a href="#"><span><i class="fa-brands fa-linkedin-in"></i></span></a></li>
                    <li><a href="#"><span><i class="fa-brands fa-instagram"></i></span></a></li>
                    <li><a href="#"><span><i class="fa-brands fa-youtube"></i></span></a></li>
                  </ul>
                </div>
              </div>
              <div class="vl-team-content">
                <h4 class="title"><a href="#"><?php echo e($dosen->nama); ?></a></h4>
                <span><?php echo e($dosen->jabatan ?? 'Dosen'); ?></span>
            </div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
    </div>
  </section>
    <!-- ================= Dosen & Tendik section End ================= -->

  <!-- ================= Service section start ================= -->
  <section class="vl-service-area vl-gray-bg-4 pt-100 pb-70">
    <div class="container">
    <div class="vl-section-title-wrapper text-center mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
      <div class="vl-section-subheading">
      <h4 class="vl-section-subtitle-6 vl-upper">Berita</h4>
      </div>
      <h2 class="vl-section-title vl-section-title-2 pt-16">Empowering Growth with <br />Smart IT Services</h2>
    </div>
    <div class="row">
      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
      <div class="vl-service-icon-box-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
        <span><img src="/img/icons/vl-ser-ic-4.11.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
        <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="<?php echo e(route('second', ['services', 'single'])); ?>">Excellence in Solution</a></h3>
        <p class="vl-fs-18 vl-lineheight-28 pb-24">
          Leverage the power cloud to enhance <br /> scalability, flexibility, and performance <br />Our cloud computing solutions secure.
        </p>
        <a href="<?php echo e(route('second', ['services', 'single'])); ?>" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single service box end -->

      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100">
      <div class="vl-service-icon-box-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
        <span><img src="/img/icons/vl-ser-ic-4.22.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
        <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="<?php echo e(route('second', ['services', 'single'])); ?>">IT Infrastcture Management</a></h3>
        <p class="vl-fs-18 vl-lineheight-28 pb-24">
          Optimize your business operations with <br /> reliable IT infrastructure management <br /> From network setup to hardware.
        </p>
        <a href="<?php echo e(route('second', ['services', 'single'])); ?>" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single service box end -->

      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200">
      <div class="vl-service-icon-box-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
        <span><img src="/img/icons/vl-ser-ic-4.3.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
        <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="<?php echo e(route('second', ['services', 'single'])); ?>">Cybersecurity Services</a></h3>
        <p class="vl-fs-18 vl-lineheight-28 pb-24">
          In today’s digital world, protecting your <br /> data is more critical than ever. Our Best <br /> comprehensive cybersecurity services.
        </p>
        <a href="<?php echo e(route('second', ['services', 'single'])); ?>" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single service box end -->

      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1300">
      <div class="vl-service-icon-box-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
        <span><img src="/img/icons/vl-ser-ic-4.4.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
        <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="<?php echo e(route('second', ['services', 'single'])); ?>">IT Consulting & Strategy</a></h3>
        <p class="vl-fs-18 vl-lineheight-28 pb-24">
          Achieve your business goal with expert <br /> IT consulting and strategy services Our <br />consultants work with you to identify.
        </p>
        <a href="<?php echo e(route('second', ['services', 'single'])); ?>" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single service box end -->

      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1400">
      <div class="vl-service-icon-box-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
        <span><img src="/img/icons/vl-ser-ic-4.5.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
        <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="<?php echo e(route('second', ['services', 'single'])); ?>">Managed IT Services</a></h3>
        <p class="vl-fs-18 vl-lineheight-28 pb-24">
          Focus on your core business while we <br /> manage your IT operation our managed <br /> services include 24/7 monitoring.
        </p>
        <a href="<?php echo e(route('second', ['services', 'single'])); ?>" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single service box end -->

      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
      <div class="vl-service-icon-box-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
        <span><img src="/img/icons/vl-ser-ic-4.6.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
        <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="<?php echo e(route('second', ['services', 'single'])); ?>">Network Design & Security</a></h3>
        <p class="vl-fs-18 vl-lineheight-28 pb-24">
          Create a robust and secure network <br /> infrastructure with our design security <br /> services we develop networks that.
        </p>
        <a href="<?php echo e(route('second', ['services', 'single'])); ?>" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single service box end -->
    </div>
    </div>
  </section>
  <!-- ================= Service section End ================= -->
  <style>
  .vl-team .contain {
    position: relative;
  }
  .owl-carousel .owl-nav {
    position: absolute;
    top: -70px;
    right: 0;
    left: auto;
    display: flex;
    gap: 16px;
    z-index: 20;
    justify-content: flex-end;
    width: 100%;
    pointer-events: auto;
  }
  .owl-carousel .owl-nav button {
    margin: 0 !important;
  }
  @media (max-width: 991px) {
    .owl-carousel .owl-nav {
      top: -50px;
      gap: 8px;
    }
  }
  </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.landing', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Jurusan\jtik\tampilan\resources\views/index.blade.php ENDPATH**/ ?>