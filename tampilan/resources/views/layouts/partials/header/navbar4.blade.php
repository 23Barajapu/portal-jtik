<!-- ================= Header section start ================= -->
<header>
  <div id="vl-header-sticky" class="vl-header-area vl-transparent-header">
    <div class="container vl-header-bg-5">
      <div class="row align-items-center">
        <div class="col-lg-3 col-md-6 col-6">
          <div class="vl-logo">
            <a href="{{ route('any' , 'index') }}"><img src="/img/logo/Logo.png" alt="Logo JTIK" /></a>
          </div>
        </div>
        <div class="col-lg-6 d-none d-lg-block">
          <div class="vl-main-menu text-center">
            <nav class="vl-mobile-menu-active">
              <ul>
                <li class="has-dropdown">
                  <a href="#">Home <span><i class="fa-regular fa-angle-down"></i></span></a>
                  <div class="vl-mega-menu">
                    <div class="vl-home-menu">
                      <div class="row gx-4 row-cols-1 row-cols-lg-4">
                        <div class="col mb-25">
                          <div class="vl-home-thumb fix p-relative z-index-1">
                            <img class="w-100" src="/img/demo/vl-demo-1.1.png" alt="" />
                            <div class="vl-home-btn vl-home-btn4">
                              <a href="{{ route('any' , 'index') }}" target="_blank" class="vl-btn-sec">
                                <span class="vl-btn-wrap">
                                  <span class="vl-btn-y-1">Multi Page</span>
                                  <span class="vl-btn-y-2">Multi Page</span>
                                </span>
                              </a>

                              <a href="{{ route('second', ['single', 'index-1']) }}" target="_blank" class="vl-btn-sec mt-20">
                                <span class="vl-btn-wrap">
                                  <span class="vl-btn-y-1">Single Page</span>
                                  <span class="vl-btn-y-2">Single Page</span>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="col mb-25">
                          <div class="vl-home-thumb fix p-relative z-index-1">
                            <img class="w-100" src="/img/demo/vl-demo-1.2.png" alt="" />
                            <div class="vl-home-btn vl-home-btn4">
                              <a href="{{ route('second', ['demo', 'index2']) }}" target="_blank" class="vl-btn-sec">
                                <span class="vl-btn-wrap">
                                  <span class="vl-btn-y-1">Multi Page</span>
                                  <span class="vl-btn-y-2">Multi Page</span>
                                </span>
                              </a>

                              <a href="{{ route('second', ['single', 'index-2']) }}" target="_blank" class="vl-btn-sec mt-20">
                                <span class="vl-btn-wrap">
                                  <span class="vl-btn-y-1">Single Page</span>
                                  <span class="vl-btn-y-2">Single Page</span>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="col mb-25">
                          <div class="vl-home-thumb fix p-relative z-index-1">
                            <img class="w-100" src="/img/demo/vl-demo-1.3.png" alt="" />
                            <div class="vl-home-btn vl-home-btn4">
                              <a href="{{ route('second', ['demo', 'index3']) }}" target="_blank" class="vl-btn-sec">
                                <span class="vl-btn-wrap">
                                  <span class="vl-btn-y-1">Multi Page</span>
                                  <span class="vl-btn-y-2">Multi Page</span>
                                </span>
                              </a>

                              <a href="{{ route('second', ['single', 'index-3']) }}" target="_blank" class="vl-btn-sec mt-20">
                                <span class="vl-btn-wrap">
                                  <span class="vl-btn-y-1">Single Page</span>
                                  <span class="vl-btn-y-2">Single Page</span>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="col mb-25">
                          <div class="vl-home-thumb fix p-relative z-index-1">
                            <img class="w-100" src="/img/demo/vl-demo-1.4.png" alt="" />
                            <div class="vl-home-btn vl-home-btn4">
                              <a href="{{ route('second', ['demo', 'index4']) }}" target="_blank" class="vl-btn-sec">
                                <span class="vl-btn-wrap">
                                  <span class="vl-btn-y-1">Multi Page</span>
                                  <span class="vl-btn-y-2">Multi Page</span>
                                </span>
                              </a>

                              <a href="{{ route('second', ['single', 'index-4']) }}" target="_blank" class="vl-btn-sec mt-20">
                                <span class="vl-btn-wrap">
                                  <span class="vl-btn-y-1">Single Page</span>
                                  <span class="vl-btn-y-2">Single Page</span>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <a href="{{ route('second', ['pages', 'about']) }}">About us</a>
                </li>
                <li class="has-dropdown">
                  <a href="#">Services <span><i class="fa-regular fa-angle-down"></i></span></a>
                  <ul class="sub-menu sub-menu-4">
                    <li>
                      <a href="{{ route('second', ['services', 'service']) }}">Services</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['services', 'left']) }}">Service Left</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['services', 'right']) }}">Service Right</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['services', 'single']) }}">Service Single</a>
                    </li>
                  </ul>
                </li>

                <li class="has-dropdown">
                  <a href="#">Pages <span><i class="fa-regular fa-angle-down"></i></span></a>
                  <ul class="sub-menu sub-menu-4">
                    <li>
                      <a href="{{ route('second', ['pages', 'team']) }}">Team</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['pages', 'pricing-plan']) }}">Pricing Plan</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['pages', 'faq']) }}">Faq</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['pages', 'contact']) }}">Contact</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['pages', '404']) }}">404</a>
                    </li>
                  </ul>
                </li>

                <li class="has-dropdown">
                  <a href="#">Case Studies <span><i class="fa-regular fa-angle-down"></i></span></a>
                  <ul class="sub-menu sub-menu-4">
                    <li>
                      <a href="{{ route('second', ['case-study', 'case-studies']) }}">Case Studies</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['case-study', 'left']) }}">Case Studies Left</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['case-study', 'right']) }}">Case Studies Right</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['case-study', 'single']) }}">Case Studies Single</a>
                    </li>
                  </ul>
                </li>

                <li class="has-dropdown">
                  <a href="#">Blog <span><i class="fa-regular fa-angle-down"></i></span></a>
                  <ul class="sub-menu sub-menu-4">
                    <li>
                      <a href="{{ route('second', ['blogs', 'blog']) }}">Blog</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['blogs', 'left']) }}">Blog Left</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['blogs', 'right']) }}">Blog Right</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['blogs', 'single']) }}">Blog Single</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['blogs', 'sidebar']) }}">Blog Standred</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6">
          <div class="vl-hero-btn d-none d-lg-block text-lg-end">
            <a href="{{ route('second', ['pages', 'contact']) }}" class="vl-btn-sec">
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
        <a href="{{ route('any' , 'index') }}"><img src="/img/logo/Logo.png" alt="Logo JTIK" /></a>
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
