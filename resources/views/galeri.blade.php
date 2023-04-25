@extends('layouts.master')
@section('title')
    <title>GALERI</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="container topmargin bottommargin-lg">
                <div class="mx-auto" style="max-width: 700px">
                    <h2 class="mb-2 nott center ls0 gradient-text gradient-horizon">GALERI KEGIATAN KORPRI KABUPATEN
                        SITUBONDO</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row posts-md col-mb-30">
        <div class="masonry-thumbs grid-container grid-4 has-init-isotope" data-big="3" data-lightbox="gallery"
             style="position: relative; height: 295.664px;">
            @foreach ($galeri as $item)
                <a class="grid-item" href="{{ asset('galeri/' . $item->file) }}" data-lightbox="gallery-item"
                   style="position: absolute; left: 0%; top: 0px;">
                    <div class="grid-inner">
                        <img src="{{ asset('galeri/' . $item->file) }}" alt="Gallery">
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark">
                                <i class="icon-line-plus h4 mb-0 animated fadeOut" data-hover-animate="fadeIn"
                                   style="animation-duration: 600ms;"></i>
                            </div>
                            <div class="bg-overlay-bg dark animated fadeOut" data-hover-animate="fadeIn"
                                 style="animation-duration: 600ms;"></div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
