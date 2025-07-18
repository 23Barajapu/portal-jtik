<!-- ================= Header section start ================= -->
<header>
  <div id="vl-header-sticky" class="vl-header-area vl-transparent-header">
    <div class="container vl-header-bg-5">
      <div class="row align-items-center">
        <div class="col-lg-2 col-md-6 col-6">
          <div class="vl-logo">
            <a href="{{ route('any' , 'index') }}"><img src="/img/logo/vl-logo-1.1.png" alt="" /></a>
          </div>
        </div>
        <div class="col-lg-8 d-none d-lg-block">
          <div class="vl-main-menu text-center">
            <nav class="vl-mobile-menu-active">
              <ul>
                <li>
                  <a href="#about">About us</a>
                </li>
                <li>
                  <a href="#service">Services</a>
                </li>
                <li>
                  <a href="#case">Case Studies</a>
                </li>
                <li>
                  <a href="#testimonial">Testimonial</a>
                </li>
                <li>
                  <a href="#work">work</a>
                </li>
                <li>
                  <a href="#blog">Blog</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <div class="vl-hero-btn d-none d-lg-block text-lg-end">
            <a href="#contact" class="vl-btn-sec">
              <span class="vl-btn-wrap">
                <span class="vl-btn-y-1">get started</span>
                <span class="vl-btn-y-2">get started</span>
              </span>
            </a>
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
<div class="vl-offcanvas vl-offcanvas-4">
  <div class="vl-offcanvas-wrapper">
    <div class="vl-offcanvas-header d-flex justify-content-between align-items-center mb-50">
      <div class="vl-offcanvas-logo">
        <a href="{{ route('any' , 'index') }}"><img src="/img/logo/vl-off-logo-4.1.png" alt="" /></a>
      </div>
      <div class="vl-offcanvas-close">
        <button class="vl-offcanvas-close-toggle"><i class="fal fa-times"></i></button>
      </div>
    </div>

    <div class="vl-offcanvas-menu d-lg-none mb-40">
      <nav></nav>
    </div>

    <div class="vl-offcanvas-btnm text-center mb-30">
      <a href="{{ route('second', ['pages', 'contact']) }}" class="vl-btn-sec w-100">
        <span class="vl-btn-wrap">
          <span class="vl-btn-y-1">get started</span>
          <span class="vl-btn-y-2">get started</span>
        </span>
      </a>
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

    <div class="vl-offcanvas-social mb-30">
      <h3 class="vl-offcanvas-sm-title">Follow Us</h3>
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
