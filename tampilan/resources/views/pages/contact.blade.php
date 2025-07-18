@extends('layouts.landing', ['title' => 'O-Tech || Contact Us'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="vl-breadcrumb-bg p-relative z-index-1 fix pt-200 pb--70" style="background-image: url(/img/banner/vl-breadcrumb-bg.png);">
    <div class="container">
    <div class="row">
      <div class="col-xl-6 col-md-6 mb-30">
      <div class="vl-breadcrumb">
        <h1 class="vl-fs-60 vl-white">Contact Us</h1>
        <div class="vl-breadcrumb-list">
        <span><a href="{{ route('any', 'index') }}">Home</a></span>
        <span class="dvir"><i class="fa-solid fa-angle-right"></i></span>
        <span class="active"><a href="#">Contact Us</a></span>
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

  <!-- ================= Contact section start ================= -->
  <section class="vl-contact-iner pt-100 pb-70">
    <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
      <div class="vl-contact-iner-box br-8 vl-gray-bg-4 mb-30">
        <h3 class="vl-fs-24 vl-lineheight-24 vl-text-cmn-blck pb-20 m-0">Send us a Message</h3>
        <p class="vl-text-para vl-fs-18 vl-lineheight-28 pb-30 m-0">
        Have questions or need assistance? We're here to help! Whether <br /> you're exploring solutions, looking for a consultation, or need.
        </p>
        <div class="vl-contact-iner-form">
        <div class="row">
          <div class="col-lg-6 mb-20">
          <input type="text" placeholder="First Name" />
          </div>
          <div class="col-lg-6 mb-20">
          <input type="text" placeholder="Last Name" />
          </div>
          <div class="col-lg-6 mb-20">
          <input type="Email" placeholder="Email" />
          </div>
          <div class="col-lg-6 mb-20">
          <input type="number" placeholder="Number" />
          </div>
          <div class="col-lg-12 mb-20">
          <input type="text" placeholder="subject" />
          </div>
          <div class="col-lg-12 mb-20">
          <textarea name="message" id="message" placeholder="Message"></textarea>
          </div>

          <div class="col-lg-12">
          <div class="vl-about-inner-btn fl-right">
            <button class="vl-iner-btn">Send Now <span><i class="fa-light fa-arrow-right"></i></span></button>
          </div>
          </div>
        </div>
        </div>
      </div>
      </div>
      <div class="col-lg-6">
      <div class="vl-contact-iner-widget ml-50 mb-30">
        <div class="vl-section-title-wrapper">
        <h4 class="vl-section-subtitle-7 vl-upper">Contact us</h4>
        <h2 class="vl-section-title vl-section-title-2 pt-16 pb-36">Let’s Connect Empower <br /> And Your Business</h2>
        </div>

        <div class="vl-contact-iner-widget-1 vl-gray-bg-4 br-8 mb-20">
        <div class="vl-contact-iner-widget-1-icon mr-16">
          <span><img src="/img/icons/vl-contact-iner-phone.svg" alt="" /></span>
        </div>
        <div class="vl-contact-iner-widget-1-content">
          <h5 class="vl-contact-iner-widget-1-content-title pb-14 m-0">Gives us a Call</h5>
          <a href="tel:1234567890">123-456-7890</a>
        </div>
        </div>

        <div class="vl-contact-iner-widget-1 vl-gray-bg-4 br-8 mb-20">
        <div class="vl-contact-iner-widget-1-icon mr-16">
          <span><img src="/img/icons/vl-contact-iner-mail.svg" alt="" /></span>
        </div>
        <div class="vl-contact-iner-widget-1-content">
          <h5 class="vl-contact-iner-widget-1-content-title pb-14 m-0">Send me Mail</h5>
          <a href="mailto:OTechItService.com">OTech It Service.com</a>
        </div>
        </div>

        <div class="vl-contact-iner-widget-1 vl-gray-bg-4 br-8 mb-20">
        <div class="vl-contact-iner-widget-1-icon mr-16">
          <span><img src="/img/icons/vl-contact-iner-location.svg" alt="" /></span>
        </div>
        <div class="vl-contact-iner-widget-1-content">
          <h5 class="vl-contact-iner-widget-1-content-title pb-14 m-0">Contact us</h5>
          <a href="#">8708 Technology, USA</a>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>
  <!-- ================= Contact section End ================= -->

  <!-- map -->
  <div class="vl-contact-iner-map pb-70">
    <div class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423284.0442308581!2d-118.74140107455267!3d34.020608442949346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1730525346665!5m2!1sen!2sbd" class="vl-contact-iner-google-map mb-30 br-8" allowfullscreen=""></iframe>
    </div>
  </div>
@endsection