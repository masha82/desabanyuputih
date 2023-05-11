@extends('layouts.master')
@section('title')
    <title>LAPORAN APBDes</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="container topmargin bottommargin-lg">
                <div class="mx-auto" style="max-width: 700px">
                    <h2 class="text-center">Laporan APBDes Banyuputih</h2>
                </div>
            </div>
        </div>
    </div>
        <div class="row posts-md col-mb-30 mt-4">
        <div class="masonry-thumbs grid-container grid-4 has-init-isotope" data-big="3" data-lightbox="gallery"
             style="position: relative; height: 295.664px;">
           <div class="row">
                @foreach ($laporan as $item)
                    <div class="col-lg-4 col-md-4">
                        <div class="widget-content">
                            <figure class="image-box"><a class="lightbox-image"
                                                         href="{{ asset('foto_laporan/' . $item->file) }}"><img
                                        src="{{ asset('foto_laporan/' . $item->file) }}" alt=""></a></figure>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
