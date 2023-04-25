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
    <section id="slider" class="slider-element min-vh-md-75 py-4 include-header">
        <div class="slider-inner">
            <div class="vertical-middle slider-element-fade">
                <div class="container text-center py-0">
                    <div class="emphasis-title mb-0">
                        <h4 class="text-uppercase ls3 fw-bolder mb-0">Selamat Datang di Website Kami</h4>
                        <h1>
                            <span id="oc-images" class="owl-carousel image-carousel carousel-widget" data-items="1"
                                  data-margin="0" data-autoplay="3000" data-loop="true" data-nav="false"
                                  data-pagi="false"
                                  data-animate-in="fadeInUp">
                                <div class="fw-bold" style="color:#1a9256">DESA BANYUPUTIH</div>
                                {{-- <div class="fw-bold" style="color:#AA9B4E">BANYUPUTIH</div> --}}
                                <div class="fw-bold" style="color:#6572ec">KABUPATEN</div>
                                <div class="fw-bold" style="color:#6572ec">SITUBONDO</div>
                            </span>
                        </h1>
                    </div>

                    <div class="mx-auto" style="max-width: 600px">
                        <p class="lead fw-normal text-dark mb-0">Korps Pegawai Republik Indonesia atau biasa dikenal
                            KORPRI
                            berdiri berdasarkan Keputusan Presiden Nomor 82 Tahun 1971, 29 November 1971. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
