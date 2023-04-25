<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Heebo:300,400,500,700,900" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css"/>

    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" type="text/css"/>

    <!-- Freelancer Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/demos/freelancer/css/fonts.css') }}" type="text/css"/>
    {{-- <link rel="stylesheet" href="{{ asset('assets/demos/freelancer/freelancer.css') }}" type="text/css" /> --}}

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    {{-- <link rel="stylesheet" href="{{ asset('assets/css//colors.php?color=f7c25e') }}" type="text/css" /> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
    @stack('css')
    @yield('title')
    <style>
        .testimonial.testimonial-full .flex-control-nav {
            margin-top: 0px;
        }
    </style>
</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">
    <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false"
         style="padding:0px!important">
        <div class="flexslider" style="height: 221px;">
            <div class="slider-wrap">
                <div class="slide" data-thumb-alt=""
                     style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">

                    <div class="testi-content">
                        <img src="{{ asset('topbar-new.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header
============================================= -->
    <header id="header" class="border-bottom-0 no-sticky transparent-header" data-sticky-shrink="false">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row flex-row-reverse flex-lg-row justify-content-between">
                    <!-- Logo
                ============================================= -->
                    <div id="logo">
                        <!-- <a href="demo-freelancer.html" class="standard-logo"><img
                                    src="{{ asset('logo_situbondo.png') }}"
                                    style="height: 60px!important;max-height:60px!important" alt="Canvas Logo" ></a> -->
                        <a href="demo-freelancer.html" class="retina-logo"><img
                                class="d-flex align-content-center justify-content-center"
                                src="{{ asset('logo_situbondo.png') }}" alt="Canvas Logo"></a>
                    </div><!-- #logo end -->


                    <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100">
                            <path
                                d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                            </path>
                            <path d="m 30,50 h 40"></path>
                            <path
                                d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                            </path>
                        </svg>
                    </div>

                    <!-- Primary Navigation
                ============================================= -->
                    <nav class="primary-menu with-arrows">

                        <ul class="menu-container justify-content-between">
                            <li class="menu-item"><a class="menu-link" href="{{ url('/') }}">
                                    <div>Beranda</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="#">
                                    <div>Profil</div>
                                </a>
                                <ul class="sub-menu-container" style="">
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ url('visi') }}">
                                            <div>Visi dan Misi</div>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ url('regulasi') }}">
                                            <div>Dasar Hukum</div>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ url('strukturorg') }}">
                                            <div>Struktur Organisasi</div>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="menu-item"><a class="menu-link" href="{{ route('services.index') }}">
                                    <div>Layanan KORPRI</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="#">
                                    <div>Kegiatan KORPRI</div>
                                </a>
                                <ul class="sub-menu-container" style="">
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ route('bansos.show',1)}}">
                                            <div>KORPRI PEDULI</div>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ route('bansos.show',2)}}">
                                            <div>HUT KORPRI</div>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ route('bansos.show',3)}}">
                                            <div>MUSKAB KORPRI</div>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ route('bansos.show',4)}}">
                                            <div>KORPRI RELIGI</div>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ route('bansos.show',5)}}">
                                            <div>RAPAT KERJA</div>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ route('bansos.show',6)}}">
                                            <div>KORPRI SINERGI</div>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ route('bansos.show',7)}}">
                                            <div>LAIN-LAIN</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item"><a class="menu-link" href="{{ route('gallery.index') }}">
                                    <div>Galeri</div>
                                </a></li>
                            <li class="menu-item"><a class="menu-link" href="{{ route('info.index') }}">
                                    <div>Pengumuman</div>
                                </a></li>
                            @auth
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>Admin</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('news.create') }}">
                                                <div>Form Berita</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('regulasi.create') }}">
                                                <div>Form Dasar Hukum</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('strukturorg.create') }}">
                                                <div>Form Struktur Organisasi</div>
                                            </a>
                                        </li>
                                        <li class="menu-item"><a class="menu-link"
                                                                 href="{{ route('services.create') }}">
                                                <div>Form Jenis Layanan KORPRI</div>
                                            </a></li>
                                        <!-- <li class="menu-item"><a class="menu-link"
                                                    href="{{ route('fotolayanan.create') }}">
                                                    <div>Form Foto Layanan KORPRI</div>
                                                </a></li> -->
                                        <li class="menu-item"><a class="menu-link"
                                                                 href="{{ route('bansos.create') }}">
                                                <div>Form Kegiatan Korpri</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link"
                                                                 href="{{ route('gallery.create') }}">
                                                <div>Form Galeri</div>
                                            </a></li>
                                        <li class="menu-item"><a class="menu-link"
                                                                 href="{{ route('info.create') }}">
                                                <div>Form Pengumuman</div>
                                            </a>
                                        </li>
                                        @auth
                                            <li class="menu-item"><a class="menu-link" href="{{ route('logout') }}"
                                                                     onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                      class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        @endauth
                                    </ul>
                                </li>
                        @endauth
                    </nav><!-- #primary-menu end -->

                </div>
            </div>
        </div>
    </header><!-- #header end -->

    <!-- Slider
============================================= -->

    <!-- Content
============================================= -->
    <section id="content">

        <div class="content-wrap p-0 mb-4">
            @yield('content')
        </div>
    </section>

    <!-- Footer
============================================= -->
    <footer id="footer" class="dark">
        <!-- Copyrights
============================================= -->
        <div id="copyrights">
            <div class="container">

                <div class="row col-mb-30">

                    <div class="col-md-6 text-center text-md-start">
                        Copyrights &copy; 2023<br>
                        Dinas Komunikasi dan Informatika Kabupaten Situbondo<br>

                    </div>

                    <div class="col-md-6 text-center text-md-end">
                        <div class="d-flex justify-content-center justify-content-md-end">
                            <a href="#" class="social-icon si-small si-borderless si-facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-gplus">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-pinterest">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-vimeo">
                                <i class="icon-vimeo"></i>
                                <i class="icon-vimeo"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-github">
                                <i class="icon-github"></i>
                                <i class="icon-github"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-yahoo">
                                <i class="icon-yahoo"></i>
                                <i class="icon-yahoo"></i>
                            </a>

                            <a href="#" class="social-icon si-small si-borderless si-linkedin">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a>
                        </div>

                        <div class="clear"></div>

                        <i class="icon-envelope2"></i> korpri@gmail.com <br>
                        <span class="middot"></span>
                        <i class="icon-headphones"></i> +62 811-1111-111 <br>
                        <span class="middot"></span> <i class="icon-office"></i> Jalan PB. Sudirman, Situbondo
                    </div>

                </div>

            </div>
        </div><!-- #copyrights end -->
    </footer><!-- #footer end -->
</div><!-- #wrapper end -->
</body>
<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-double-angle-up bg-white text-dark rounded-circle shadow"></div>

<!-- External JavaScripts
============================================= -->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/plugins.min.js') }}"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{ asset('assets/js/functions.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@stack('js')
