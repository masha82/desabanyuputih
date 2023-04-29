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
    <div class="row posts-md col-mb-30">
        <div class="masonry-thumbs grid-container grid-4 has-init-isotope" data-big="3" data-lightbox="gallery"
             style="position: relative; height: 295.664px;">
            @foreach ($laporan as $item)
                <a class="grid-item" href="{{ asset('foto_laporan/' . $item->file) }}" data-lightbox="gallery-item"
                   style="position: absolute; left: 0%; top: 0px;">
                   <div class="case-block_inner">
                    <div class="case-block_image">
                        <img src="{{ asset('foto_laporan/' . $item->file) }}" alt="" />
                        <div class="case-one_overlay">
                            <div class="case-one_overlay-content">
                                <a href="{{ asset('foto_laporan/' . $item->file) }}" class="case-block_plus lightbox-image plus fa fa-plus"></a>
                            </div>
                        </div>
                    </div>
                   </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
