<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}"/>
    <meta name="keywords" content="HTML5 Template , Responsive , html5 , css3"/>
    <meta name="description" content="{{env('APP_TITLE')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap-3.3.7 fremwork css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/glyphicons.css')}}"/>
    <!-- Core Style css -->
    <link rel="stylesheet" href="{{asset('css/colorbox.css')}}"/>
    <!-- Slider carousel css  -->
    <link rel="stylesheet" href="{{asset('vendor/owlcarousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/owlcarousel/dist/assets/owl.theme.default.min.css')}}">
    <!-- Slider revolution css  -->
    <link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/settings.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/rev-settings.css')}}"/>
    <!-- Fontawesome 5.10.1 -->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/fontawesome/css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <!-- Main style css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>

    <!-- select2 -->
    <link href="{{asset('vendor/select2/dist/css/select2.css')}}" rel="stylesheet"/>
    <!-- Loading.io -->
    <link href="{{asset('css/loading.css')}}" rel="stylesheet">
    <!-- Sweetalert2 -->
    <link rel="stylesheet" href="{{asset('vendor/sweetalert/sweetalert2.css')}}">
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <!-- Media queries -->
    <link rel="stylesheet" href="{{asset('css/media-query.css')}}">

    <style>
        .required {
            color: #ff3300;
        }

        .form-control:focus, .select2-search--dropdown .select2-search__field:focus {
            border-color: #ff3300 !important;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 51, 0, 0.6) !important;
        }

        .has-feedback .form-control-feedback {
            position: absolute;
            display: block;
            width: 34px;
            height: 34px;
            line-height: 34px;
            text-align: center;
        }

        [type="radio"]:checked,
        [type="radio"]:not(:checked) {
            position: absolute;
            left: -9999px;
        }

        [type="radio"]:checked + label,
        [type="radio"]:not(:checked) + label {
            position: relative;
            padding-left: 28px;
            cursor: pointer;
            line-height: 20px;
            display: inline-block;
            color: #666;
        }

        [type="radio"]:checked + label:before,
        [type="radio"]:not(:checked) + label:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 20px;
            height: 20px;
            border: 1px solid #777;
            border-radius: 100%;
            background: transparent;
        }

        [type="radio"]:checked + label:before {
            border: 1px solid #ff3300;
        }

        [type="radio"]:checked + label:after,
        [type="radio"]:not(:checked) + label:after {
            content: '';
            width: 12px;
            height: 12px;
            background: #ff3300;
            position: absolute;
            top: 4px;
            left: 4px;
            border-radius: 100%;
            -webkit-transition: all 0.2s ease;
            transition: all 0.2s ease;
        }

        [type="radio"]:not(:checked) + label:after {
            opacity: 0;
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        [type="radio"]:checked + label:after {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        .btn-primary {
            background-color: #ff3300;
            border-color: #cd2700;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary.focus,
        .btn-primary:active,
        .btn-primary.active,
        .open > .dropdown-toggle.btn-primary {
            background-color: #cd2300;
            border-color: #9b1d00;
        }

        .btn-primary.disabled,
        .btn-primary[disabled],
        fieldset[disabled] .btn-primary,
        .btn-primary.disabled:hover,
        .btn-primary[disabled]:hover,
        fieldset[disabled] .btn-primary:hover,
        .btn-primary.disabled:focus,
        .btn-primary[disabled]:focus,
        fieldset[disabled] .btn-primary:focus,
        .btn-primary.disabled.focus,
        .btn-primary[disabled].focus,
        fieldset[disabled] .btn-primary.focus,
        .btn-primary.disabled:active,
        .btn-primary[disabled]:active,
        fieldset[disabled] .btn-primary:active,
        .btn-primary.disabled.active,
        .btn-primary[disabled].active,
        fieldset[disabled] .btn-primary.active {
            background-color: #ff3300;
            border-color: #cd2900;
        }

        .btn-primary .badge {
            color: #ff3300;
            background-color: #fff;
        }
    </style>
    @stack('styles')
</head>
<body class="use-nicescroll">
<div class="images-preloader">
    <div class="preloader"></div>
</div>

<div class="wrapper">
    <div class="main-content scroll-none home-page">
        <header class="site-header header14">
            <div class="sub-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="contacts">
                                <p><a href="tel:+62276321290"><i class="fa fa-phone"></i> (0276) 321290</a></p>
                                <p><a href="mailto:{{env('MAIL_USERNAME')}}"><i
                                            class="fa fa-envelope"></i> {{env('MAIL_USERNAME')}}</a></p>
                                <p><a href="https://www.facebook.com/pages/PT-Nila-Monda/717665778250338"><i
                                            class="fab fa-facebook-f"></i> PT. NILA MONDA</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-bar" id="main-bar">
                <div class="container">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img src="{{asset('images/logo/logotype.png')}}" alt="">
                        </a>
                    </div>
                    <button class="btn-toggle"><i class="fa fa-bars"></i></button>
                    <nav class="nav">
                        @include('layouts.partials._headerMenu')
                    </nav>
                </div>
            </div>
        </header>

        @yield('content')
    </div>

    <footer class="footer-color7">
        <div class="content-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-widget widget">
                            <h4>Send Us <strong class="strong-color">Message</strong></h4>
                            <form method="post" class="footer-form" action="{{route('contact.submit')}}">
                                {{csrf_field()}}
                                <input id="name" name="name" type="text" placeholder="Name" required>
                                <input id="email" name="email" type="email" placeholder="Email" required>
                                <input id="subject" name="subject" type="text" placeholder="Subject" required>
                                <textarea id="comment" name="message" placeholder="Message" required></textarea>
                                <button type="submit" class="btn btn-construct">Send Us</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-widget widget">
                            <div class="footer-logo">
                                <a href="{{route('home')}}">
                                    <img width="100px" src="{{asset('images/logo/icon.png')}}" alt=""></a>
                            </div>
                            <p><b>PT. NILA MONDA</b> berkedudukan di Jalan Perintis Kemerdekaan RT.05 / RW.03 Bangunharjo, Boyolali - Jawa Tengah - Indonesia, dengan akte pendirian Nomor 08 Tanggal 8 Juni 2009 dengan Notaris ADANG TRI SUNOKO, SH. Dan dengan perubahan...<a href="{{route('brief-history')}}"><em>read more</em></a></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-widget widget">
                            <h4>Keep in Touch</h4>
                            <ul class="contact">
                                <li>
                                    <i class="fa fa-building"></i>
                                    Jl. Perintis Kemerdekaan No.03 Pulisen, Boyolali, Jawa Tengah, Indonesia
                                </li>
                                <li>
                                    <i class="fa fa-map-marked-alt"></i>
                                    Keradenan Maguwoharjo RT.10/52 Depok Sleman, Yogjakarta, Indonesia
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:+62276321290">(0276) 321290</a>
                                </li>
                                <li>
                                    <i class="fab fa-whatsapp"></i>
                                    <a href="https://api.whatsapp.com/send?phone=628122805040&text=&source=&data=">+62
                                        812-2805-040</a>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:{{env('MAIL_USERNAME')}}">{{env('MAIL_USERNAME')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>© {{now()->format('Y').' '.env('APP_TITLE')}}. All rights reserved | Designed & Developed by
                            <a href="http://rabbit-media.net" target="_blank">Rabbit Media</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<a href="#" onclick="scrollToTop()" class="to-top" title="Go to top">Top</a>
<div class="myProgress">
    <div class="bar"></div>
</div>

<!-- Jquery -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('js/classie.js')}}"></script>
<!-- Core Style -->
<script type="text/javascript" src="{{asset('js/jquery.colorbox.js')}}"></script>
<!-- Carousel Slider  -->
<script src="{{asset('vendor/owlcarousel/dist/owl.carousel.min.js')}}"></script>
<!-- Jquery Waypoints -->
<script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>
<!-- Jquery Counter -->
<script type="text/javascript" src="{{asset('js/visible.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.easing.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.isotope.min.js')}}"></script>
<!-- Jquery progress bar js-->
<script type="text/javascript" src="{{asset('js/pro-bars.js')}}"></script>
<!-- SLIDER REVOLUTION SCRIPTS  -->
<script type="text/javascript" src="{{asset('vendor/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- Template core js -->
<script type="text/javascript" src="{{asset('js/custom-index.js')}}"></script>
<script type="text/javascript" src="{{asset('js/wmbox.js')}}"></script>
<script type="text/javascript" src="{{asset('js/header-fixed.js')}}"></script>

<!-- select2 -->
<script src="{{asset('vendor/select2/dist/js/select2.full.min.js')}}"></script>
<!-- check-mobile -->
<script src="{{asset('vendor/checkMobileDevice.js')}}"></script>
<!-- Nicescroll -->
<script src="{{asset('vendor/nicescroll/jquery.nicescroll.js')}}"></script>
<!-- Sweetalert2 -->
<script src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
<!-- AOS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
@stack('scripts')
<script type="text/javascript">
    $(function () {
        window.mobilecheck() ? $("body").removeClass('use-nicescroll') : $("body").css("overflow", "hidden");

        AOS.init({
            duration: 800,
            easing: 'slide',
            once: false,
        });

        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();
    });

    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if ($(this).scrollTop() > 100) {
            $('.to-top').addClass('show-to-top');
        } else {
            $('.to-top').removeClass('show-to-top');
        }
    }

    function scrollToTop(callback) {
        if ($('html').scrollTop()) {
            $('html').animate({scrollTop: 0}, callback);
            return;
        }
        if ($('body').scrollTop()) {
            $('body').animate({scrollTop: 0}, callback);
            return;
        }
        callback();
    }

    function numberOnly(e, decimal) {
        var key;
        var keychar;
        if (window.event) {
            key = window.event.keyCode;
        } else if (e) {
            key = e.which;
        } else return true;
        keychar = String.fromCharCode(key);
        if ((key == null) || (key == 0) || (key == 8) || (key == 9) || (key == 13) || (key == 27) || (key == 188)) {
            return true;
        } else if ((("0123456789").indexOf(keychar) > -1)) {
            return true;
        } else if (decimal && (keychar == ".")) {
            return true;
        } else return false;
    }

    var title = document.getElementsByTagName("title")[0].innerHTML;
    (function titleScroller(text) {
        document.title = text;
        setTimeout(function () {
            titleScroller(text.substr(1) + text.substr(0, 1));
        }, 500);
    }(title + " ~ "));

    <!--Scroll Progress Bar-->
    function progress() {
        var windowScrollTop = $(window).scrollTop();
        var docHeight = $(document).height();
        var windowHeight = $(window).height();
        var progress = (windowScrollTop / (docHeight - windowHeight)) * 100;
        var $bgColor = progress > 99 ? '#ff3300' : '#cd2900';
        var $textColor = progress > 99 ? '#fff' : '#333';

        $('.myProgress .bar').width(progress + '%').css({backgroundColor: $bgColor});
        // $('h1').text(Math.round(progress) + '%').css({color: $textColor});
        $('.fill').height(progress + '%').css({backgroundColor: $bgColor});
    }

    progress();

    $(document).on('scroll', progress);

    window.onload = function () {
        $('.images-preloader').fadeOut();

        $(".use-nicescroll").niceScroll({
            cursorcolor: "rgb(255,51,0)",
            cursorwidth: "8px",
            background: "rgba(222, 222, 222, .75)",
            cursorborder: 'none',
            horizrailenabled: false,
            autohidemode: 'leave',
            zindex: 9999999,
        });

        var options = {
            whatsapp: "+628122805040",
            email: "{{env('MAIL_USERNAME')}}",
            call_to_action: "Message us",
            button_color: "#ff3300",
            position: "left",
            order: "email,whatsapp",
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    };

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    $(document).on('mouseover', '.use-nicescroll', function () {
        $(this).getNiceScroll().resize();
    });
</script>
</body>
</html>
