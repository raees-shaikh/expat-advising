<!-- Page-wrapper-Start -->
<div class="page_wrapper">

    <!-- Preloader -->
    <div id="preloader">
        <div id="loader">
        </div>
    </div>



    <!-- Header Start -->
    <header>
        <!-- container start -->
        <div class="container togglenav-mobile">
            <!-- navigation bar -->
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img loading="lazy"  src="{{ asset('frontend/images/logo.WEBP') }}" alt="image">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <!-- <i class="icofont-navigation-menu ico_menu"></i> -->
                        <div class="toggle-wrap">
                            <span class="toggle-bar"></span>
                        </div>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <ul class="navbar-nav ml-auto">




                        <div class="container">
                            <div class="switches-container">
                              <input type="radio" id="switchMonthly" name="switchPlan" value="Monthly" {{URL::current()==url('/')? 'checked="checked"': ''}} />
                              <input type="radio" id="switchYearly" name="switchPlan" value="Yearly" {{URL::current()==url('/expat-profiling')? 'checked="checked"': ''}} />
                              <label><a  href="{{ url('/') }}">Expat Video Academy</a></label>
                              <label><a  href="{{ url('/expat-profiling') }}">Personalized Expat Profile</a></label>
                              <div class="switch-wrapper">
                                <div class="switch">
                                  <div><a  href="{{ url('/') }}">Expat Video  Academy</a></div>
                                  <div><a  href="{{ url('/expat-profiling') }}">Personalized Expat Profile</a></div>
                                </div>
                              </div>
                            </div>

                          </div>
                    </ul>



                </div>
            </nav>
            <!-- navigation end -->
        </div>
        <!-- container end -->
    </header>
