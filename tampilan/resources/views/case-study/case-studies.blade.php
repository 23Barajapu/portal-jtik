@extends('layouts.landing', ['title' => 'O-Tech || Case Studies'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="vl-breadcrumb-bg p-relative z-index-1 fix pt-200 pb--70" style="background-image: url(/img/banner/vl-breadcrumb-bg.png);">
    <div class="container">
    <div class="row">
      <div class="col-xl-6 col-md-6 mb-30">
      <div class="vl-breadcrumb">
        <h1 class="vl-fs-60 vl-white">Case Studies</h1>
        <div class="vl-breadcrumb-list">
        <span><a href="{{ route('any', 'index') }}">Home</a></span>
        <span class="dvir"><i class="fa-solid fa-angle-right"></i></span>
        <span class="active"><a href="#">Case Studies</a></span>
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

  <!-- ================= Case Studies section start ================= -->
  <section class="vl-gallery p-relative z-index-1 pt-100 pb-70">
    <div class="container">
    <div class="row">
      <!-- single case studies -->
      <div class="col-lg-4 col-md-6">
      <div class="vl-gallery-testimonial-2 br-4 fix p-relative mb-30 z-index-1">
        <div class="vl-gallery-testimonial-2-image">
        <img class="w-100" src="/img/studies/vl-studies-2.1.png" alt="" />
        </div>
        <div class="vl-gallery-testimonial-2-con">
        <h3 class="vl-gallery-testimonial-2-title"><a href="{{ route('second', ['case-study', 'single']) }}">Efficiency Managed IT Services</a></h3>
        </div>
        <div class="vl-gallery-poligon">
        <h3><a href="{{ route('second', ['case-study', 'single']) }}">Read More</a></h3>
        <span class="blu-bg"><i class="fa-regular fa-arrow-right"></i></span>
        </div>
      </div>
      </div>

      <!-- single case studies -->
      <div class="col-lg-4 col-md-6">
      <div class="vl-gallery-testimonial-2 br-4 fix p-relative mb-30 z-index-1">
        <div class="vl-gallery-testimonial-2-image">
        <img class="w-100" src="/img/studies/vl-studies-2.2.png" alt="" />
        </div>
        <div class="vl-gallery-testimonial-2-con">
        <h3 class="vl-gallery-testimonial-2-title"><a href="{{ route('second', ['case-study', 'single']) }}">Building Resilient Networks</a></h3>
        </div>
        <div class="vl-gallery-poligon">
        <h3><a href="{{ route('second', ['case-study', 'single']) }}">Read More</a></h3>
        <span class="blu-bg"><i class="fa-regular fa-arrow-right"></i></span>
        </div>
      </div>
      </div>

      <!-- single case studies -->
      <div class="col-lg-4 col-md-6">
      <div class="vl-gallery-testimonial-2 br-4 fix p-relative mb-30 z-index-1">
        <div class="vl-gallery-testimonial-2-image">
        <img class="w-100" src="/img/studies/vl-studies-2.3.png" alt="" />
        </div>
        <div class="vl-gallery-testimonial-2-con">
        <h3 class="vl-gallery-testimonial-2-title"><a href="{{ route('second', ['case-study', 'single']) }}">Seamless Cloud Migration</a></h3>
        </div>
        <div class="vl-gallery-poligon">
        <h3><a href="{{ route('second', ['case-study', 'single']) }}">Read More</a></h3>
        <span class="blu-bg"><i class="fa-regular fa-arrow-right"></i></span>
        </div>
      </div>
      </div>

      <!-- single case studies -->
      <div class="col-lg-4 col-md-6">
      <div class="vl-gallery-testimonial-2 br-4 fix p-relative mb-30 z-index-1">
        <div class="vl-gallery-testimonial-2-image">
        <img class="w-100" src="/img/studies/vl-studies-2.4.png" alt="" />
        </div>
        <div class="vl-gallery-testimonial-2-con">
        <h3 class="vl-gallery-testimonial-2-title"><a href="{{ route('second', ['case-study', 'single']) }}">Custom Software Development</a></h3>
        </div>
        <div class="vl-gallery-poligon">
        <h3><a href="{{ route('second', ['case-study', 'single']) }}">Read More</a></h3>
        <span class="blu-bg"><i class="fa-regular fa-arrow-right"></i></span>
        </div>
      </div>
      </div>

      <!-- single case studies -->
      <div class="col-lg-4 col-md-6">
      <div class="vl-gallery-testimonial-2 br-4 fix p-relative mb-30 z-index-1">
        <div class="vl-gallery-testimonial-2-image">
        <img class="w-100" src="/img/studies/vl-studies-2.5.png" alt="" />
        </div>
        <div class="vl-gallery-testimonial-2-con">
        <h3 class="vl-gallery-testimonial-2-title"><a href="{{ route('second', ['case-study', 'single']) }}">IoT Integration Solutions</a></h3>
        </div>
        <div class="vl-gallery-poligon">
        <h3><a href="{{ route('second', ['case-study', 'single']) }}">Read More</a></h3>
        <span class="blu-bg"><i class="fa-regular fa-arrow-right"></i></span>
        </div>
      </div>
      </div>

      <!-- single case studies -->
      <div class="col-lg-4 col-md-6">
      <div class="vl-gallery-testimonial-2 br-4 fix p-relative mb-30 z-index-1">
        <div class="vl-gallery-testimonial-2-image">
        <img class="w-100" src="/img/studies/vl-case-studies-3.4.png" alt="" />
        </div>
        <div class="vl-gallery-testimonial-2-con">
        <h3 class="vl-gallery-testimonial-2-title"><a href="{{ route('second', ['case-study', 'single']) }}">Process Automation Project</a></h3>
        </div>
        <div class="vl-gallery-poligon">
        <h3><a href="{{ route('second', ['case-study', 'single']) }}">Read More</a></h3>
        <span class="blu-bg"><i class="fa-regular fa-arrow-right"></i></span>
        </div>
      </div>
      </div>

      <!-- single case studies -->
      <div class="col-lg-4 col-md-6">
      <div class="vl-gallery-testimonial-2 br-4 fix p-relative mb-30 z-index-1">
        <div class="vl-gallery-testimonial-2-image">
        <img class="w-100" src="/img/studies/vl-studies-2.6.png" alt="" />
        </div>
        <div class="vl-gallery-testimonial-2-con">
        <h3 class="vl-gallery-testimonial-2-title"><a href="{{ route('second', ['case-study', 'single']) }}">Digital Transformation Strategy</a></h3>
        </div>
        <div class="vl-gallery-poligon">
        <h3><a href="{{ route('second', ['case-study', 'single']) }}">Read More</a></h3>
        <span class="blu-bg"><i class="fa-regular fa-arrow-right"></i></span>
        </div>
      </div>
      </div>

      <!-- single case studies -->
      <div class="col-lg-4 col-md-6">
      <div class="vl-gallery-testimonial-2 br-4 fix p-relative mb-30 z-index-1">
        <div class="vl-gallery-testimonial-2-image">
        <img class="w-100" src="/img/studies/vl-studies-2.7.png" alt="" />
        </div>
        <div class="vl-gallery-testimonial-2-con">
        <h3 class="vl-gallery-testimonial-2-title"><a href="{{ route('second', ['case-study', 'single']) }}">Managed IT Service Solutions</a></h3>
        </div>
        <div class="vl-gallery-poligon">
        <h3><a href="{{ route('second', ['case-study', 'single']) }}">Read More</a></h3>
        <span class="blu-bg"><i class="fa-regular fa-arrow-right"></i></span>
        </div>
      </div>
      </div>

      <!-- single case studies -->
      <div class="col-lg-4 col-md-6">
      <div class="vl-gallery-testimonial-2 br-4 fix p-relative mb-30 z-index-1">
        <div class="vl-gallery-testimonial-2-image">
        <img class="w-100" src="/img/studies/vl-studies-2.8.png" alt="" />
        </div>
        <div class="vl-gallery-testimonial-2-con">
        <h3 class="vl-gallery-testimonial-2-title"><a href="{{ route('second', ['case-study', 'single']) }}">Sustainable IT Infrastructure</a></h3>
        </div>
        <div class="vl-gallery-poligon">
        <h3><a href="{{ route('second', ['case-study', 'single']) }}">Read More</a></h3>
        <span class="blu-bg"><i class="fa-regular fa-arrow-right"></i></span>
        </div>
      </div>
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
  <!-- ================= Case Studies section End ================= -->
@endsection