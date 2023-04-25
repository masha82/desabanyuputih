@extends('layouts.master')

@section('title')
    <title>LAYANAN KORPRI</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="container topmargin bottommargin-lg">
                <div class="mx-auto" style="max-width: 700px">
                    <h2 class="nott center ls0 gradient-text gradient-horizon">LAYANAN KORPRI KABUPATEN SITUBONDO</h2>
                </div>
                <div class="row">
                    @if (!empty($layanan->file))
                        <img src="{{ asset('layanan/' . $layanan->file) }}" alt="FAQs" class="px-5 mt-4">
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="container topmargin bottommargin-lg">
                <div class="tabs side-tabs responsive-tabs clearfix" id="tab-4">

                    <ul class="tab-nav clearfix">
                        @foreach ($jenis as $item)
                            <li><a href="#tabs-{{ $item->id }}">{{ $item->nama }}</a></li>
                        @endforeach
                    </ul>

                    <div class="tab-container">
                        @foreach ($jenis as $content)
                            <div class="tab-content clearfix" id="tabs-{{ $content->id }}">
                                <div class="col-md-12">
                                    <h4 id="faq-1"><strong>A.</strong> Informasi</h4>
                                    {!! $content->informasi !!}
                                    <div class="line"></div>
                                    <!--<h4 id="faq-1"><strong>B.</strong> Mekanisme</h4>-->
                                    <!--{!! $content->mekanisme !!}-->
                                    <!--<div class="line"></div>-->
                                    <!--<h4 id="faq-1"><strong>C.</strong> Syarat</h4>-->
                                    <!--{!! $content->syarat !!}-->
                                    <!--<div class="line"></div>-->
                                    <h4 id="faq-1"><strong>B.</strong> Keterangan</h4>
                                    {!! $content->keterangan !!}
                                    <div class="line"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
