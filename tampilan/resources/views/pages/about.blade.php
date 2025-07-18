@extends('layouts.landing', ['title' => 'O-Tech || About'])

@section('content')
    <!-- ================= Banner section start ================= -->
    <section class="vl-breadcrumb-bg p-relative z-index-1 fix pt-200 pb--70"
        style="background-image: url(/img/banner/vl-breadcrumb-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 mb-30">
                    <div class="vl-breadcrumb">
                        <h1 class="vl-fs-60 vl-white">About Us</h1>
                        <div class="vl-breadcrumb-list">
                            <span><a href="{{ route('any', 'index') }}">Home</a></span>
                            <span class="dvir"><i class="fa-solid fa-angle-right"></i></span>
                            <span class="active"><a href="#">About us</a></span>
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

    <!-- ================= About section start ================= -->
    <section id="about" class="vl-about-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-30">
                    <div class="vl-about-imgs mr-60">
                        <div class="vl-about-img-1">
                            <img src="/img/about/vl-about-1.1.png" alt="" />
                        </div>
                        <div class="vl-about-img-1 vl-about-img-2">
                            <img src="/img/about/vl-about-1.2.png" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="vl-about-content iner-about">
                        <div class="vl-section-title-wrapper">
                            <h4 class="vl-section-subtitle-7 vl-upper">About us</h4>
                            <h2 class="vl-section-title vl-section-title-2 pt-16 pb-20">Empower Your Business<br /> Every
                                Step of the Way</h2>
                            <p class="vl-section-description-2 pb-32">
                                Whether it optimizing IT infrastructure, enhancing cybersecurity, <br />or driving digital
                                transformation, we are committed to helping.
                            </p>
                        </div>

                        <div class="vl-about-icon-box vl-about-icon-box-2 mb-30 d-flex">
                            <div class="vl-about-icon vl-about-icon-2">
                                <span><i class="fa-regular fa-check"></i></span>
                            </div>
                            <div class="vl-about-icon-content vl-about-icon-content-2">
                                <h4 class="vl-about-icon-title pb-16 m-0">Strategic Planning</h4>
                                <p class="vl-about-icon-desc m-0">
                                    We specialize in delivering tailored IT solutions empower businesses to thrive in the
                                    digital era. Our team experts <br /> brings deep industry knowledge, cutting-edge tools.
                                </p>
                            </div>
                        </div>

                        <div class="vl-about-inner-btn">
                            <a href="#" class="vl-iner-btn">Learn more <span><i
                                        class="fa-light fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 mb-30">
                    <div class="vl-about-inner-box-active">
                        <!-- single box active -->
                        <div class="vl-about-inner-box-content vl-gray-bg-4 p-relative br-8">
                            <h3 class="vl-about-inner-box-title pb-16"><a href="#">Our Mission</a></h3>
                            <p>
                                Our mission is to empower businesses through best <br /> innovative IT solutions that drive
                                growth, efficiency <br /> digital transformation. We committed to delivering <br />
                                exceptional service, fostering long partnerships, <br /> and leveraging the latest
                                technologies to help.
                            </p>
                        </div>

                        <!-- single box active -->
                        <div class="vl-about-inner-box-content vl-gray-bg-4 p-relative br-8">
                            <h3 class="vl-about-inner-box-title pb-16"><a href="#">Our Mission</a></h3>
                            <p>
                                Our mission is to empower businesses through best <br /> innovative IT solutions that drive
                                growth, efficiency <br /> digital transformation. We committed to delivering <br />
                                exceptional service, fostering long partnerships, <br /> and leveraging the latest
                                technologies to help.
                            </p>
                        </div>

                        <!-- single box active -->
                        <div class="vl-about-inner-box-content vl-gray-bg-4 p-relative br-8">
                            <h3 class="vl-about-inner-box-title pb-16"><a href="#">Our Mission</a></h3>
                            <p>
                                Our mission is to empower businesses through best <br /> innovative IT solutions that drive
                                growth, efficiency <br /> digital transformation. We committed to delivering <br />
                                exceptional service, fostering long partnerships, <br /> and leveraging the latest
                                technologies to help.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="vl-about-vido fix p-relative br-8 mb-30">
                        <img class="w-100" src="/img/about/vl-video-img.png" alt="" />

                        <!-- play btn -->
                        <div class="vl-sec-img-vi-4">
                            <a href="https://www.youtube.com/watch?v=vi8GrSp4Y6w" class="popup-video"><span><i
                                        class="fa-solid fa-play"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================= About section End ================= -->

    <!-- ================= Choose section start ================= -->
    <section class="vl-about-choose vl-gray-bg-4 pt-100 pb-70 p-relative">
        <div class="container">
            <div class="vl-section-title-wrapper mb-60">
                <h4 class="vl-section-subtitle-7 vl-upper">Why choose us</h4>
                <h2 class="vl-section-title vl-section-title-2 pt-16">We Don’t Just Deliver Solutions <br /> We Build
                    Partnerships</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-relative z-index-1">
                        <div class="row">
                            <div class="col-lg-5 col-md-6">
                                <div class="vl-about-choose-img mb-30">
                                    <img class="w-100 img-custom-anim-left" src="/img/about/vl-about-choose-1.png"
                                        alt="" />
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
                                        We understand that every business is unique, <br />is why we offer customized IT
                                        solutions that <br /> fit your needs perfectly. Our approach rooted <br /> in
                                        collaboration and innovation, ensuring you <br /> receive the best tools and
                                        strategies.
                                    </p>

                                    <div class="vl-about-inner-btn">
                                        <a href="{{ route('second', ['services', 'service']) }}" class="vl-iner-btn">Learn
                                            more <span><i class="fa-light fa-arrow-right"></i></span></a>
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

    <!-- ================= Success section start ================= -->
    <section class="vl-success p-relative z-index-1 pt-100 pb-70">
        <div class="container">
            <div class="vl-section-title-wrapper text-center mb-60">
                <h4 class="vl-section-subtitle-8 vl-upper">work process</h4>
                <h2 class="vl-section-title vl-section-title-2 pt-16">How We Get Things Done</h2>
            </div>
            <div class="row">
                <!-- single success icbox start -->
                <div class="col-lg-3 col-md-6">
                    <div class="vl-success-box vl-success-box-3 vl-success-box-iner text-center mb-30">
                        <div class="vl-success-box-icon vl-success-box-icon-3">
                            <span><img src="/img/icons/vl-work-3.1.svg" alt="" /></span>
                            <div class="vl-success-box-icon-3-number">
                                <cite>01</cite>
                            </div>
                            <div class="vl-success-box-3-arow d-none d-md-block">
                                <img src="/img/icons/vl-arow-4.1.svg" alt="" />
                                <img class="arow-active" src="/img/icons/vl-work-pro-arow.svg" alt="" />
                            </div>
                        </div>
                        <div class="vl-success-box-desc">
                            <h3 class="vl-success-box-title pt-32 pb-16"><a href="#">Discovery & Planning</a></h3>
                            <p>
                                We begin by understanding your <br /> business needs, challenges, & <br />goals through
                                in-depth.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single success icbox end -->

                <!-- single success icbox start -->
                <div class="col-lg-3 col-md-6">
                    <div class="vl-success-box vl-success-box-3 vl-success-box-iner text-center mb-30">
                        <div class="vl-success-box-icon vl-success-box-icon-3">
                            <span><img src="/img/icons/vl-work-3.2.svg" alt="" /></span>
                            <div class="vl-success-box-icon-3-number">
                                <cite>02</cite>
                            </div>
                            <div class="vl-success-box-3-arow d-none d-md-block">
                                <img src="/img/icons/vl-arow-4.1.svg" alt="" />
                                <img class="arow-active" src="/img/icons/vl-work-pro-arow.svg" alt="" />
                            </div>
                        </div>
                        <div class="vl-success-box-desc">
                            <h3 class="vl-success-box-title pt-32 pb-16"><a href="#">Design & Development</a></h3>
                            <p>
                                With a clear plan in place, our <br /> experts move into the design and <br /> development
                                phase.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single success icbox end -->

                <!-- single success icbox start -->
                <div class="col-lg-3 col-md-6">
                    <div class="vl-success-box vl-success-box-3 vl-success-box-iner text-center mb-30">
                        <div class="vl-success-box-icon vl-success-box-icon-3">
                            <span><img src="/img/icons/vl-work-3.3.svg" alt="" /></span>
                            <div class="vl-success-box-icon-3-number">
                                <cite>03</cite>
                            </div>
                            <div class="vl-success-box-3-arow d-none d-md-block">
                                <img src="/img/icons/vl-arow-4.1.svg" alt="" />
                                <img class="arow-active" src="/img/icons/vl-work-pro-arow.svg" alt="" />
                            </div>
                        </div>
                        <div class="vl-success-box-desc">
                            <h3 class="vl-success-box-title pt-32 pb-16"><a href="#">Continuous Improvement</a></h3>
                            <p>
                                In a fast-changing digital world,<br /> staying ahead is essential. That’s <br />why we
                                continuously monitor.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single success icbox end -->

                <!-- single success icbox start -->
                <div class="col-lg-3 col-md-6">
                    <div class="vl-success-box vl-success-box-3 vl-success-box-iner text-center mb-30">
                        <div class="vl-success-box-icon vl-success-box-icon-3">
                            <span><img src="/img/icons/vl-work-3.4.svg" alt="" /></span>
                            <div class="vl-success-box-icon-3-number">
                                <cite>04</cite>
                            </div>
                        </div>
                        <div class="vl-success-box-desc">
                            <h3 class="vl-success-box-title pt-32 pb-16"><a href="#">Launch & Support</a></h3>
                            <p>
                                Once everything is in place, we <br /> the solution with comprehensive <br />support but our
                                work doesn’t.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single success icbox end -->
            </div>
        </div>
    </section>
    <!-- ================= Success section End ================= -->

    <!-- ================= Brand section start ================= -->
    <section class="vl-brand-area vl-gradient-2 pt-60 pb-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 mb-30">
                    <h4 class="vl-brand-title vl-white">Trusted by <br /> Top Companies</h4>
                </div>

                <div class="col-lg-10">
                    <div class="vl-brand-logo-active">
                        <!-- vl-single brand -->
                        <div class="vl-brand-logo mb-30">
                            <img src="/img/brand/vl-brand-1.1.png" alt="" />
                        </div>
                        <!-- vl-single brand -->
                        <div class="vl-brand-logo mb-30">
                            <img src="/img/brand/vl-brand-1.2.png" alt="" />
                        </div>
                        <!-- vl-single brand -->
                        <div class="vl-brand-logo mb-30">
                            <img src="/img/brand/vl-brand-1.3.png" alt="" />
                        </div>
                        <!-- vl-single brand -->
                        <div class="vl-brand-logo mb-30">
                            <img src="/img/brand/vl-brand-1.4.png" alt="" />
                        </div>
                        <!-- vl-single brand -->
                        <div class="vl-brand-logo mb-30">
                            <img src="/img/brand/vl-brand-1.5.png" alt="" />
                        </div>
                        <!-- vl-single brand -->
                        <div class="vl-brand-logo mb-30">
                            <img src="/img/brand/vl-brand-1.3.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================= Brand section End ================= -->

    <!-- ================= Team section start ================= -->
    <section class="vl-team3 p-relative vl-team-bg pt-100 pb-100">
        <div class="container p-relative">
            <div class="vl-section-title-wrapper mb-60">
                <h4 class="vl-section-subtitle-8 subtitle-9 vl-upper">Dosen</h4>
                <h2 class="vl-section-title vl-section-title-2 pt-16">Dosen JTIK</h2>
            </div>
            <div class="row g-4 justify-content-center mb-5">
                @foreach ($dosens as $dosen)
                    <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="{{ 200 + $loop->index * 100 }}">
                        <div class="card border-0 shadow-sm text-center p-3 h-100" style="border-radius:16px;">
                            <img src="{{ asset('storage/foto_dosen/' . $dosen->foto) }}" alt="{{ $dosen->nama }}"
                                class="rounded-circle mx-auto mb-3 shadow"
                                style="width:110px; height:110px; object-fit:cover;">
                            <h5 class="mb-1">{{ $dosen->nama }}</h5>
                            <span class="text-muted small">{{ $dosen->jabatan }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="vl-section-title-wrapper mb-60 mt-5">
                <h4 class="vl-section-subtitle-8 subtitle-9 vl-upper">Tenaga Kependidikan</h4>
                <h2 class="vl-section-title vl-section-title-2 pt-16">Tendik JTIK</h2>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($tendiks as $tendik)
                    <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="{{ 200 + $loop->index * 100 }}">
                        <div class="card border-0 shadow-sm text-center p-3 h-100" style="border-radius:16px;">
                            <img src="{{ asset('storage/foto_tendik/' . $tendik->foto) }}" alt="{{ $tendik->nama }}"
                                class="rounded-circle mx-auto mb-3 shadow"
                                style="width:110px; height:110px; object-fit:cover;">
                            <h5 class="mb-1">{{ $tendik->nama }}</h5>
                            <span class="text-muted small">{{ $tendik->jabatan }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ================= Team section End ================= -->

    <!-- ================= Testimonial section start ================= -->
    <div class="vl-testimonial-section2 pt-100 pb-100">
        <div class="container">
            <div class="vl-section-title-wrapper text-center mb-60">
                <h4 class="vl-section-subtitle-8 subtitle-9 vl-upper">Testimonial</h4>
                <h2 class="vl-section-title vl-section-title-2 pt-16">What Our Clients Say?</h2>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="vl-test-2-act vl-testinner">
                        <!-- single testimonial -->
                        <div class="vl-test-flex testimonial-inner">
                            <div class="vl-test-thumb">
                                <img src="/img/testimonial/vl-testimonial-2.1.png" alt="" />
                            </div>
                            <div class="vl-test-content">
                                <div class="vl-test-icons">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <p>“Our clients words speak volumes about impact of our services. We take pride in building
                                    strong best partnerships and delivering solutions that exceed expectations from seamless
                                    cloud migrations.”</p>
                                <div class="vl-test-aut">
                                    <div class="vl-test-aut-content">
                                        <h3>Donna Kiehn</h3>
                                        <span>Businessman</span>
                                    </div>
                                    <div class="vl-test-aut-logo">
                                        <img src="/img/brand/vl-testimonial-brand-2.1.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single testimonial -->
                        <div class="vl-test-flex testimonial-inner">
                            <div class="vl-test-thumb">
                                <img src="/img/testimonial/vl-testimonial-2.1.png" alt="" />
                            </div>
                            <div class="vl-test-content">
                                <div class="vl-test-icons">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <p>“Our clients words speak volumes about impact of our services. We take pride in building
                                    strong best partnerships and delivering solutions that exceed expectations from seamless
                                    cloud migrations.”</p>
                                <div class="vl-test-aut">
                                    <div class="vl-test-aut-content">
                                        <h3>Donna Kiehn</h3>
                                        <span>Businessman</span>
                                    </div>
                                    <div class="vl-test-aut-logo">
                                        <img src="/img/brand/vl-testimonial-brand-2.1.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single testimonial -->
                        <div class="vl-test-flex testimonial-inner">
                            <div class="vl-test-thumb">
                                <img src="/img/testimonial/vl-testimonial-2.1.png" alt="" />
                            </div>
                            <div class="vl-test-content">
                                <div class="vl-test-icons">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <p>“Our clients words speak volumes about impact of our services. We take pride in building
                                    strong best partnerships and delivering solutions that exceed expectations from seamless
                                    cloud migrations.”</p>
                                <div class="vl-test-aut">
                                    <div class="vl-test-aut-content">
                                        <h3>Donna Kiehn</h3>
                                        <span>Businessman</span>
                                    </div>
                                    <div class="vl-test-aut-logo">
                                        <img src="/img/brand/vl-testimonial-brand-2.1.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- single testimonial -->
                        <div class="vl-test-flex testimonial-inner">
                            <div class="vl-test-thumb">
                                <img src="/img/testimonial/vl-testimonial-2.1.png" alt="" />
                            </div>
                            <div class="vl-test-content">
                                <div class="vl-test-icons">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa-solid fa-star"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <p>“Our clients words speak volumes about impact of our services. We take pride in building
                                    strong best partnerships and delivering solutions that exceed expectations from seamless
                                    cloud migrations.”</p>
                                <div class="vl-test-aut">
                                    <div class="vl-test-aut-content">
                                        <h3>Donna Kiehn</h3>
                                        <span>Businessman</span>
                                    </div>
                                    <div class="vl-test-aut-logo">
                                        <img src="/img/brand/vl-testimonial-brand-2.1.png" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
