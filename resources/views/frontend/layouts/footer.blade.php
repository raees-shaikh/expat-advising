    <!-- Footer-Section start -->
    <footer>



        <!-- last footer -->
        <div class="bottom_footer">
            <!-- container start -->
            <div class="container">
                <!-- row start -->
                <div class="row">
                    <div class="col-lg-4 col-md-3 d-md-none d-block">
                        <ul class="d-flex icons pb-2">
                            <li>
                                <a href="https://www.instagram.com/expatadvising/" target="_blank"><i class="icofont-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/expat-advising/?viewAsMember=true" target="_blank"><i class="icofont-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-5 pb-sm-0 pb-5">
                        <p>© Copyright {{ date('Y') }}. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 col-md-3 d-md-block d-none ">
                        <ul class="d-flex justify-content-md-end justify-content-center icons">
                            <li>
                                <a href="https://www.instagram.com/expatadvising/" target="_blank" class="social-icons"><i class="icofont-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/expat-advising/?viewAsMember=true" target="_blank" class="social-icons"><i class="icofont-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    {{-- <div class="col-md-4 pb-sm-0 pb-5">
                        <p class="developer_text">Design & Developed By <a href="https://www.acetrot.com/"
                                target="blank" class="acetrot-text">Acetrot.com</a></p>
                    </div> --}}
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>

        <!-- go top button -->
        <div class="go_top">
            <span><img loading="lazy"  src="{{ asset('frontend/images/up-arrow.WEBP') }}" alt="image"></span>
        </div>
    </footer>
    <!-- Footer-Section end -->

    <!-- VIDEO MODAL -->
    <div class="modal fade youtube-video" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button id="close-video" type="button" class="button btn btn-default text-right" data-dismiss="modal">
                    <i class="icofont-close-line-circled"></i>
                </button>
                <div class="modal-body">
                    <div id="video-container" class="video-container">
                        <iframe id="youtubevideo" src="" width="640" height="360" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <div class="purple_backdrop"></div>

    </div>
    <!-- Page-wrapper-End -->
    <div id="mybutton" class="d-sm-none d-block">
        <a class="feedback d-block" href="https://expatadvising.com/sc-bridge/plans/cF6vQmB5ZmLVL3md"
            target="_blank">Get Access</a>
    </div>

    <!-- Jquery-js-Link -->
    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <!-- owl-js-Link -->
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <!-- bootstrap-js-Link -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- aos-js-Link -->
    <script src="{{ asset('frontend/js/aos.js') }}"></script>
    <!-- main-js-Link -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <!-- custom-js-Link -->
    <script src="{{ asset('frontend/js/custom.js') }}"></script>






<script>
    var owl = $('.owl-carousel');
owl.owlCarousel({
    items:1,
  // items change number for slider display on desktop

    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:10000,
    autoplayHoverPause:true
});
</script>

