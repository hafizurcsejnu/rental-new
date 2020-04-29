<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="qF0b2dxIxKDps4XrueRtGhf8HW670uZ9L3hAsjv6">
    <link rel="icon" type="image/png" href="https://www.bookingcore.org/uploads/demo/general/favicon.png" />
<title>{{setting('site.title')}}</title>
    <meta name="description" content="" />
    <meta property="og:url" content="https://www.bookingcore.org" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Home Page" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Home Page">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <link rel="canonical" href="https://www.bookingcore.org" />
    <link href="{{asset('assets/libs/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet">
    <link href="https://www.bookingcore.org/css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/daterange/daterangepicker.css')}}">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel='stylesheet' id='google-font-css-css' href='https://fonts.googleapis.com/css?family=Poppins%3A300%2C400%2C500%2C600' type='text/css' media='all' />
    <script>
        var bookingCore = {
            url: 'https://www.bookingcore.org/en',
            url_root: 'https://www.bookingcore.org',
            booking_decimals: 0,
            thousand_separator: '.',
            decimal_separator: ',',
            currency_position: 'left',
            currency_symbol: '$',
            currency_rate: '1',
            date_format: 'MM/DD/YYYY',
            map_provider: 'gmap',
            map_gmap_key: '',
            routes: {
                login: 'https://www.bookingcore.org/en/login',
                register: 'https://www.bookingcore.org/en/register',
            },
            currentUser: 0,
            rtl: 0
        };
        var i18n = {
            warning: "Warning",
            success: "Success",
        };
        var daterangepickerLocale = {
            "applyLabel": "Apply",
            "cancelLabel": "Cancel",
            "fromLabel": "From",
            "toLabel": "To",
            "customRangeLabel": "Custom",
            "weekLabel": "W",
            "daysOfWeek": [
                "Su",
                "Mo",
                "Tu",
                "We",
                "Th",
                "Fr",
                "Sa"
            ],
            "monthNames": [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October}",
                "November",
                "December"
            ],
        };
    </script>



<link href="https://www.bookingcore.org/module/hotel/css/hotel.css?_ver=1.6.1" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://www.bookingcore.org/libs/ion_rangeslider/css/ion.rangeSlider.min.css" />
<link rel="stylesheet" type="text/css" href="https://www.bookingcore.org/libs/fotorama/fotorama.css" />

<link rel="stylesheet" type="text/css" href="https://www.bookingcore.org/libs/ion_rangeslider/css/ion.rangeSlider.min.css" />


    <link href="https://www.bookingcore.org/en/custom-css" rel="stylesheet">
    <link href="{{asset('assets/libs/carousel-2/owl.carousel.css')}}" rel="stylesheet">
</head>

<body class="frontend-page  ">
    <div class="bravo_wrap">
        <div class="bravo_topbar">
            <div class="container">
                <div class="content">
                    <div class="topbar-left">
                        <div class="socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                        
                    </div>
                    <div class="topbar-right">
                        <ul class="topbar-items">
                            <li class="login-item">
                                <a href="#login" data-toggle="modal" data-target="#login" class="login">Login</a>
                            </li>
                            <li class="signup-item">
                                <a href="#register" data-toggle="modal" data-target="#register" class="signup">Sign Up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bravo_header">
            <div class="container">
                <div class="content">
                    <div class="header-left">
                        <a href="{{url('/')}}" class="bravo-logo">
                            <img src="{{asset('assets/images/logo.png')}}" alt="logo" />
                        </a>
                        <div class="bravo-menu">
                            <ul class="main-menu menu-generated">
                                <li class=" depth-0"><a target="" href="{{url('/')}}">Home</a>
                                    {{-- <ul class="children-menu menu-dropdown">
                                        <li class=" depth-1"><a target="" href="/">Home Page</a></li>
                                        <li class=" depth-1"><a target="" href="/page/hotel">Home Hotel</a></li>
                                        <li class=" depth-1"><a target="" href="/page/tour">Home Tour</a></li>
                                        <li class=" depth-1"><a target="" href="/page/space">Home Space</a></li>
                                        <li class=" depth-1"><a target="" href="/page/car">Home Car</a></li>
                                    </ul> --}}
                                </li>
                                {{-- <li class=" depth-0"><a target="" href="/hotel">Hotel <i class="fa fa-angle-down"></i></a>
                                    <ul class="children-menu menu-dropdown">
                                        <li class=" depth-1"><a target="" href="/hotel">Hotel List</a></li>
                                        <li class=" depth-1"><a target="" href="/hotel?_layout=map">Hotel Map</a></li>
                                        <li class=" depth-1"><a target="" href="/hotel/parian-holiday-villas">Hotel Detail</a></li>
                                    </ul>
                                </li>
                                <li class=" depth-0"><a target="" href="/tour">Tours <i class="fa fa-angle-down"></i></a>
                                    <ul class="children-menu menu-dropdown">
                                        <li class=" depth-1"><a target="" href="/tour">Tour List</a></li>
                                        <li class=" depth-1"><a target="" href="/tour?_layout=map">Tour Map</a></li>
                                        <li class=" depth-1"><a target="" href="/tour/paris-vacation-travel">Tour Detail</a></li>
                                    </ul>
                                </li>
                                <li class=" depth-0"><a target="" href="/space">Space <i class="fa fa-angle-down"></i></a>
                                    <ul class="children-menu menu-dropdown">
                                        <li class=" depth-1"><a target="" href="/space">Space List</a></li>
                                        <li class=" depth-1"><a target="" href="/space?_layout=map">Space Map</a></li>
                                        <li class=" depth-1"><a target="" href="/space/stay-greenwich-village">Space Detail</a></li>
                                    </ul>
                                </li>
                                <li class=" depth-0"><a target="" href="/car">Car <i class="fa fa-angle-down"></i></a>
                                    <ul class="children-menu menu-dropdown">
                                        <li class=" depth-1"><a target="" href="/car">Car List</a></li>
                                        <li class=" depth-1"><a target="" href="/car?_layout=map">Car Map</a></li>
                                        <li class=" depth-1"><a target="" href="/car/vinfast-lux-a20-plus">Car Detail</a></li>
                                    </ul>
                                </li>
                                <li class=" depth-0"><a target="" href="#">Pages <i class="fa fa-angle-down"></i></a>
                                    <ul class="children-menu menu-dropdown">
                                        <li class=" depth-1"><a target="" href="/news">News List</a></li>
                                        <li class=" depth-1"><a target="" href="/news/morning-in-the-northern-sea">News Detail</a></li>
                                        <li class=" depth-1"><a target="" href="/location/paris">Location Detail</a></li>
                                        <li class=" depth-1"><a target="" href="/page/become-a-vendor">Become a vendor</a></li>
                                    </ul>
                                </li>
                                <li class=" depth-0"><a target="" href="/contact">Contact</a></li> --}}
                                <li class=" depth-0"><a target="" href="{{url('/news')}}">News</a></li>
                                <li class=" depth-0"><a target="" href="{{url('/hotels')}}">Hotels</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-right">
                        <button class="bravo-more-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="bravo-menu-mobile" style="display:none;">
                <div class="user-profile">
                    <div class="b-close"><i class="icofont-scroll-left"></i></div>
                    <div class="avatar"></div>
                    <ul>
                        <li>
                            <a href="#login" data-toggle="modal" data-target="#login" class="login">Login</a>
                        </li>
                        <li>
                            <a href="#register" data-toggle="modal" data-target="#register" class="signup">Sign Up</a>
                        </li>
                    </ul>
                   
                   
                </div>
                <div class="g-menu">
                    <ul class="main-menu menu-generated">
                        <li class=" depth-0"><a target="" href="{{url('/')}}">Home </a>
                           
                        </li>
                        {{-- <li class=" depth-0"><a target="" href="/hotel">Hotel <i class="fa fa-angle-down"></i></a>
                            <ul class="children-menu menu-dropdown">
                                <li class=" depth-1"><a target="" href="/hotel">Hotel List</a></li>
                                <li class=" depth-1"><a target="" href="/hotel?_layout=map">Hotel Map</a></li>
                                <li class=" depth-1"><a target="" href="/hotel/parian-holiday-villas">Hotel Detail</a></li>
                            </ul>
                        </li>
                        <li class=" depth-0"><a target="" href="/tour">Tours <i class="fa fa-angle-down"></i></a>
                            <ul class="children-menu menu-dropdown">
                                <li class=" depth-1"><a target="" href="/tour">Tour List</a></li>
                                <li class=" depth-1"><a target="" href="/tour?_layout=map">Tour Map</a></li>
                                <li class=" depth-1"><a target="" href="/tour/paris-vacation-travel">Tour Detail</a></li>
                            </ul>
                        </li>
                        <li class=" depth-0"><a target="" href="/space">Space <i class="fa fa-angle-down"></i></a>
                            <ul class="children-menu menu-dropdown">
                                <li class=" depth-1"><a target="" href="/space">Space List</a></li>
                                <li class=" depth-1"><a target="" href="/space?_layout=map">Space Map</a></li>
                                <li class=" depth-1"><a target="" href="/space/stay-greenwich-village">Space Detail</a></li>
                            </ul>
                        </li>
                        <li class=" depth-0"><a target="" href="/car">Car <i class="fa fa-angle-down"></i></a>
                            <ul class="children-menu menu-dropdown">
                                <li class=" depth-1"><a target="" href="/car">Car List</a></li>
                                <li class=" depth-1"><a target="" href="/car?_layout=map">Car Map</a></li>
                                <li class=" depth-1"><a target="" href="/car/vinfast-lux-a20-plus">Car Detail</a></li>
                            </ul>
                        </li>
                        <li class=" depth-0"><a target="" href="#">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="children-menu menu-dropdown">
                                <li class=" depth-1"><a target="" href="/news">News List</a></li>
                                <li class=" depth-1"><a target="" href="/news/morning-in-the-northern-sea">News Detail</a></li>
                                <li class=" depth-1"><a target="" href="/location/paris">Location Detail</a></li>
                                <li class=" depth-1"><a target="" href="/page/become-a-vendor">Become a vendor</a></li>
                            </ul>
                        </li> --}}
                        <li class=" depth-0"><a target="" href="{{url('/news')}}">News</a></li>
                    </ul>
                </div>
            </div>

            @yield('content')

            <div class="bravo_footer">
                {{-- <div class="mailchimp">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                                <div class="row">
                                    <div class="col-xs-12  col-md-7 col-lg-6">
                                        <div class="media ">
                                            <div class="media-left hidden-xs">
                                                <i class="icofont-island-alt"></i>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Get Updates &amp; More</h4>
                                                <p>Thoughtful thoughts to your inbox</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-5 col-lg-6">
                                        <form action="https://www.bookingcore.org/en/newsletter/subscribe" class="subcribe-form bravo-subscribe-form bravo-form">
                                            <input type="hidden" name="_token" value="qF0b2dxIxKDps4XrueRtGhf8HW670uZ9L3hAsjv6">
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control email-input" placeholder="Your Email">
                                                <button type="submit" class="btn-submit">Subscribe
                                                    <i class="fa fa-spinner fa-pulse fa-fw"></i>
                                                </button>
                                            </div>
                                            <div class="form-mess"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="main-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="nav-footer">
                                    <div class="title">
                                        NEED HELP?
                                    </div>
                                    <div class="context">
                                        <div class="contact">
                                            <div class="c-title">
                                                Call Us
                                            </div>
                                            <div class="sub">
                                                + 00 222 44 5678
                                            </div>
                                        </div>
                                        <div class="contact">
                                            <div class="c-title">
                                                Email for Us
                                            </div>
                                            <div class="sub">
                                                <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="82eae7eeeeedc2fbedf7f0f1ebf6e7ace1edef">[email&#160;protected]</a>
                                            </div>
                                        </div>
                                        <div class="contact">
                                            <div class="c-title">
                                                Follow Us
                                            </div>
                                            <div class="sub">
                                                <a href="#">
                                                    <i class="icofont-facebook"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icofont-twitter"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="icofont-youtube-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="nav-footer">
                                    <div class="title">
                                        COMPANY
                                    </div>
                                    <div class="context">
                                        <ul>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Community Blog</a></li>
                                            <li><a href="#">Rewards</a></li>
                                            <li><a href="#">Work with Us</a></li>
                                            <li><a href="#">Meet the Team</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="nav-footer">
                                    <div class="title">
                                        SUPPORT
                                    </div>
                                    <div class="context">
                                        <ul>
                                            <li><a href="#">Account</a></li>
                                            <li><a href="#">Legal</a></li>
                                            <li><a href="#">Contact</a></li>
                                            <li><a href="#">Affiliate Program</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="nav-footer">
                                    <div class="title">
                                        SETTINGS
                                    </div>
                                    <div class="context">
                                        <ul>
                                            <li><a href="#">Setting 1</a></li>
                                            <li><a href="#">Setting 2</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copy-right">
                    <div class="container context">
                        <div class="row">
                            <div class="col-md-12">
                                Copyright © 2020 by Aspile Inc.
                                <div class="f-visa">
                                    Site Name
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade login" id="login" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content relative">
                        <div class="modal-header">
                            <h4 class="modal-title">Log In</h4>
                            <span class="c-pointer" data-dismiss="modal" aria-label="Close">
<i class="input-icon field-icon fa">
<img src="https://www.bookingcore.org/images/ico_close.svg" alt="close">
</i>
</span>
                        </div>
                        <div class="modal-body relative">
                            <form class="bravo-form-login" method="POST" action="https://www.bookingcore.org/en/login">
                                <input type="hidden" name="_token" value="qF0b2dxIxKDps4XrueRtGhf8HW670uZ9L3hAsjv6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" autocomplete="off" placeholder="Email address">
                                    <i class="input-icon fa fa-envelope-o"></i>
                                    <span class="invalid-feedback error error-email"></span>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" autocomplete="off" placeholder="Password">
                                    <i class="input-icon fa fa-lock"></i>
                                    <span class="invalid-feedback error error-password"></span>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex justify-content-between">
                                        <label for="remember-me" class="mb0">
                                            <input type="checkbox" name="remember" id="remember-me" value="1"> Remember me <span class="checkmark fcheckbox"></span>
                                        </label>
                                        <a href="https://www.bookingcore.org/en/password/reset">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="error message-error invalid-feedback"></div>
                                <div class="form-group">
                                    <button class="btn btn-primary form-submit" type="submit">
                                        Login
                                        <span class="spinner-grow spinner-grow-sm icon-loading" role="status" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="c-grey font-medium f14 text-center"> Do not have an account? <a href="" data-target="#register" data-toggle="modal">Sign Up</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade login" id="register" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content relative">
                        <div class="modal-header">
                            <h4 class="modal-title">Sign Up</h4>
                            <span class="c-pointer" data-dismiss="modal" aria-label="Close">
<i class="input-icon field-icon fa">
<img src="https://www.bookingcore.org/images/ico_close.svg" alt="close">
</i>
</span>
                        </div>
                        <div class="modal-body">
                            <form class="form bravo-form-register" method="post">
                                <input type="hidden" name="_token" value="qF0b2dxIxKDps4XrueRtGhf8HW670uZ9L3hAsjv6">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="first_name" autocomplete="off" placeholder="First Name">
                                            <i class="input-icon field-icon fa"><img src="https://www.bookingcore.org/images/ico_fullname_signup.svg"></i>
                                            <span class="invalid-feedback error error-first_name"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="last_name" autocomplete="off" placeholder="Last Name">
                                            <i class="input-icon field-icon fa"><img src="https://www.bookingcore.org/images/ico_fullname_signup.svg"></i>
                                            <span class="invalid-feedback error error-last_name"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" autocomplete="off" placeholder="Email address">
                                    <i class="input-icon field-icon fa"><img src="https://www.bookingcore.org/images/ico_email_login_form.svg"></i>
                                    <span class="invalid-feedback error error-email"></span>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" autocomplete="off" placeholder="Password">
                                    <i class="input-icon field-icon fa"><img src="https://www.bookingcore.org/images/ico_pass_login_form.svg"></i>
                                    <span class="invalid-feedback error error-password"></span>
                                </div>
                                <div class="form-group">
                                    <label for="term">
                                        <input id="term" type="checkbox" name="term" class="mr5"> I have read and accept the <a href='' target='_blank'>Terms and Privacy Policy</a>
                                        <span class="checkmark fcheckbox"></span>
                                    </label>
                                    <div><span class="invalid-feedback error error-term"></span></div>
                                </div>
                                <div class="error message-error invalid-feedback"></div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary form-submit">
                                        Sign Up
                                        <span class="spinner-grow spinner-grow-sm icon-loading" role="status" aria-hidden="true"></span>
                                    </button>
                                </div>
                                <div class="c-grey f14 text-center">
                                    Already have an account?
                                    <a href="#" data-target="#login" data-toggle="modal">Log In</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <link rel="stylesheet" href="{{asset('assets/libs/flags/css/flag-icon.min.css')}}">
            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
            <script src="{{asset('assets/libs/lazy-load/intersection-observer.js')}}"></script>
            <script async src="{{asset('assets/libs/lazy-load/lazyload.min.js')}}"></script>
            <script>
                // Set the options to make LazyLoad self-initialize
                window.lazyLoadOptions = {
                    elements_selector: ".lazy",
                    // ... more custom settings?
                };

                // Listen to the initialization event and get the instance of LazyLoad
                window.addEventListener('LazyLoad::Initialized', function(event) {
                    window.lazyLoadInstance = event.detail.instance;
                }, false);
            </script>
            <script src="{{asset('assets/libs/lodash.min.js')}}"></script>
            <script src="{{asset('assets/libs/jquery-3.3.1.min.js')}}"></script>
            <script src="{{asset('assets/libs/vue/vue.js')}}"></script>
            <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{asset('assets/libs/bootbox/bootbox.min.js')}}"></script>
            <script src="{{asset('assets/libs/carousel-2/owl.carousel.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('assets/libs/daterange/moment.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('assets/libs/daterange/daterangepicker.min.js')}}"></script>
            <script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>
            <script src="https://www.bookingcore.org/js/functions.js?_ver=1.6.0"></script>
            <script src="https://www.bookingcore.org/js/home.js?_ver=1.6.0"></script>
            {{-- <div class="booking_cookie_agreement p-3 d-flex fixed-bottom">
                <div class="content-cookie">
                    <p>This website requires cookies to provide all of its features. By using our website, you agree to our use of cookies. <a href='#'>More info</a></p>
                </div>
                <button class="btn save-cookie">Got it</button>
            </div> --}}
            {{-- <script>
                var save_cookie_url = 'https://www.bookingcore.org/en/check-cookie';
            </script>
            <script src="https://www.bookingcore.org/js/cookie.js?_ver=1.6.0"></script> --}}
        </div>
</body>

</html>