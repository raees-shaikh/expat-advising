@extends('frontend.layouts.app')
@section('title', 'Expat Video Academy  - ')
@section('gtag')
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HHQWE15CCZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HHQWE15CCZ');
</script>

@endsection
@section('content')

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header border-0 text-center d-block">
                <img loading="lazy"  src="{{ asset('frontend/images/logo.WEBP') }}" alt="image" width="140px" class="mx-auto">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!--         <h4 class="modal-title">Modal Header</h4> -->
            </div>
            <div class="modal-body text-center  pt-4">
                <h3 class="text-prime mb-3">Expat Video Academy</h3>
                <p class="m-0 ">Your one-stop destination for a multitude of videos offering you invaluable insights, strategies, and practical wisdom to excel in
                    your expat experience.</p>
                    <p class="m-0 ">Prepare for your successful expatriations with our library of on-demand videos and downloadable tools in the Expat Video Academy.</p>

                    <div class="my-3">
                        <a href="https://expatadvising.com/sc-bridge/plans/cF6vQmB5ZmLVL3md" target="_blank"
                        class="btn puprple_btn get-started">Get Access <svg width="17" height="16" viewBox="0 0 17 16"  xmlns="http://www.w3.org/2000/svg" class="chclr">
                                    <path d="M0.5 6.99996V8.99996H12.5L7 14.5L8.42 15.92L16.34 7.99996L8.42 0.0799561L7 1.49996L12.5 6.99996H0.5Z" />
                                    </svg> </a>
                        </div>

            </div>
        </div>

    </div>
</div>
    <!-- Banner-Section-Start -->
    <section class="banner_section mt-4">
        <!-- container start -->
        <div class="container">
            <!-- vertical animation line -->
            <div class="anim_line">
                <span><img loading="lazy"  src="{{ asset('frontend/images/anim_line.WEBP') }}" alt="anim_line"></span>
                <span><img loading="lazy"  src="{{ asset('frontend/images/anim_line.WEBP') }}" alt="anim_line"></span>
                <span><img loading="lazy"  src="{{ asset('frontend/images/anim_line.WEBP') }}" alt="anim_line"></span>
                <span><img loading="lazy"  src="{{ asset('frontend/images/anim_line.WEBP') }}" alt="anim_line"></span>
                <span><img loading="lazy"  src="{{ asset('frontend/images/anim_line.WEBP') }}" alt="anim_line"></span>
                <span><img loading="lazy"  src="{{ asset('frontend/images/anim_line.WEBP') }}" alt="anim_line"></span>
                <span><img loading="lazy"  src="{{ asset('frontend/images/anim_line.WEBP') }}" alt="anim_line"></span>
                <span><img loading="lazy"  src="{{ asset('frontend/images/anim_line.WEBP') }}" alt="anim_line"></span>
                <span><img loading="lazy"  src="{{ asset('frontend/images/anim_line.WEBP') }}" alt="anim_line"></span>
            </div>
            <!-- row start -->
            <div class="row pt-lg-5 pt-xl-4 pt-1">
                <div class="col-lg-6 col-md-12 pt-lg-4" data-aos="fade-right" data-aos-duration="1500">
                    <!-- banner text -->
                    <div class="banner_text">
                        <!-- h1 -->
                        {{-- <h1 class="text-capitalize banner-title-font mb-4 mt-0">The Expat Advising Academy </h1> --}}
                        <h1 class="text-capitalize banner-title-font mb-2 text-lg-left text-center">Expat Video Academy </h1>
                         <h3 class="text-lg-left text-center">Prepare for your expat experience</h3>

                        <!-- p -->
                        <div class="banner_slider d-lg-none d-block pb-4">

                            <img loading="lazy"  src="{{ asset('frontend/images/banner-1.WEBP') }}" alt="" class="w-100">
                        </div>
                        <p>
                            Get ready for your new life abroad with our comprehensive on-demand videos and essential tools. The Expat Video Academy is your one-stop destination for a multitude of videos, offering you invaluable insights. From relocation tips to thriving in a new country – we have got you covered!

                        </p>
                        <ul class="  pt-3 text-lg-left text-center">
                            <li class="m-0">
                                <a href="https://expatadvising.com/sc-bridge/plans/cF6vQmB5ZmLVL3md" target="_blank"
                                class="btn puprple_btn get-started">Get Started <svg width="17" height="16" viewBox="0 0 17 16"  xmlns="http://www.w3.org/2000/svg" class="chclr index">
                                    <path d="M0.5 6.99996V8.99996H12.5L7 14.5L8.42 15.92L16.34 7.99996L8.42 0.0799561L7 1.49996L12.5 6.99996H0.5Z" />
                                    </svg> </a>
                            </li>
                        </ul>
                    </div>
                    <!-- app buttons -->

                </div>

                <!-- banner slides start -->
                <div class="col-lg-6 col-md-12 d-lg-block d-none" data-aos="fade-in" data-aos-duration="1500">
                    <div class="banner_slider">

                        <img loading="lazy"  src="{{ asset('frontend/images/banner-1.WEBP') }}" alt="" class="w-100after-lg">
                    </div>
                </div>
                <!-- banner slides end -->

            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </section>
    <!-- Banner-Section-end -->



    <!-- Why we are section Start -->
    <section class="row_am why_we_section pt-0 pb-md-4 pb-0 position-relative" data-aos="fade-in">
   <img loading="lazy"  src="{{asset('frontend/images/swan-left.WEBP')}}" class="swan-left">
        <div class="why_inner pb-xl-5 pb-4 pt-md-4 pt-0">
            <div class="container">
                <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">

                    <div class="row px-md-5">
                      <div class="col-md-6 text-md-left text-center">
                       <h2>Who Is It For?</h2>
                       </div>
                       <div class="col-6 text-right d-md-block d-none">
                        <a href="https://expatadvising.com/sc-bridge/plans/cF6vQmB5ZmLVL3md" target="_blank"
                                class="btn puprple_btn get-started">Get Access Now <svg width="17" height="16" viewBox="0 0 17 16"  xmlns="http://www.w3.org/2000/svg" class="chclr">
                                    <path d="M0.5 6.99996V8.99996H12.5L7 14.5L8.42 15.92L16.34 7.99996L8.42 0.0799561L7 1.49996L12.5 6.99996H0.5Z" />
                                    </svg> </a>
                       </div>
                    </div>

                </div>
                <div class="row justify-content-center px-md-5 who-is-it-for">
                    <div class="col-md-6 col-lg-4 ">
                        {{-- <div class="why_box border-custom-radius" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                            <div class="icon">
                                <img loading="lazy"  src="{{ asset('frontend/images/working.WEBP') }}" alt="image">
                            </div>
                            <div class="text">
                                <h3>Working Expat</h3>

                            </div>
                        </div> --}}
                       <div class="hover-container">
                        <img loading="lazy"  src="{{ asset('frontend/images/who/1.WEBP') }}" alt="Avatar" class="image" style="width:100%">
                        <div class="middle ">
                          <div class="text-card ">Working Expat</div>
                        </div>
                       </div>
                       <h3 class="text-center d-sm-none d-block">Working Expat</h3>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        {{-- <div class="why_box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                            <div class="icon">
                                <img loading="lazy"  src="{{ asset('frontend/images/spouse.WEBP') }}" alt="image">
                            </div>
                            <div class="text">
                                <h3>Expat Spouse</h3>

                            </div>
                        </div> --}}
                        <div class="hover-container">
                            <img loading="lazy"  src="{{ asset('frontend/images/who/spouse-1.WEBP') }}" alt="Avatar" class="image" style="width:100%">
                            <div class="middle ">
                              <div class="text-card ">Expat Spouse</div>
                            </div>
                           </div>
                           <h3 class="text-center d-sm-none d-block">Expat Spouse</h3>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        {{-- <div class="why_box border-custom-radius" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                            <div class="icon">
                                <img loading="lazy"  src="{{ asset('frontend/images/country.WEBP') }}" alt="image">
                            </div>
                            <div class="text">
                                <h3>Repatriates</h3>

                            </div>
                        </div> --}}

                        <div class="hover-container">
                            <img loading="lazy"  src="{{ asset('frontend/images/who/family-1.WEBP') }}" alt="Avatar" class="image" style="width:100%">
                            <div class="middle ">
                              <div class="text-card "> Expat Families</div>
                            </div>
                           </div>
                           <h3 class="text-center d-sm-none d-block">Expat Families</h3>

                    </div>

                    <div class="col-md-6 col-lg-4 mt-lg-2">
                        {{-- <div class="why_box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                            <div class="icon">
                                <img loading="lazy"  src="{{ asset('frontend/images/family.WEBP') }}" alt="image">
                            </div>
                            <div class="text">
                                <h3>Expat Families</h3>

                            </div>
                        </div> --}}
                        <div class="hover-container">
                            <img loading="lazy"  src="{{ asset('frontend/images/who/young-1.WEBP') }}" alt="Avatar" class="image" style="width:100%">
                            <div class="middle ">
                              <div class="text-card ">Young Global Career Movers</div>
                            </div>
                           </div>
                           <h3 class="text-center d-sm-none d-block">Young Global Career Movers</h3>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-lg-2">
                        {{-- <div class="why_box border-custom-radius" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                            <div class="icon">
                                <img loading="lazy"  src="{{ asset('frontend/images/graduate.WEBP') }}" alt="image">
                            </div>
                            <div class="text">
                                <h3>Young Global Career Movers</h3>

                            </div>
                        </div> --}}
                        <div class="hover-container">
                            <img loading="lazy"  src="{{ asset('frontend/images/who/5.WEBP') }}" alt="Avatar" class="image" style="width:100%">
                            <div class="middle ">
                              <div class="text-card ">Anyone Moving Abroad</div>
                            </div>
                           </div>
                           <h3 class="text-center d-sm-none d-block">Anyone Moving Abroad</h3>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-lg-2">
                        {{-- <div class="why_box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                            <div class="icon">
                                <img loading="lazy"  src="{{ asset('frontend/images/abroad.WEBP') }}" alt="image">
                            </div>
                            <div class="text">
                                <h3> Anyone Moving Abroad</h3>

                            </div>
                        </div> --}}
                        <div class="hover-container">
                            <img loading="lazy"  src="{{ asset('frontend/images/who/repa-2.WEBP') }}" alt="Avatar" class="image" style="width:100%">
                            <div class="middle ">
                              <div class="text-card "> Repatriates</div>
                            </div>
                           </div>
                           <h3 class="text-center d-sm-none d-block">Repatriates</h3>
                    </div>


                </div>
                <div class="text-center mt-4 mb-lg-0 mb-4 d-md-none d-block">
                     <a href="https://expatadvising.com/sc-bridge/plans/cF6vQmB5ZmLVL3md" target="_blank"
                                class="btn puprple_btn get-started">Get Access Now <svg width="17" height="16" viewBox="0 0 17 16"  xmlns="http://www.w3.org/2000/svg" class="chclr">
                                    <path d="M0.5 6.99996V8.99996H12.5L7 14.5L8.42 15.92L16.34 7.99996L8.42 0.0799561L7 1.49996L12.5 6.99996H0.5Z" />
                                    </svg> </a>
                </div>
            </div>
        </div>
    </section>




    <!-- ModernUI-Section-Start -->
    <section class="row_am modern_ui_section pb-0 pb-lg-5 pt-0 pt-md-4">
        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row">
                <div class="col-lg-6">
                    <!-- UI content -->
                    <div class="ui_text">
                        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                            <h2 class="text-lg-left text-center mb-0">Key Features</h2>

                        </div>
                        <div class="row align-items-baseline">
                            <div class="col-lg-6">
                                <div class="ui_images d-lg-none d-block mt-5 mb-4" data-aos="fade-in"
                                    data-aos-duration="1500">
                                    <div class="">
                                        <img loading="lazy"  class="moving_position_animatin w-100"
                                            src="{{ asset('frontend/images/feature-2.WEBP') }}" alt="image">
                                    </div>
                                    <!-- UI Image -->
                                </div>
                                <ul class="design_block mt-lg-0 mt-0">
                                    {{-- <li data-aos="fade-up" data-aos-duration="1500" class="align-items-center d-flex">
                                    <img loading="lazy"  src="{{asset('frontend/images/right_icon.WEBP')}}" class="right-icon">
                                        <h6 >Watch the videos whenever you want – wherever you are</h6>

                                    </li> --}}
                                    <li data-aos="fade-up" data-aos-duration="1500" class="align-items-center d-flex">
                                    <img loading="lazy"  src="{{asset('frontend/images/right_icon.WEBP')}}" class="right-icon">
                                        <h6> Regularly new videos </h6>

                                    </li>
                                     <li data-aos="fade-up" data-aos-duration="1500" class="align-items-center d-flex">
                                    <img loading="lazy"  src="{{asset('frontend/images/right_icon.WEBP')}}" class="right-icon">
                                        <h6>On-demand & globally available</h6>

                                    </li>

                                     <li data-aos="fade-up" data-aos-duration="1500" class="align-items-center d-flex">
                                    <img loading="lazy"  src="{{asset('frontend/images/right_icon.WEBP')}}" class="right-icon">
                                        <h6>2-4 minutes long with subtitles</h6>

                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 pr-xl-0">
                                <ul class="design_block mt-0 mt-lg-5">
                                     <li data-aos="fade-up" data-aos-duration="1500" class="align-items-center d-flex">
                                    <img loading="lazy"  src="{{asset('frontend/images/right_icon.WEBP')}}" class="right-icon">
                                        <h6>Cover practical, strategic & emotional aspects</h6>

                                    </li>
                                     <li data-aos="fade-up" data-aos-duration="1500" class="align-items-center d-flex">
                                    <img loading="lazy"  src="{{asset('frontend/images/right_icon.WEBP')}}" class="right-icon">
                                        <h6>Watch as many times as you want</h6>

                                    </li>
                                     <li data-aos="fade-up" data-aos-duration="1500" class="align-items-center d-flex">
                                    <img loading="lazy"  src="{{asset('frontend/images/right_icon.WEBP')}}" class="right-icon">
                                        <h6>Downloadable checklists</h6>

                                    </li>

                                     {{-- <li data-aos="fade-up" data-aos-duration="1500" class="align-items-center d-flex">
                                    <img loading="lazy"  src="{{asset('frontend/images/right_icon.WEBP')}}" class="right-icon">
                                        <h6>Based on research and experience
                                        </h6>

                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=" text-lg-left  text-center mt-lg-3 mt-4 mb-lg-0 mb-4">
                        <a href="https://expatadvising.com/sc-bridge/plans/cF6vQmB5ZmLVL3md" target="_blank"
                                class="btn puprple_btn get-started">Get Access <svg width="17" height="16" viewBox="0 0 17 16"  xmlns="http://www.w3.org/2000/svg" class="chclr">
                                    <path d="M0.5 6.99996V8.99996H12.5L7 14.5L8.42 15.92L16.34 7.99996L8.42 0.0799561L7 1.49996L12.5 6.99996H0.5Z" />
                                    </svg> </a>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-block d-none pl-xl-0">
                    <!-- UI Image -->
                    <div class="ui_images" data-aos="fade-in" data-aos-duration="1500">
                        <div class="">
                            <img loading="lazy"  class="moving_position_animatin w-100"
                                src="{{ asset('frontend/images/feature-2.WEBP') }}" alt="image">
                        </div>
                        <!-- UI Image -->
                        {{-- <div class="right_img">
                  <img loading="lazy"  class="moving_position_animatin" src="{{asset('frontend/images/secure_data.WEBP')}}" alt="image" >
                  <img loading="lazy"  class="moving_position_animatin" src="{{asset('frontend/images/modern02.WEBP')}}" alt="image" >
                  <img loading="lazy"  class="moving_position_animatin" src="{{asset('frontend/images/modern03.WEBP')}}" alt="image" >
                </div> --}}
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </section>
    <!-- ModernUI-Section-end -->

    {{-- <section class="row_am modern_ui_section why_we_section pt-3">
        <!-- container start -->
        <div class="container why_inner value px-4 py-4 ">

            <div class="row">
                <div class="col-lg-4">
                    <img loading="lazy"  src="{{ 'frontend/images/value.WEBP' }}" alt="" class="w-100">
                </div>
                <div class="col-lg-8 text-lg-left text-center">
                    <div class="section_title mb-2 text-lg-left text-center">
                        <h2 class="mt-lg-0 mt-4">Value Proposition</h2>
                    </div>
                    <p class="mb-0">Rooted in over 35 years of expat research and experience.</p>
                    <p class="mb-0">Understand expat life, thrive as an expat, and leverage your expat life.</p>
                    <p>Professional, practical, and emotional support – for solo expats and expat families.</p>
                    <div class="text-lg-right text-center  mt-3 pt-3 pb-lg-0 pb-3">
                        <a href="https://expatadvising.com/sc-bridge/plans/cF6vQmB5ZmLVL3md" target="_blank"
                            class="btn puprple_btn">Get Access Now</a>
                    </div>
                </div>

            </div>
        </div>

    </section> --}}

    <!-- About-App-Section-Start -->
    <section class="position-relative mt-md-4 mb-md-4">
    <img loading="lazy"  src="{{asset('frontend/images/swan-right.WEBP')}}" class="swan-right">
    <section class="row_am about_app_section why mt-0 pb-4 grey-bg mx-xl-3 position-relative">

        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row px-md-1 ">
                <div class="col-lg-6 d-lg-block d-none  ">
                    <!-- about images -->
                    <div class="about_img" data-aos="fade-in" data-aos-duration="1500">
                        <div class="frame_img">
                            <img loading="lazy"  class="moving_position_animatin" src="{{ asset('frontend/images/expat-2.WEBP') }}"
                                alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- about text -->
                    <div class="about_text">
                        <div class="section_title " data-aos="fade-up" data-aos-duration="1500"
                            data-aos-delay="100">
                            <!-- h2 -->
                            <h2 class="mb-4 text-center text-lg-left">Why?</span></h2>
                            <!-- p -->
                        </div>

                        <div class="about_img d-lg-none d-block mb-4 text-lg-left text-center" data-aos="fade-in" data-aos-duration="1500">
                            <div class="frame_img">
                                <img loading="lazy"  class="moving_position_animatin" src="{{ asset('frontend/images/expat-2.WEBP') }}"
                                    alt="image">
                            </div>
                        </div>
                        <!-- UL -->
                        <ul class="app_statstic" id="counter" data-aos="fade-in" data-aos-duration="1500">
                            <li>

                                <div class="text">

                                   <p>Only 60% of expatriations are well prepared and they succeed. Ensure you are one of them with the videos in the Expat Video Academy</p>
                                </div>
                            </li>
                            <li>

                                <div class="text">

                                    <p>Navigate challenges, seize opportunities as an expat</p>
                                </div>
                            </li>
                            {{-- <li>

                                <div class="text">

                                    <p>Negotiate your expat contract like a pro.</p>
                                </div>
                            </li> --}}
                            <li>

                                <div class="text">

                                    <p>Avoid expat pitfalls, blues, and burnout</p>
                                </div>
                            </li>

                            {{-- <li>

                                <div class="text">

                                    <p>You get 35+ years of experience in expat life.</p>
                                </div>
                            </li> --}}
                        </ul>
                        <div class="text-lg-left text-center ">
 <a href="https://expatadvising.com/sc-bridge/plans/cF6vQmB5ZmLVL3md" target="_blank"
                                class="btn puprple_btn get-started ">Buy Now <svg width="17" height="16" viewBox="0 0 17 16"  xmlns="http://www.w3.org/2000/svg" class="chclr">
                                    <path d="M0.5 6.99996V8.99996H12.5L7 14.5L8.42 15.92L16.34 7.99996L8.42 0.0799561L7 1.49996L12.5 6.99996H0.5Z" />
                                    </svg> </a>
                        </div>
                        <!-- UL end -->
                        {{-- <a href="#" class="btn puprple_btn" data-aos="fade-in" data-aos-duration="1500">Start Free Trial</a> --}}
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </section>
    <!-- About-App-Section-end -->
    </section>

<section class="px-xl-2">
    <div class="container ">
        <div class="row text-center section_title p-3">
            <h2 class="mb-4 text-center text-prime mx-auto pt-4">Glimpse</h2>
              <div class="video-div "><video  class="video-frame" width="420" height="315" src="{{asset('frontend/videos/2.9 Adaptation and integration - expat life cycle.mp4')}}" frameborder="0" allowfullscreen controls playsinline poster="{{ asset('frontend/images/video-img.WEBP') }}"></video></div>

        </div>
    </div>
</section>


    <!-- Testimonial-Section start -->
    <section class="">
    <section class="row_am testimonial_section grey-bg mx-xl-3 position-relative mt-5">
        <!-- container start -->
        <div class="container p-sm-0 p-2">
            <div class="section_title pt-md-0 pt-2 pb-sm-0 pb-2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                <!-- h2 -->
                <h2>What Other Expats Say</h2>
                <!-- p -->

            </div>
            <div class="testimonial_block" data-aos="fade-in" data-aos-duration="1500">
                <div id="testimonial_slider" class="owl-carousel owl-theme">
                    <!-- user 1 -->
                    <div class="item d-lg-flex">
                        <div class="testimonial_slide_box">
                           <div class="row align-items-center">
                            <div class="col-lg-8 order-lg-2 order-1">
                                <div class="rating">
                                    <span><i class="icofont-star"></i></span>
                                    <span><i class="icofont-star"></i></span>
                                    <span><i class="icofont-star"></i></span>
                                    <span><i class="icofont-star"></i></span>
                                    <span><i class="icofont-star"></i></span>
                                </div>
                                <p class="review">
                                    “I consider myself a veteran expat. I have lived abroad for over 10 years. And yet, with the
                                    different phases of life, I found myself dealing with new challenges. It all began to make
                                    sense when I watched the videos on the Expat Video Academy. Suddenly, it all clicked! I
                                    was largely, as they say, winging it! But not anymore. I am now expatriating again, with my
                                    eyes wide open, and with additional knowledge and skills. ”
                                </p>
                            </div>
                                <div class="col-lg-4 order-lg-1 order-2">
                                    <div class="testimonial_img">
                                        <img loading="lazy"  src="{{ asset('frontend/images/danish.WEBP') }}" alt="image">
                                    </div>
                                    <h3>Victor L, Danish </h3>
                                    <span class="designation">Expat in Singapore</span>
                                </div>


                           </div>

                        </div>
                    </div>


                    <!-- user 2 -->
                    <div class="item d-lg-flex">
                <div class="testimonial_slide_box">


                    <div class="row align-items-center pt-xl-4">
                        <div class="col-lg-8 order-lg-2 order-1">
                            <div class="rating">
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                                <span><i class="icofont-star"></i></span>
                            </div>
                            <p class="review">
                                “ I managed to get a major bump with my expat package. This is all thanks to the Academy and 1:1 sessions with Expat Academy. Next step, financial planning! I am learning so much from the videos as well as the Expat Advising experts.”
                              </p>
                        </div>
                            <div class="col-lg-4 order-lg-1 order-2">
                                <div class="testimonial_img">
                                    <img loading="lazy"  src="{{asset('frontend/images/sara.WEBP')}}" alt="image" >
                                  </div>
                                  <h3>Sarah S, Swiss </h3>
                                  <span class="designation">Expat in the UAE </span>
                            </div>


                       </div>

                </div></div></div>

                <!-- total review -->


                <!-- avtar faces -->
                <div class="avtar_faces">
                    <img loading="lazy"  src="{{ asset('frontend/images/new-avatar.WEBP') }}" alt="image">
                </div>
            </div>
        </div>
        <!-- container end -->
    </section>
    </section>
    <!-- Testimonial-Section end -->


    <div id="faqs"></div>

    <!-- FAQ-Section start -->
    <section class="row_am faq_section pt-0 mt-5">
        <!-- container start -->
        <div class="container">
            <div class="section_title">
                <!-- h2 -->
                <h2>FAQ - Frequently Asked Questions</h2>
                <!-- p -->
            </div>
            <!-- faq data -->
            <div class="faq_panel">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button type="button" class="btn btn-link active" data-toggle="collapse"
                                    data-target="#collapseOne">
                                    <i class="icon_faq icofont-plus"></i></i>What is the Expat Video Academy?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>The Expat Video Academy is an online 24/7 available portfolio of videos providing you with comprehensive knowledge, guidance, and solutions on every aspect of expat life.</p>
                                <div class="text-md-left text-center">
                                    <a href="https://expatadvising.com/sc-bridge/plans/cF6vQmB5ZmLVL3md" target="_blank"
                                class="btn puprple_btn get-started">Buy Now <svg width="17" height="16" viewBox="0 0 17 16"  xmlns="http://www.w3.org/2000/svg" class="chclr">
                                    <path d="M0.5 6.99996V8.99996H12.5L7 14.5L8.42 15.92L16.34 7.99996L8.42 0.0799561L7 1.49996L12.5 6.99996H0.5Z" />
                                    </svg> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseTwo"><i class="icon_faq icofont-plus"></i></i>Who can benefit
                                    from the  Expat Video Academy?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>The Academy is designed for both expats and repats, whether you're moving for work,
                                    study, or personal reasons. It caters to individuals at all stages of their expat
                                    journey i.e., before, during, and after expatriation as well as before and after
                                    repatriation. It is also beneficial for HR professionals, relocation specialists, career
                                    coaches, counselors, consultants, and anyone involved in supporting expats during their
                                    international assignments. </p>
                                <div class="text-md-left text-center">
                                    <a href="https://expatadvising.com/sc-bridge/plans/cF6vQmB5ZmLVL3md" target="_blank"
                                class="btn puprple_btn get-started">Buy Now <svg width="17" height="16" viewBox="0 0 17 16"  xmlns="http://www.w3.org/2000/svg" class="chclr">
                                    <path d="M0.5 6.99996V8.99996H12.5L7 14.5L8.42 15.92L16.34 7.99996L8.42 0.0799561L7 1.49996L12.5 6.99996H0.5Z" />
                                    </svg> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseThree"><i class="icon_faq icofont-plus"></i></i>
                                    What topics are covered in the  Expat Video Academy's curriculum?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>The Expat Video Academy covers a wide range of topics with practical insights, best
                                    practices, and tools to address the unique challenges faced by expats and their
                                    families. Some of the many topics that apply to most expats include the different stages
                                    of the expat life cycle and how to prepare for each stage, culture shock and reverse
                                    culture shock, expat blues, how to negotiate a competitive expat contract, imposter
                                    syndrome, etc. Some of the many nuanced topics include dating as an expat (if you are
                                    single), expat spouse and identity (if moving with a partner), moving with
                                    babies/toddlers/tweens/teens, setting up a business as an expat, etc.</p>
                                <div class="text-md-left text-center">
                                    <a href="https://expatadvising.com/sc-bridge/plans/cF6vQmB5ZmLVL3md" target="_blank"
                                class="btn puprple_btn get-started">Buy Now <svg width="17" height="16" viewBox="0 0 17 16"  xmlns="http://www.w3.org/2000/svg" class="chclr">
                                    <path d="M0.5 6.99996V8.99996H12.5L7 14.5L8.42 15.92L16.34 7.99996L8.42 0.0799561L7 1.49996L12.5 6.99996H0.5Z" />
                                    </svg> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- data-aos="fade-up" data-aos-duration="1500" --}}
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFour"><i class="icon_faq icofont-plus"></i></i>
                                    Is the Expat Video Academy self-paced or instructor-led?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>It is completely self-paced, allowing you to progress through the material at your
                                    convenience and preferred pace. Anytime, anywhere. However, there may be opportunities
                                    for expert-led sessions or webinars to foster interaction and address specific topics.
                                    In addition, you can reach out to us for 1:1 personalized support anytime.</p>
                                <div class="text-md-left text-center">
                                    <a href="https://expatadvising.com/sc-bridge/plans/cF6vQmB5ZmLVL3md" target="_blank"
                                class="btn puprple_btn get-started">Buy Now <svg width="17" height="16" viewBox="0 0 17 16"  xmlns="http://www.w3.org/2000/svg" class="chclr">
                                    <path d="M0.5 6.99996V8.99996H12.5L7 14.5L8.42 15.92L16.34 7.99996L8.42 0.0799561L7 1.49996L12.5 6.99996H0.5Z" />
                                    </svg> </a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFive"><i class="icon_faq icofont-plus"></i></i>

                                    How can I enroll in the Expat Video Academy and what are the associated costs?

                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>You can enroll on our website right now. Subscribe for 6-months at SGD 300 / EUR 225.
                                    Subsequent 6-months renewal is subsidized at SGD 200 / EUR 125. For shorter subscription
                                    periods, please reach out to us.</p>
                                <div class="text-md-left text-center">
                                    <a href="https://expatadvising.com/sc-bridge/plans/cF6vQmB5ZmLVL3md" target="_blank"
                                class="btn puprple_btn get-started">Buy Now <svg width="17" height="16" viewBox="0 0 17 16"  xmlns="http://www.w3.org/2000/svg" class="chclr">
                                    <path d="M0.5 6.99996V8.99996H12.5L7 14.5L8.42 15.92L16.34 7.99996L8.42 0.0799561L7 1.49996L12.5 6.99996H0.5Z" />
                                    </svg> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container end -->
    </section>
    <!-- FAQ-Section end -->



@endsection


@section('js')
    <script>
        window.onscroll = function() {
            myfunc();
        }

        var location_v = document.getElementById("NUMBER");
        var pixtop = 0;
        if (location_v) {
            pixtop = location_v.offsetTop;
        }

        function myfunc() {


            if (window.pageYOffset >= pixtop) {

                //var a=document.getElementById('NUMBER');
                location_v.classList.add('stick');

            } else {
                a.classList.remove('stick');
            }

        }
    </script>


    <script>
        jQuery(function($) {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayHoverPause: true,
                items: 4,
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 1
                    },
                    768: {
                        items: 1
                    }
                }
            })
        });
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel();
        });
    </script>
      <script type="text/javascript">
        $(window).on('load', function() {
            var delayMs = 2500; // delay in milliseconds

            setTimeout(function() {
                $('#myModal').modal('show');
            }, delayMs);
        });
    </script>
@endsection
