<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Website Desa Banyuputih</title>
<!-- Stylesheets -->
<link href="{{ asset('assets/tampilan-new/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/tampilan-new/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/tampilan-new/css/responsive.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('assets/tampilan-new/images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('assets/tampilan-new/images/favicon.png') }}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>
 
<div class="page-wrapper">
	
    <!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
 	
 	<!-- Main Header / Header Style Two -->
    <header class="main-header header-style-two">
    	
		<!-- Header Top -->
		<div class="header-top_two">
			<div class="auto-container">
				<div class="d-flex justify-content-center align-items-center flex-wrap">
					
					<!-- Info List -->
					<ul class="info-list">
						<li><a href="#"><span class="icon fa-solid fa-phone fa-fw"></span>+6282240606788</a></li>
						<li><a href="#"><span class="icon fa-solid fa-envelope fa-fw"></span>desabanyuputih58@gmail.com</a></li>
						<li><a href="#"><span class="icon fa-solid fa-map fa-fw"></span>Kecamatan Banyuputih, Kabupaten Situbondo, Jawa Timur</a></li>
					</ul>
					
					<!-- Social Box -->
					<ul class="header-social_box">
						<li><a href="https://www.facebook.com/Banyuputihdesaku/" class="fa-brands fa-facebook-f fa-fw"></a></li>
						{{-- <li><a href="https://instagram.com/" class="fa-solid fa-instagram fa-fw"></a></li> --}}
						<li><a href="https://www.youtube.com/@DesaBanyuputih" class="fa-solid fa-youtube fa-fw"></a></li>
					</ul>
					
				</div>
			</div>
		</div>
		<!-- End Header Top -->
		
		<!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
				<div class="inner-container d-flex">
					<!-- Logo Box -->
					<div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('assets/tampilan-new/images/Lambang_Kabupaten_Situbondo.png')}}" style="height:85px" alt="" title="">
					</a></div>
					
					<!-- Upper Right -->
					<div class="upper-right">
						<div class="nav-outer d-flex justify-content-between align-items-center flex-wrap">
						
							<!-- Main Menu -->
							<nav class="main-menu show navbar-expand-md">
								<div class="navbar-header">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon-bar"></span>
									</button>
								</div>
								
								<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										@guest
                                        <li></li>
										<li class="menu-item">
                                            <a href="{{ url('/') }}">Beranda</a>
										</li>
                                        <li></li>
                                        <li class="menu-item">
                                            <a href="{{ url('info') }}">Pengumuman</a>
										</li>
                                        <li></li>
                                        <li class="menu-item">
                                            <a href="{{ url('report') }}">Laporan APBDes</a>
										</li>
                                        <li></li>
                                        <li class="menu-item">
                                            <a href="{{ url('gallery') }}">Galeri</a>
										</li>
                                        <li></li>
                                        <li class="menu-item">
                                            <a href="{{ url('about') }}">Tentang Desa</a>
										</li>
										@endguest
										@auth
										<li class="menu-item">
                                            <a href="{{ url('/') }}">Beranda</a>
										</li>
										<li class="dropdown current"><a href="#">Administrator</a>
											<ul>
												<li><a href="{{ route('awal.create')}}">Form Foto Header</a></li>
												<li><a href="{{ route('news.create')}}">Form Berita</a></li>
												<li><a href="{{ route('info.create')}}">Form Pengumuman</a></li>
												<li><a href="{{ route('report.create')}}">Form Laporan APBDes</a></li>
												<li><a href="{{ route('gallery.create')}}">Form Galeri</a></li>
												<li><a href="{{ route('about.create')}}">Form Tentang Desa</a></li>
											</ul>
										</li>
										<li class="menu-item" style="">
											<a class="dropdown-item text-danger" href="{{ route('logout') }}"
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
										{{-- <li class="dropdown"><a href="#">Project</a>
											<ul>
												<li><a href="project.html">project</a></li>
												<li><a href="project-detail.html">project Detail</a></li>
											</ul>
										</li> --}}
									</ul>
								</div>
							</nav>
							<!-- Main Menu End-->
							
							<div class="outer-box d-flex align-items-center">
								
								<!-- Search Box -->
								<div class="search-box">
									<form method="post" action="contact.html">
										<div class="form-group">
											<input type="search" name="search-field" value="" placeholder="Search..." required>
											<button type="submit"><span class="icon fa fa-search"></span></button>
										</div>
									</form>
								</div>
								
								<!-- Mobile Navigation Toggler -->
								<div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>
								
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">
				<div class="d-flex justify-content-between align-items-center">
					<!-- Logo -->
					<div class="logo">
						<a href="index.html" title=""><img src="images/logo-3.png" alt="" title=""></a>
					</div>
					
					<!-- Right Col -->
					<div class="right-box d-flex align-items-center flex-wrap">
						<!-- Main Menu -->
						<nav class="main-menu">
							<!--Keep This Empty / Menu will come through Javascript-->
						</nav>
						<!-- Main Menu End-->
						
						<div class="outer-box d-flex align-items-center">
								
							<!-- Search Box -->
							<div class="search-box">
								<form method="post" action="contact.html">
									<div class="form-group">
										<input type="search" name="search-field" value="" placeholder="Search..." required>
										<button type="submit"><span class="icon fa fa-search"></span></button>
									</div>
								</form>
							</div>
							
							<!-- Mobile Navigation Toggler -->
							<div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>
							
						</div>
						
					</div>
					
				</div>
            </div>
        </div>
		<!-- End Sticky Menu -->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-020-x-mark"></span></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
				<!-- Search -->
				<div class="search-box">
					<form method="post" action="contact.html">
						<div class="form-group">
							<input type="search" name="search-field" value="" placeholder="SEARCH HERE" required>
							<button type="submit"><span class="icon flaticon-001-loupe"></span></button>
						</div>
					</form>
				</div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
		<!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->
	
	

	<!-- Content
============================================= -->
<section id="content">
	<div class="content-wrap p-0 mb-4">
		@yield('content')
	</div>
</section>

	{{-- <!-- Footer -->
	<footer class="main-footer" style="background-image:url(images/background/pattern-11.png)">
		<div class="auto-container">
			<!-- Widgets Section -->
			<div class="widgets-section">
				<div class="row clearfix">
					
					<!-- Big Column -->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget logo-widget">
									<div class="logo">
										<a href="index.html"><img src="{{ asset('assets/tampilan-new/images/footer-logo.png')}}" alt="" /></a>
									</div>
									<div class="text">We work with a passion of taking challenges and creating new ones in advertising sector.</div>
									<a href="#" class="theme-btn about-btn">About us</a>
								</div>
							</div>
							

					<!-- Big Column -->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget contact-widget">
									<h4>Official info:</h4>
									<ul class="contact-list">
										<li><span class="icon fa fa-phone"></span> 30 Commercial Road <br> Fratton, Australia</li>
										<li><span class="icon fa fa-envelope"></span> 1-888-452-1505</li>
									</ul>
									<div class="timing">
										<strong>Open Hours: </strong>
										Mon - Sat: 8 am - 5 pm, <br> Sunday: CLOSED
									</div>
								</div>
							</div>
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget instagram-widget">
									<h4>Gallery</h4>
									<div class="widget-content">
										<div class="images-outer clearfix">
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="images/gallery/project-1.jpg"><img src="images/gallery/footer-gallery-thumb-1.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="images/gallery/project-2.jpg"><img src="images/gallery/footer-gallery-thumb-2.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="images/gallery/project-3.jpg"><img src="images/gallery/footer-gallery-thumb-3.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="images/gallery/project-4.jpg"><img src="images/gallery/footer-gallery-thumb-4.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="images/gallery/project-5.jpg"><img src="images/gallery/footer-gallery-thumb-5.jpg" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="images/gallery/project-6.jpg"><img src="images/gallery/footer-gallery-thumb-6.jpg" alt=""></a></figure>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="footer-bottom">
				<div class="copyright">2023 &copy; All rights reserved by <a href="#">Themexriver</a></div>
			</div>
			
		</div>
	</footer>
	<!-- Footer --> --}}
		
</div>
<!-- End PageWrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<script src="{{ asset('assets/tampilan-new/js/jquery.js')}}"></script>
<script src="{{ asset('assets/tampilan-new/js/appear.js')}}"></script>
<script src="{{ asset('assets/tampilan-new/js/owl.js')}}"></script>
<script src="{{ asset('assets/tampilan-new/js/wow.js')}}"></script>
<script src="{{ asset('assets/tampilan-new/js/odometer.js')}}"></script>
<script src="{{ asset('assets/tampilan-new/js/mixitup.js')}}"></script>
<script src="{{ asset('assets/tampilan-new/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/tampilan-new/js/parallax-scroll.js')}}"></script>
<script src="{{ asset('assets/tampilan-new/js/parallax.min.js')}}"></script>
<script src="{{ asset('assets/tampilan-new/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/tampilan-new/js/tilt.jquery.min.js')}}"></script>
<script src="{{ asset('assets/tampilan-new/js/magnific-popup.min.js')}}"></script>
<script src="{{ asset('assets/tampilan-new/js/script.js')}}"></script>
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
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</body>
</html>