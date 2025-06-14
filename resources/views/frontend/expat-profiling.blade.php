@extends('frontend.layouts.app')
@section('title', 'Personalized Expat Profile - ')
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
<div id="myModal-2" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header border-0 text-center d-block">
                <img loading="lazy"  src="{{ asset('frontend/images/logo.WEBP') }}" alt="image" width="140px" class="mx-auto">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!--         <h4 class="modal-title">Modal Header</h4> -->
            </div>
            <div class="modal-body text-center  pt-4">
                <h3 class="text-prime mb-3">Personalized Expat Profile</h3>
                <p class="m-0 ">Prepare for your expatriation with our comprehensive and data-driven assessment profiling tool. Receive a personalized report highlighting your strengths, potential challenges, and tailored strategies for you as an expat. Our tool offers actionable recommendations and expert advice, equipping you with the knowledge and self-awareness to navigate the complexities of expat life.</p>



<div class="my-3">
<a href="https://expatadvising.com/sc-bridge/orders/SbjHdEASceFJfZxp" target="_blank"
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
                <div class="col-lg-6 col-md-12" data-aos="fade-right" data-aos-duration="1500">
                    <!-- banner text -->
                    <div class="banner_text profiling">
                        <!-- h1 -->
                        {{-- <h1 class="text-capitalize mb-4 banner-title-font" >My Expat Profile</h1> --}}
                         <h1 class="text-capitalize mb-2 banner-title-font text-lg-left text-center" >Personalized Expat Profile</h1>
                         <h3 class="text-lg-left text-center"> Discover your expat profile</h3>

                        <!-- p -->
                        <div class="banner_slider d-lg-none d-block pb-4">

                            <img loading="lazy"  src="{{ asset('frontend/images/banner-2.WEBP') }}" alt="" class="w-100 ">

                        </div>
                        <p>
                        Prepare for your expatriation with our comprehensive and data-driven assessment profiling tool. Receive a personalized report highlighting your strengths, potential challenges, and tailored strategies for you as an expat. Our tool offers actionable recommendations and expert advice, equipping you with the knowledge and self-awareness to navigate the complexities of expat life. Complete our brief assessment today and gain valuable insight to start your journey.
                        </p>
                        <ul class="">
                            <li class="m-0  pt-3">

                                <a href="https://expatadvising.com/sc-bridge/orders/SbjHdEASceFJfZxp" target="_blank"
                                class="btn puprple_btn get-started">Get Started <svg width="17" height="16" viewBox="0 0 17 16"  xmlns="http://www.w3.org/2000/svg" class="chclr">
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

                        <img loading="lazy"  src="{{ asset('frontend/images/banner-2.WEBP') }}" alt="" class="w-100after-lg ">

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
                             <a href="https://expatadvising.com/sc-bridge/orders/SbjHdEASceFJfZxp" target="_blank"
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
                                 <img loading="lazy"  src="{{ asset('frontend/images/who/spouse-2.WEBP') }}" alt="Avatar" class="image" style="width:100%">
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
                                 <img loading="lazy"  src="{{ asset('frontend/images/who/family-2.WEBP') }}" alt="Avatar" class="image" style="width:100%">
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
                                 <img loading="lazy"  src="{{ asset('frontend/images/who/young-2.WEBP') }}" alt="Avatar" class="image" style="width:100%">
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
                                <h3 class="text-center d-sm-none d-block">Anyone Moving Abroad </h3>
                         </div>



                     </div>
                     <div class="text-center mt-4 mb-lg-0 mb-4 d-md-none d-block">
                          <a href="https://expatadvising.com/sc-bridge/orders/SbjHdEASceFJfZxp" target="_blank"
                                     class="btn puprple_btn get-started">Get Access Now <svg width="17" height="16" viewBox="0 0 17 16"  xmlns="http://www.w3.org/2000/svg" class="chclr">
                                    <path d="M0.5 6.99996V8.99996H12.5L7 14.5L8.42 15.92L16.34 7.99996L8.42 0.0799561L7 1.49996L12.5 6.99996H0.5Z" />
                                    </svg> </a>
                     </div>
                 </div>
             </div>
         </section>

    <!-- ModernUI-Section-Start -->
    <section class="row_am modern_ui_section pb-0 pb-lg-5 pt-md-4 pt-0">
        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row">
                <div class="col-lg-6">
                    <!-- UI content -->
                    <div class="ui_text">
                        <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                            <h2 class="text-lg-left text-center">Key Features</h2>

                        </div>
                        <div class="row align-items-baseline">
                            <div class="col-lg-6">
                                <div class="ui_images d-lg-none d-block mt-5 mb-4" data-aos="fade-in"
                                    data-aos-duration="1500">
                                    <div class="">
                                        <img loading="lazy"  class="moving_position_animatin w-100"
                                            src="{{ asset('frontend/images/feature.WEBP') }}" alt="image">
                                    </div>
                                    <!-- UI Image -->
                                </div>

                                <ul class="design_block mt-lg-4 mt-0">
                                    {{-- <li data-aos="fade-up" data-aos-duration="1500" class="align-items-center d-flex">
                                    <img loading="lazy"  src="{{asset('frontend/images/right_icon.WEBP')}}" class="right-icon">
                                        <h6>Key insights for expat success</h6>

                                    </li> --}}
                                    <li data-aos="fade-up" data-aos-duration="1500" class="align-items-center d-flex">
                                    <img loading="lazy"  src="{{asset('frontend/images/right_icon.WEBP')}}" class="right-icon">
                                        <h6>Specific knowledge about you as an expat
                                        </h6>

                                    </li>
                                    <li data-aos="fade-up" data-aos-duration="1500" class="align-items-center d-flex">
                                    <img loading="lazy"  src="{{asset('frontend/images/right_icon.WEBP')}}" class="right-icon">
                                        <h6>Instant report in your mailbox
                                        </h6>

                                    </li>

                                    <li data-aos="fade-up" data-aos-duration="1500" class="align-items-center d-flex">
                                    <img loading="lazy"  src="{{asset('frontend/images/right_icon.WEBP')}}" class="right-icon">
                                        <h6>Actionable recommendations
                                        </h6>

                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 pr-xl-0">
                                <ul class="design_block mt-0 ">
                                    <li data-aos="fade-up" data-aos-duration="1500" class="align-items-center d-flex">
                                    <img loading="lazy"  src="{{asset('frontend/images/right_icon.WEBP')}}" class="right-icon">
                                        <h6>Data-driven and value-based
                                        </h6>

                                    </li>
                                    <li data-aos="fade-up" data-aos-duration="1500" class="align-items-center d-flex">
                                    <img loading="lazy"  src="{{asset('frontend/images/right_icon.WEBP')}}" class="right-icon">
                                        <h6>Meticulously tested copyright products
                                        </h6>

                                    </li>
                                    <li data-aos="fade-up" data-aos-duration="1500" class="align-items-center d-flex">
                                        <img loading="lazy"  src="{{asset('frontend/images/right_icon.WEBP')}}" class="right-icon">
                                        <h6>Takes just 8-10 min
                                        </h6>

                                    </li>

                                    {{-- <li data-aos="fade-up" data-aos-duration="1500" class="align-items-center d-flex">
                                        <img loading="lazy"  src="{{asset('frontend/images/right_icon.WEBP')}}" class="right-icon">
                                        <h6>The results are confidential and sent promptly to your email
                                        </h6>

                                    </li> --}}

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="text-lg-left text-center mt-lg-3 mt-4 mb-lg-0 mb-4">
                       <a href="https://expatadvising.com/sc-bridge/orders/SbjHdEASceFJfZxp" target="_blank"
                                class="btn puprple_btn get-started">Get Access <svg width="17" height="16" viewBox="0 0 17 16"  xmlns="http://www.w3.org/2000/svg" class="chclr">
                                    <path d="M0.5 6.99996V8.99996H12.5L7 14.5L8.42 15.92L16.34 7.99996L8.42 0.0799561L7 1.49996L12.5 6.99996H0.5Z" />
                                    </svg> </a>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-block d-none">
                    <!-- UI Image -->
                    <div class="ui_images" data-aos="fade-in" data-aos-duration="1500">
                        <div class="">
                            <img loading="lazy"  class="moving_position_animatin w-100"
                                src="{{ asset('frontend/images/feature.WEBP') }}" alt="image">
                        </div>
                        <!-- UI Image -->
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
        <div class="container why_inner value px-4 py-4">

            <div class="row">
                <div class="col-lg-4">
                    <img loading="lazy"  src="{{ 'frontend/images/value-2.WEBP' }}" alt="" class="w-100">
                </div>
                <div class="col-lg-8 text-lg-left text-center">
                    <div class="section_title mb-2 text-lg-left text-center">
                        <h2 class="mt-lg-0 mt-4">Value Proposition</h2>
                    </div>
                    <p>Receive a personalized, comprehensive report detailing your strengths and challenges, along with
                        strategies
                        to thrive and succeed in your expat career and life - whether you are moving abroad solo or with
                        family.</p>
                    <div class="text-lg-right text-center  mt-3 pt-3 pb-lg-0 pb-3">
                        <a href="https://expatadvising.com/sc-bridge/orders/SbjHdEASceFJfZxp" target="_blank"
                            class="btn puprple_btn">Get Access Now</a>
                    </div>
                </div>
            </div>
    </section> --}}
    <!-- About-App-Section-Start -->
        <section class="position-relative mt-md-4">
    <img loading="lazy"  src="{{asset('frontend/images/swan-right.WEBP')}}" class="swan-right">
    <section class="row_am about_app_section mt-0 pb-0 why pb-4 grey-bg mx-xl-3 position-relative">
        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row px-md-2">
                <div class="col-lg-6 d-lg-block d-none">

                    <!-- about images -->
                    <div class="about_img" data-aos="fade-in" data-aos-duration="1500">
                        <div class="frame_img">
                            <img loading="lazy"  class="moving_position_animatin" src="{{ asset('frontend/images/expat.WEBP') }}"
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
                            <h2 class="mb-4 text-lg-left text-center">Why?</span></h2>
                            <!-- p -->
                        </div>
                        <div class="about_img d-lg-none d-block mb-4 text-lg-left text-center" data-aos="fade-in" data-aos-duration="1500">
                            <div class="frame_img">
                                <img loading="lazy"  class="moving_position_animatin " src="{{ asset('frontend/images/expat.WEBP') }}"
                                    alt="image">
                            </div>
                        </div>
                        <!-- UL -->
                        <ul class="app_statstic" id="counter" data-aos="fade-in" data-aos-duration="1500">
                            <li>
                                <div class="text">
                                    <p>40% of expatriations fail. With the profile recommendations, you will not!
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    {{-- <p>As an expat, set yourself up for short and long-term success.
                                    </p> --}}
                                    <p>Set yourself up for short and long-term success as an expat</p>
                                </div>
                            </li>
                            <li>
                                <div class="text">
                                    {{-- <p>As a company, secure ROI on expatriation.
                                    </p> --}}
                                    <p>Know who you are as an expat and get strategies to thrive</p>
                                </div>
                            </li>
                        </ul>
                        <div class="text-lg-left text-center ">
                                <a href="https://expatadvising.com/sc-bridge/orders/SbjHdEASceFJfZxp" target="_blank"
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
    </section>
    <!-- About-App-Section-end -->
<section class="pt-5 pb-0 px-xl-3 px-1 position-relative">
    <div  class="container-fluid ">
        <div class="row">
            <img loading="lazy"  src="{{asset('frontend/images/overview.WEBP')}}" alt="" class="w-100">
        </div>
    </div>
</section>
    <!-- Testimonial-Section start -->
    <section class="row_am testimonial_section grey-bg mx-xl-3 position-relative mt-5 pb-5">
        <!-- container start -->
        <div class="container">
            <div class="section_title pt-md-0 pt-2 pb-sm-0 pb-2" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                <!-- h2 -->
                <h2>What Other Expats Say</h2>
                <!-- p -->
            </div>
            <div class="testimonial_block" data-aos="fade-in" data-aos-duration="1500">
                <div id="testimonial_slider" class="owl-carousel owl-theme ">
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
                                “The profile was spot on! it validated many of the things I thought I knew about myself but
                                wasn't quite sure, and it led to greater insights into what that means for me in terms of
                                succeeding in a global environment. The strategies in the report are helpful to take the
                                necessary steps to mitigate the challenges and tap into the opportunities. ”
                            </p>
                        </div>
                            <div class="col-lg-4 order-lg-1 order-2">
                                <div class="testimonial_img">
                                    <img loading="lazy"  src="{{ asset('frontend/images/asha.WEBP') }}" alt="image">
                                </div>
                                <h3>Asha C</h3>
                                <span class="designation">Marketing Manager, Indian Expat in Germany
                                </span>
                            </div>
                       </div>



                        </div>

                    </div>
                    <!-- user 2 -->
                    <div class="item d-lg-flex">
                        <div class="testimonial_slide_box">

                            <div class="row align-items-center">
                                <div class="col-lg-8 order-lg-2 order-1 ">
                                    <div class="rating">
                                        <span><i class="icofont-star"></i></span>
                                        <span><i class="icofont-star"></i></span>
                                        <span><i class="icofont-star"></i></span>
                                        <span><i class="icofont-star"></i></span>
                                        <span><i class="icofont-star"></i></span>
                                    </div>

                                        {{-- “ I did the Expat Profile on my own and then the Family Profile with my wife. The Expat
                                        Profile helped me understand my strengths and weaknesses in the context of global
                                        assignments. It also provided me and my HR with strategies to ensure my success. Succinct
                                        but yet comprehensive in its approach! A very valuable tool for me and my HR.<br>
                                        The Expat Family Profile triggered conversations between my wife and me on how we intend to
                                        approach the relocation. It helped ensure that we were aligned in our thinking. This was
                                        further supplemented by the Expat Advising Conversation Game. The report was very helpful to
                                        think through our strategies as a couple and as a family that was moving to another culture
                                        with 2 young kids. I highly recommend this assessment for any move involving a partner
                                        and/or children. Very helpful!” --}}
                                        <div id="profile-description" class="pb-lg-0 pb-2">
                                            <div class="text show-more-height">
                                               <p class="review mb-xl-0">“ I did the Expat Profile on my own and then the Family Profile with my wife. The Expat
                                                Profile helped me understand my strengths and weaknesses in the context of global
                                                assignments. It also provided me and my HR with strategies to ensure my success. Succinct
                                                but yet comprehensive in its approach! A very valuable tool for me and my HR.<br>
                                                The Expat Family Profile triggered conversations between my wife and me on how we intend to
                                                approach the relocation. It helped ensure that we were aligned in our thinking. This was
                                                further supplemented by the Expat Advising Conversation Game. The report was very helpful to
                                                think through our strategies as a couple and as a family that was moving to another culture
                                                with 2 young kids. I highly recommend this assessment for any move involving a partner
                                                and/or children. Very helpful!”</p>
                                            </div>
                                            <div class="show-more">Read More</div>
                                </div>

                                </div>
                                    <div class="col-lg-4 order-lg-1 order-2">

                            <div class="testimonial_img">
                                <img loading="lazy"  src="{{ asset('frontend/images/man.WEBP') }}" alt="image">
                            </div>
                            <h3>Steve H </h3>
                            <span class="designation">Managing Director, British Expat in Singapore </span>
                        </div>
                               </div>



                    </div>
                    </div>
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
                                “ So much makes sense now! I have been an expat spouse for over 6 years now. Some of it was easy, and some of it was extremely challenging. I wasn't quite sure why! Now I know! So much makes sense! Thank you Expat Advising for shedding light on what was going on, what to expect and how best to deal with the challenges.”
                              </p>
                        </div>
                            <div class="col-lg-4 order-lg-1 order-2">

                                <div class="testimonial_img">
                                    <img loading="lazy"  src="{{asset('frontend/images/maria.WEBP')}}" alt="image" >
                                  </div>
                                  <h3>Maria F </h3>
                                  <span class="designation">French expat spouse in Denmark</span>
                                </div>
                       </div>
                </div>


              </div>
                </div>
                <!-- total review -->
                <!-- avtar faces -->
                <div class="avtar_faces">
                    <img loading="lazy"  src="{{ asset('frontend/images/new-avatar.WEBP') }}" alt="image">
                </div>
            </div>
        </div>
        <!-- container end -->
    </section>
    <!-- Testimonial-Section end -->
    <div id="faq"></div>
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
                                    <i class="icon_faq icofont-plus"></i></i>What is ‘My Expat Profile’?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>‘My Expat Profile’ is a personalized assessment tool designed to provide expats with
                                    insights into their strengths, challenges, and strategies for success in their
                                    expatriate journey.
                                </p>
                                <div class="text-md-left text-center">
                                     <a href="https://expatadvising.com/sc-bridge/orders/SbjHdEASceFJfZxp" target="_blank"
                                class="btn puprple_btn get-started ">Buy Now <svg width="17" height="16" viewBox="0 0 17 16"  xmlns="http://www.w3.org/2000/svg" class="chclr">
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
                                    data-target="#collapseTwo"><i class="icon_faq icofont-plus"></i></i>
                                    What does the Expat Profile Report cover?

                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>The report describes you as an expat. It provides your key characteristics, your strengths and weaknesses, opportunities, suggested roles, and strategies for you to thrive as an expat.
                                </p>
                                <div class="text-md-left text-center">
                                     <a href="https://expatadvising.com/sc-bridge/orders/SbjHdEASceFJfZxp" target="_blank"
                                class="btn puprple_btn get-started ">Buy Now <svg width="17" height="16" viewBox="0 0 17 16"  xmlns="http://www.w3.org/2000/svg" class="chclr">
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
                                    Is my report anonymous?

                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Yes, your report is 100% anonymous and will not be shared or stored with us.
                                </p>
                                <div class="text-md-left text-center">
                                     <a href="https://expatadvising.com/sc-bridge/orders/SbjHdEASceFJfZxp" target="_blank"
                                class="btn puprple_btn get-started ">Buy Now <svg width="17" height="16" viewBox="0 0 17 16"  xmlns="http://www.w3.org/2000/svg" class="chclr">
                                    <path d="M0.5 6.99996V8.99996H12.5L7 14.5L8.42 15.92L16.34 7.99996L8.42 0.0799561L7 1.49996L12.5 6.99996H0.5Z" />
                                    </svg> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button type="button" class="btn btn-link collapsed" data-toggle="collapse"
                                    data-target="#collapseFour"><i class="icon_faq icofont-plus"></i></i>
                                    How long does the assessment take? And when will I get the results?

                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>‘My Expat Profile’ has 30 questions and takes ~8-10 minutes to complete. ‘My Expat Family
                                    Profile’ also has 30 questions and involves discussions with your partner, extending the
                                    time to ~10-18 minutes, depending on how aligned you are. You will receive the results
                                    promptly via email after completing it.
                                </p>
                                <div class="text-md-left text-center">
                                     <a href="https://expatadvising.com/sc-bridge/orders/SbjHdEASceFJfZxp" target="_blank"
                                class="btn puprple_btn get-started ">Buy Now <svg width="17" height="16" viewBox="0 0 17 16"  xmlns="http://www.w3.org/2000/svg" class="chclr">
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

                                    My Expat Family Profile on your site. Do I need both?"


                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>If you are expatriating with a partner, we advise that you complete both assessments.
                                </p>
                                <div class="text-md-left text-center">
                                     <a href="https://expatadvising.com/sc-bridge/orders/SbjHdEASceFJfZxp" target="_blank"
                                class="btn puprple_btn get-started ">Buy Now <svg width="17" height="16" viewBox="0 0 17 16"  xmlns="http://www.w3.org/2000/svg" class="chclr">
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


<script>
       $(".show-more").click(function () {
        // if($(".text").hasClass("show-more-height")) {
        //     $(this).text("(Show Less)");
        // } else {
        //     $(this).text("(Show More)");
        // }

        $(".text").toggleClass("show-more-height");
    });


</script>

<script>
     $(function(){
   $(".show-more").click(function () {
      $(this).text(function(i, text){
          return text === "Read Less" ? "Read More" : "Read Less";
      });
   });
});
</script>

<script type="text/javascript">
    $(window).on('load', function() {
        var delayMs = 2500; // delay in milliseconds

        setTimeout(function() {
            $('#myModal-2').modal('show');
        }, delayMs);
    });
</script>
@endsection
