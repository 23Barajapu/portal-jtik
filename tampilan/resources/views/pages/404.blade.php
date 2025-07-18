@extends('layouts.landing', ['title' => 'O-Tech || 404'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="vl-breadcrumb-bg p-relative z-index-1 fix pt-200 pb--70" style="background-image: url(/img/banner/vl-breadcrumb-bg.png);">
    <div class="container">
    <div class="row">
      <div class="col-xl-6 col-md-6 mb-30">
      <div class="vl-breadcrumb">
        <h1 class="vl-fs-60 vl-white">Error 404</h1>
        <div class="vl-breadcrumb-list">
        <span><a href="{{ route('any', 'index') }}">Home</a></span>
        <span class="dvir"><i class="fa-solid fa-angle-right"></i></span>
        <span class="active"><a href="#">Error 404</a></span>
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

  <!-- ================= Error section start ================= -->
  <section class="vl-error-sec pt-100 pb-70">
    <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
      <div class="vl-error-con">
        <div class="vl-error-thumb pb-48">
        <img class="w-100" src="/img/banner/vl-404.png" alt="" />
        </div>
        <div class="vl-error-text">
        <h3 class="vl-fs-40 vl-lineheight-40 vl-text-cmn-blck pb-20 m-0">Sorry, Page Not Found!</h3>
        <p class="vl-text-para vl-fs-18 vl-lineheight-28 pb-30 m-0">
          Sorry, the page you are looking for doesn’t exist or has <br /> been moved. Here are some helpful links.
        </p>
        </div>

        <div class="vl-error-btn">
        <div class="vl-herobtn vl-aboutbtn vl-upper">
          <a href="{{ route('any', 'index') }}" class="theme-btn theme-btn2">Back To Home <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>
  <!-- ================= Error section End ================= -->
@endsection