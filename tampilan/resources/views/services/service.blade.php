@extends('layouts.landing', ['title' => 'O-Tech || Service'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="vl-breadcrumb-bg p-relative z-index-1 fix pt-200 pb--70" style="background-image: url(/img/banner/vl-breadcrumb-bg.png);">
    <div class="container">
    <div class="row">
      <div class="col-xl-6 col-md-6 mb-30">
      <div class="vl-breadcrumb">
        <h1 class="vl-fs-60 vl-white">Our Service</h1>
        <div class="vl-breadcrumb-list">
        <span><a href="{{ route('any', 'index') }}">Home</a></span>
        <span class="dvir"><i class="fa-solid fa-angle-right"></i></span>
        <span class="active"><a href="#">Our Service</a></span>
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

  <!-- ================= Service section start ================= -->
  <section class="vl-service-area pt-100 pb-70">
    <div class="container">
    <div class="row">
      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30">
      <div class="vl-service-icon-box-4 vl-service-icon-box-4-bg vl-gray-bg-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
        <span><img src="/img/icons/vl-ser-ic-4.11.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
        <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="#">Cloud Computing Solutions</a></h3>
        <p class="pb-24">
          Leverage the power cloud to enhance <br /> scalability, flexibility, and performance <br />Our cloud computing solutions secure.
        </p>
        <a href="#" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single service box end -->

      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30">
      <div class="vl-service-icon-box-4 vl-service-icon-box-4-bg vl-gray-bg-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
        <span><img src="/img/icons/vl-ser-ic-4.22.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
        <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="#">IT Infrastructure Management</a></h3>
        <p class="pb-24">
          Optimize your business operations with <br /> reliable IT infrastructure management <br /> From network setup to hardware.
        </p>
        <a href="#" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single service box end -->

      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30">
      <div class="vl-service-icon-box-4 vl-service-icon-box-4-bg vl-gray-bg-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
        <span><img src="/img/icons/vl-ser-ic-4.3.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
        <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="#">Cybersecurity Services</a></h3>
        <p class="pb-24">
          In today’s digital world, protecting your <br /> data is more critical than ever. Our Best <br /> comprehensive cybersecurity services.
        </p>
        <a href="#" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single service box end -->

      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30">
      <div class="vl-service-icon-box-4 vl-service-icon-box-4-bg vl-gray-bg-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
        <span><img src="/img/icons/vl-ser-ic-4.4.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
        <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="#">IT Consulting & Strategy</a></h3>
        <p class="pb-24">
          Achieve your business goal with expert <br /> IT consulting and strategy services Our <br />consultants work with you to identify.
        </p>
        <a href="#" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single service box end -->

      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30">
      <div class="vl-service-icon-box-4 vl-service-icon-box-4-bg vl-gray-bg-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
        <span><img src="/img/icons/vl-ser-ic-4.5.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
        <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="#">Managed IT Services</a></h3>
        <p class="pb-24">
          Focus on your core business while we <br /> manage your IT operation our managed <br /> services include 24/7 monitoring.
        </p>
        <a href="#" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single service box end -->

      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30">
      <div class="vl-service-icon-box-4 vl-service-icon-box-4-bg vl-gray-bg-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
        <span><img src="/img/icons/vl-ser-ic-4.6.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
        <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="#">Network Design & Security</a></h3>
        <p class="pb-24">
          Create a robust and secure network <br /> infrastructure with our design security <br /> services we develop networks that.
        </p>
        <a href="#" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single service box end -->
      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30">
      <div class="vl-service-icon-box-4 vl-service-icon-box-4-bg vl-gray-bg-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
        <span><img src="/img/icons/vl-ser-ic-4.11.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
        <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="#">Cloud Solutions</a></h3>
        <p class="pb-24">
          Leverage the power of the cloud to <br /> streamline your operations and boost <br />scalability our cloud solutions offer.
        </p>
        <a href="#" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single service box end -->

      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30">
      <div class="vl-service-icon-box-4 vl-service-icon-box-4-bg vl-gray-bg-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
        <span><img src="/img/icons/vl-ser-ic-4.22.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
        <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="#">Cybersecurity Services</a></h3>
        <p class="pb-24">
          Protect your business from evolving <br /> cyber threats with our comprehensive <br />cybersecurity solutions From threat.
        </p>
        <a href="#" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single service box end -->

      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30">
      <div class="vl-service-icon-box-4 vl-service-icon-box-4-bg vl-gray-bg-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
        <span><img src="/img/icons/vl-ser-ic-4.3.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
        <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="#">Software Development</a></h3>
        <p class="pb-24">
          Transform your ideas into reality with <br /> our custom software development <br />services whether you need mobile.
        </p>
        <a href="#" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single service box end -->
    </div>
    </div>
  </section>
  <!-- ================= Service section End ================= -->

  <!-- ================= Choose section start ================= -->
  <section class="vl-about-choose vl-gray-bg-4 pt-100 pb-70 p-relative">
    <div class="container">
    <div class="vl-section-title-wrapper mb-60">
      <h4 class="vl-section-subtitle-7 vl-upper">Why choose us</h4>
      <h2 class="vl-section-title vl-section-title-2 pt-16">We Don’t Just Deliver Solutions <br /> We Build Partnerships</h2>
    </div>
    <div class="row">
      <div class="col-lg-12">
      <div class="p-relative z-index-1">
        <div class="row">
        <div class="col-lg-5 col-md-6">
          <div class="vl-about-choose-img mb-30">
          <img class="w-100 img-custom-anim-left" src="/img/about/vl-about-choose-1.png" alt="" />
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="vl-about-choose-img-2 fix br-8 mb-30">
          <img class="w-100" src="/img/about/vl-about-choose-2.png" alt="" />
          </div>
        </div>
        <div class="col-lg-4">
          <div class="vl-about-choose-content">
          <p>
            We understand that every business is unique, <br />is why we offer customized IT solutions that <br /> fit your needs perfectly. Our approach rooted <br /> in collaboration and innovation, ensuring you <br /> receive the best tools and strategies.
          </p>

          <div class="vl-about-inner-btn">
            <a href="{{ route('second', ['services', 'service']) }}" class="vl-iner-btn">Learn more <span><i class="fa-light fa-arrow-right"></i></span></a>
          </div>
          </div>
        </div>

        <!-- counter box -->
        <div class="vl-hero-counter vl-about-choose-counter">
          <div class="vl-hero-counter-box vl-about-choose-counter-box mb-30">
          <span class="counter">90</span><span>k</span>
          <h4 class="vl-hero-counter-box-title title-2 pt-12">Happy Client</h4>
          </div>
          <div class="vl-hero-counter-box vl-about-choose-counter-box mb-30">
          <span class="counter">650</span><span>+</span>
          <h4 class="vl-hero-counter-box-title title-2 pt-12">Total Projects</h4>
          </div>

          <div class="vl-hero-counter-box vl-about-choose-counter-box mb-30">
          <span class="counter">85</span><span>+</span>
          <h4 class="vl-hero-counter-box-title title-2 pt-12">Work Together</h4>
          </div>

          <div class="vl-hero-counter-box vl-about-choose-counter-box mb-30">
          <span class="counter">12</span><span>+</span>
          <h4 class="vl-hero-counter-box-title title-2 pt-12">Year of Experience</h4>
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>
  <!-- ================= Choose section end ================= -->
@endsection