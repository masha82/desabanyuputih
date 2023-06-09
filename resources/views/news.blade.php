@extends('layouts.master')
@section('title')
    <title>BERITA</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="container topmargin bottommargin-lg">
                <div class="mx-auto" style="max-width: 700px">
                    <h2 class="mb-2 nott center ls0 gradient-text gradient-horizon">Berita Tentang Desa Banyuputih</h2>

                </div>
            </div>
        </div>
    </div>
    <div class="container clearfix">
        <div class="row gutter-40 col-mb-80">
            <div class="postcontent col-lg-12">
                <div id="posts" class="row gutter-40 mb-0">
                    @foreach ($data as $item)
                        <div class="entry col-12 mt-0 mb-0">
                            <div class="grid-inner row g-0">
                                <div class="col-md-4">
                                    <a class="entry-image" href="#" data-lightbox="image"><img
                                            src="{{ asset('gambar/' . $item->file) }}"
                                            alt="Standard Post with Image"></a>
                                </div>
                                <div class="col-md-8 ps-md-4">
                                    <div class="entry-title title-sm">
                                        <h2><a href="{{route('news.show',$item->id)}}">{{ $item->judul }}</a></h2>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="icon-calendar3"></i>
                                                {{ \Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y') }}
                                            </li>
                                            <li><i class="icon-user"></i> {{ $item->editor }}</li>
                                            <li><i class="icon-folder-open"></i> <a
                                                    href="#">{{ $item->kategori }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <a href="#" class="button button-border button-rounded">Baca selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    @endforeach
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        {{ $data->links('layouts.paginate') }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
