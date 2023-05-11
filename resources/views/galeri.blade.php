@extends('layouts.master')
@section('title')
    <title>GALERI</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="container topmargin bottommargin-lg">
                <div class="mx-auto" style="max-width: 700px">
                    <h2 class="mb-2 nott center ls0 gradient-text gradient-horizon">Galeri Foto Tentang Pemerintah Desa Banyuputih</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
                @foreach ($galeri as $item)
                    <div class="col-lg-4 col-md-4">
                        <div class="widget-content">
                            <figure class="image-box"><a class="lightbox-image"
                                                         href="{{ asset('galeri/' . $item->file) }}"><img
                                        src="{{ asset('galeri/' . $item->file) }}" alt=""></a></figure>
                        </div>
                    </div>
                @endforeach
            </div>
   
@endsection
