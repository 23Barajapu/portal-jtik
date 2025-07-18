@extends('layouts.landing' , [ 'title' => 'O-Tech || Team'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="vl-breadcrumb-bg p-relative z-index-1 fix pt-200 pb--70" style="background-image: url(/img/banner/vl-breadcrumb-bg.png);">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-md-6 mb-30">
          <div class="vl-breadcrumb">
            <h1 class="vl-fs-60 vl-white">Our Team</h1>
            <div class="vl-breadcrumb-list">
              <span><a href="{{ route('any' , 'index') }}">Home</a></span>
              <span class="dvir"><i class="fa-solid fa-angle-right"></i></span>
              <span class="active"><a href="#">Our Team</a></span>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-6 mb-30">
          <div class="vl-hero-img p-relative">
            <div class="vl-hero-shape-4">
              <div class="vl-shape-2">
                <img src="/img/icons/vl-emoji-4.2.svg" alt="" />
              </div>
              <div class="vl-shape-3">
                <img src="/img/icons/vl-emoji-4.3.svg" alt="" />
              </div>
            </div>
            <div class="vl-breadcrumb-fan">
              <img class="w-100" src="/img/icons/vl-fan-sm.svg" alt="" />
            </div>
            <div class="vl-breadcrumb-img">
              <img src="/img/banner/vl-breadcrumb-1.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Banner section End ================= -->

  <!-- ================= Team section start ================= -->
  <section class="vl-team-iner pt-100 pb-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <!-- single team start -->
          <div class="vl-team-single vl-team-single-inner text-center p-relative fix">
            <div class="vl-team-single-image vl-team-single-image-2 z-index-1 p-relative">
              <img class="w-100" src="/img/team/vl-team-1.1.png" alt="" />
              <div class="vl-team-single-image-social vl-team-single-image-social-2 vl-team-single-image-social-2-iner">
                <ul>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-linkedin-in"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-instagram"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-youtube"></i></span></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="vl-team-single-content mt-20">
              <h4 class="vl-team-single-title pb-16"><a href="#">Kendra Cremin</a></h4>
              <span>Network Engineer</span>
            </div>
          </div>
          <!-- single team end -->
        </div>

        <div class="col-lg-3 col-md-6">
          <!-- single team start -->
          <div class="vl-team-single vl-team-single-inner text-center p-relative fix mr-0 mb-30">
            <div class="vl-team-single-image vl-team-single-image-2 z-index-1 p-relative">
              <img class="w-100" src="/img/team/vl-team-1.2.png" alt="" />
              <div class="vl-team-single-image-social vl-team-single-image-social-2 vl-team-single-image-social-2-iner">
                <ul>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-linkedin-in"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-instagram"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-youtube"></i></span></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="vl-team-single-content mt-20">
              <h4 class="vl-team-single-title pb-16"><a href="#">Dennis Jacobson</a></h4>
              <span>CEO & Founder</span>
            </div>
          </div>
          <!-- single team end -->
        </div>

        <div class="col-lg-3 col-md-6">
          <!-- single team start -->
          <div class="vl-team-single vl-team-single-inner text-center p-relative fix mr-0 mb-30">
            <div class="vl-team-single-image vl-team-single-image-2 z-index-1 p-relative">
              <img class="w-100" src="/img/team/vl-team-1.3.png" alt="" />
              <div class="vl-team-single-image-social vl-team-single-image-social-2 vl-team-single-image-social-2-iner">
                <ul>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-linkedin-in"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-instagram"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-youtube"></i></span></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="vl-team-single-content mt-20">
              <h4 class="vl-team-single-title pb-16"><a href="#">Patricia Wilkinson</a></h4>
              <span>Digital Marketer</span>
            </div>
          </div>
          <!-- single team end -->
        </div>

        <div class="col-lg-3 col-md-6">
          <!-- single team start -->
          <div class="vl-team-single vl-team-single-inner text-center p-relative fix mr-0 mb-30">
            <div class="vl-team-single-image vl-team-single-image-2 z-index-1 p-relative">
              <img class="w-100" src="/img/team/vl-team-1.4.png" alt="" />
              <div class="vl-team-single-image-social vl-team-single-image-social-2 vl-team-single-image-social-2-iner">
                <ul>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-linkedin-in"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-instagram"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-youtube"></i></span></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="vl-team-single-content mt-20">
              <h4 class="vl-team-single-title pb-16"><a href="#">Jack Williamson</a></h4>
              <span>Digital Marketer</span>
            </div>
          </div>
          <!-- single team end -->
        </div>

        <div class="col-lg-3 col-md-6">
          <!-- single team start -->
          <div class="vl-team-single vl-team-single-inner text-center p-relative fix mr-0 mb-30">
            <div class="vl-team-single-image vl-team-single-image-2 z-index-1 p-relative">
              <img class="w-100" src="/img/team/vl-team-1.5.png" alt="" />
              <div class="vl-team-single-image-social vl-team-single-image-social-2 vl-team-single-image-social-2-iner">
                <ul>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-linkedin-in"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-instagram"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-youtube"></i></span></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="vl-team-single-content mt-20">
              <h4 class="vl-team-single-title pb-16"><a href="#">Julio O'Connell</a></h4>
              <span>CEO & Founder</span>
            </div>
          </div>
          <!-- single team end -->
        </div>

        <div class="col-lg-3 col-md-6">
          <!-- single team start -->
          <div class="vl-team-single vl-team-single-inner text-center p-relative fix mr-0 mb-30">
            <div class="vl-team-single-image vl-team-single-image-2 z-index-1 p-relative">
              <img class="w-100" src="/img/team/vl-team-1.6.png" alt="" />
              <div class="vl-team-single-image-social vl-team-single-image-social-2 vl-team-single-image-social-2-iner">
                <ul>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-linkedin-in"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-instagram"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-youtube"></i></span></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="vl-team-single-content mt-20">
              <h4 class="vl-team-single-title pb-16"><a href="#">Regina Klocko</a></h4>
              <span>Network Engineer</span>
            </div>
          </div>
          <!-- single team end -->
        </div>

        <div class="col-lg-3 col-md-6">
          <!-- single team start -->
          <div class="vl-team-single vl-team-single-inner text-center p-relative fix mr-0 mb-30">
            <div class="vl-team-single-image vl-team-single-image-2 z-index-1 p-relative">
              <img class="w-100" src="/img/team/vl-team-1.7.png" alt="" />
              <div class="vl-team-single-image-social vl-team-single-image-social-2 vl-team-single-image-social-2-iner">
                <ul>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-linkedin-in"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-instagram"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-youtube"></i></span></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="vl-team-single-content mt-20">
              <h4 class="vl-team-single-title pb-16"><a href="#">Geneva Herzog</a></h4>
              <span>Network Engineer</span>
            </div>
          </div>
          <!-- single team end -->
        </div>

        <div class="col-lg-3 col-md-6">
          <!-- single team start -->
          <div class="vl-team-single vl-team-single-inner text-center p-relative fix mr-0 mb-30">
            <div class="vl-team-single-image vl-team-single-image-2 z-index-1 p-relative">
              <img class="w-100" src="/img/team/vl-team-1.8.png" alt="" />
              <div class="vl-team-single-image-social vl-team-single-image-social-2 vl-team-single-image-social-2-iner">
                <ul>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-linkedin-in"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-instagram"></i></span></a>
                  </li>
                  <li>
                    <a href="#"><span><i class="fa-brands fa-youtube"></i></span></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="vl-team-single-content mt-20">
              <h4 class="vl-team-single-title pb-16"><a href="#">Mitchell Rice</a></h4>
              <span>Digital Marketer</span>
            </div>
          </div>
          <!-- single team end -->
        </div>
      </div>
      <div class="row">
        <div class="col-12 m-auto">
          <div class="theme-pagination text-center mt-18">
            <ul>
              <li>
                <a href="#"><i class="fa-solid fa-angle-left"></i></a>
              </li>
              <li>
                <a class="active" href="#">01</a>
              </li>
              <li>
                <a href="#">02</a>
              </li>
              <li>...</li>
              <li>
                <a href="#">12</a>
              </li>
              <li>
                <a href="#"><i class="fa-solid fa-angle-right"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Team section End ================= -->
@endsection
