<!-- ================= Header section start ================= -->
<header>
    <div id="vl-header-sticky" class="vl-header-area vl-transparent-header vl-transparent-header-4">
        <div class="container vl-header-bg-4">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="vl-logo">
                        <a href="{{ route('any', 'index') }}">
                            <img src="/img/logo/Logo.png" alt="Logo JTIK"
                                style="max-height: 64px; width: auto; display: block; margin: 0 auto;" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="vl-main-menu text-center">
                        <nav class="vl-mobile-menu-active">
                            <ul>
                                <li>
                                    <a href="{{ route('any', 'index') }}">Home</a>
                                </li>
                                <li class="has-dropdown">
                                    <a href="{{ route('about.index') }}">About Us <span><i
                                                class="fa-regular fa-angle-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('about.visimisi') }}">Visi Misi</a></li>
                                        <li><a href="{{ route('about.tujuan') }}">Tujuan</a></li>
                                        <li><a href="{{ route('about.sejarah') }}">Sejarah</a></li>
                                        <li><a href="{{ route('about.struktur') }}">Struktur Organisasi</a></li>
                                        <li><a href="{{ route('about.dosen') }}">Dosen & Tenaga Kependidikan</a></li>
                                        <li><a href="{{ route('about.cpl') }}">Kompetensi Lulusan</a></li>
                                        <li><a href="{{ route('about.fasilitas') }}">Fasilitas</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="{{ route('prodi.index') }}">Program Studi <span><i
                                                class="fa-regular fa-angle-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('prodi.d3si') }}">D3 Sistem Informasi</a></li>
                                        <li><a href="{{ route('prodi.d4trpl') }}">D4 Teknologi Rekayasa Perangkat
                                                Lunak</a></li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="{{ route('program.index') }}">Program <span><i
                                                class="fa-regular fa-angle-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="https://polsub.ac.id/" target="_blank">Polsub</a></li>
                                        <li><a href="https://learn.sistempolsub.id/moodle/my/"
                                                target="_blank">E-Learning</a></li>
                                        <li><a href="{{ route('program.berita') }}">Berita</a></li>
                                        <li><a href="{{ route('program.siakad') }}">Siakad</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="vl-herobtn d-none d-lg-block fl-right">
                        <a href="{{ route('second', ['pages', 'contact']) }}" class="theme-btn">GET STARTED <span><i
                                    class="fa-regular fa-arrow-right"></i></span></a>
                    </div>

                    <div class="vl-header-action-item d-block d-lg-none">
                        <button type="button" class="vl-offcanvas-toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                                <rect x="10" width="20" height="2" fill="currentColor"></rect>
                                <rect x="5" y="7" width="25" height="2" fill="currentColor"></rect>
                                <rect x="10" y="14" width="20" height="2" fill="currentColor"></rect>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- offcanvas menu start -->
<div class="vl-offcanvas vl-offcanvas-bg-1">
    <div class="vl-offcanvas-wrapper">
        <div class="vl-offcanvas-header d-flex justify-content-between align-items-center mb-50">
            <div class="vl-offcanvas-logo">
                <a href="{{ route('any', 'index') }}">
                    <img src="/img/logo/Logo.png" alt="Logo JTIK"
                        style="max-height: 48px; width: auto; display: block; margin: 0 auto;" />
                </a>
            </div>
            <div class="vl-offcanvas-close">
                <button class="vl-offcanvas-close-toggle"><i class="fal fa-times"></i></button>
            </div>
        </div>

        <div class="vl-offcanvas-menu d-lg-none mb-40">
            <nav></nav>
        </div>

        <div class="vl-offcanvas-btnm text-center mb-30">
            <div class="vl-herobtn vl-aboutbtn w-100 vl-upper">
                <a href="{{ route('second', ['pages', 'contact']) }}" class="theme-btn theme-btn2">get started<span><i
                            class="fa-regular fa-arrow-right"></i></span></a>
            </div>
        </div>

        <div class="vl-offcanvas-info mb-30">
            <h3 class="vl-offcanvas-sm-title pb-15">Contact Us</h3>

            <div class="vl-offcanvas-info-box mb-15">
                <div class="vl-offcanvas-info-box-icon">
                    <span><img src="/img/icons/vl-contact-iner-phone.svg" alt="" /></span>
                </div>
                <div class="vl-offcanvas-info-box-text">
                    <span><a href="tel:5799546476">+57 9954 6476</a></span>
                </div>
            </div>

            <div class="vl-offcanvas-info-box mb-15">
                <div class="vl-offcanvas-info-box-icon">
                    <span><img src="/img/icons/vl-contact-iner-mail.svg" alt="" /></span>
                </div>
                <div class="vl-offcanvas-info-box-text">
                    <span><a href="mailto:OTechItService.com">OTech It Service.com</a></span>
                </div>
            </div>

            <div class="vl-offcanvas-info-box mb-15">
                <div class="vl-offcanvas-info-box-icon">
                    <span><img src="/img/icons/vl-contact-iner-location.svg" alt="" /></span>
                </div>
                <div class="vl-offcanvas-info-box-text">
                    <span><a href="mailto:OTechItService.com">8708 Technology, USA</a></span>
                </div>
            </div>
        </div>

        <div class="vl-offcanvas-social mb-40">
            <h3 class="vl-offcanvas-sm-title mb-15">Follow Us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<div class="vl-offcanvas-overlay"></div>
<!-- offcanvas menu end -->
<!-- ================= Header section End ================= -->
