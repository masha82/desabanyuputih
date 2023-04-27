@extends('layouts.master')
@push('css')
    {{-- <link rel="stylesheet" href="{{ asset('assets/demos/blog/css/fonts.css') }}" type="text/css" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/demos/blog/blog.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/colors.php?color=F39887') }}" type="text/css"/>
@endpush
@section('title')
    <title>DESA BANYUPUTIH</title>
@endsection

@section('content')
	<section class="slider-two">
		<div class="single-item-carousel owl-carousel owl-theme">
			
			<!-- Slide -->
			<div class="slide">
				<div class="slider-two_image-layer" style="background-image:url(images/main-slider/2.jpg)"></div>
				<div class="slider-two_pattern-layer" style="background-image:url(images/main-slider/pattern-1.png)"></div>
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="slider-two-content">
						<div class="slider-two_inner">
							<div class="slider-two_title">We are Business Solution</div>
							<h1 class="slider-two_heading">Prosper in this volatile <br> market funding.</h1>
							<div class="slider-two_text">We place you at the centre of international networks to <br> advance your strategic interests</div>
							<!-- Button Box -->
							<div class="slider-two_button-box">
								<a class="btn-style-two theme-btn btn-item" href="#">
									<div class="btn-wrap">
										<span class="text-one">Our Team <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Our Team <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Slide -->
			<div class="slide">
				<div class="slider-two_image-layer" style="background-image:url(images/main-slider/2.jpg)"></div>
				<div class="slider-two_pattern-layer" style="background-image:url(images/main-slider/pattern-1.png)"></div>
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="slider-two-content">
						<div class="slider-two_inner">
							<div class="slider-two_title">We are Business Solution</div>
							<h1 class="slider-two_heading">Prosper in this volatile <br> market funding.</h1>
							<div class="slider-two_text">We place you at the centre of international networks to <br> advance your strategic interests</div>
							<!-- Button Box -->
							<div class="slider-two_button-box">
								<a class="btn-style-two theme-btn btn-item" href="#">
									<div class="btn-wrap">
										<span class="text-one">Our Team <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Our Team <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Slide -->
			<div class="slide">
				<div class="slider-two_image-layer" style="background-image:url(images/main-slider/2.jpg)"></div>
				<div class="slider-two_pattern-layer" style="background-image:url(images/main-slider/pattern-1.png)"></div>
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="slider-two-content">
						<div class="slider-two_inner">
							<div class="slider-two_title">We are Business Solution</div>
							<h1 class="slider-two_heading">Prosper in this volatile <br> market funding.</h1>
							<div class="slider-two_text">We place you at the centre of international networks to <br> advance your strategic interests</div>
							<!-- Button Box -->
							<div class="slider-two_button-box">
								<a class="btn-style-two theme-btn btn-item" href="#">
									<div class="btn-wrap">
										<span class="text-one">Our Team <i class="fa-solid fa-arrow-right fa-fw"></i></span>
										<span class="text-two">Our Team <i class="fa-solid fa-arrow-right fa-fw"></i></span>
									</div>
								</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	<!-- End Main Slider -->

    <div class="container">
        <div class="row border-between">
            @if (!empty($berita->first()->file))
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <article class="entry border-bottom-0 mb-0">
                        <div class="entry-image">
                            <a href="demo-blog-single.html"><img src="{{ asset('gambar/' . $berita->first()->file) }}"
                                                                 alt="Image 3"></a>
                        </div>
                        <div class="entry-title">
                            <h3><a href="{{ route('news.show', $berita->first()->id) }}"
                                   class="stretched-link color-underline"><span>{{ $berita->first()->judul }}</span></a>
                            </h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><a
                                        href="#">{{ \Carbon\Carbon::parse($berita->first()->created_at)->isoFormat('dddd, D MMMM Y') }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            {!! $berita->first()->isi !!}
                        </div>
                    </article>
                </div>
            @endif
            <div class="col-lg-4">
                <h3 class="font-secondary fw-medium mb-4 h4">Berita Terbaru</h3>
                <div class="row posts-md col-mb-30">
                    @foreach ($berita->take(5) as $item)
                        <article class="entry col-12">
                            <div class="grid-inner row gutter-20">
                                <div class="col-md-4">
                                    <a class="entry-image" href="#"><img src="{{ asset('gambar/' . $item->file) }}"
                                                                         alt="Image"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="entry-title title-xs">
                                        {{-- <div class="entry-categories"><a href="demo-blog-categories.html">Market</a></div> --}}
                                        <h3><a href="{{route('news.show', $item->id)}}"
                                               class="stretched-link color-underline">{{ $item->judul }}</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a
                                                    href="#">{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

            </div>
            <a href="{{ route('news.index') }}" class="btn btn-sm btn-outline-secondary">Berita lainnya <i
                    class="icon-line-arrow-right"></i></a>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="d-flex justify-content-between">
                <h3 class="font-secondary fw-medium m-0">Galeri</h3>
                <a href="{{ route('gallery.index') }}" class="btn btn-sm btn-outline-secondary">Lihat lebih banyak <i
                        class="icon-line-arrow-right"></i></a>
            </div>
            <hr class="text-dark">
            <div class="row posts-md col-mb-30">
                <div class="masonry-thumbs grid-container grid-4 has-init-isotope" data-big="3" data-lightbox="gallery"
                     style="position: relative; height: 295.664px;">
                    @foreach ($galeri->take(8) as $item)
                        @if (!empty($item->file))
                            <a class="grid-item" href="{{ asset('galeri/' . $item->file) }}"
                               data-lightbox="gallery-item"
                               style="position: absolute; left: 0%; top: 0px;">
                                <div class="grid-inner">
                                    <img src="{{ asset('galeri/' . $item->file) }}" alt="Gallery">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark">
                                            <i class="icon-line-plus h4 mb-0 animated fadeOut"
                                               data-hover-animate="fadeIn"
                                               style="animation-duration: 600ms;"></i>
                                        </div>
                                        <div class="bg-overlay-bg dark animated fadeOut" data-hover-animate="fadeIn"
                                             style="animation-duration: 600ms;"></div>
                                    </div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
