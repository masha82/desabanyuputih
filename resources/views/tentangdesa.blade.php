@extends('layouts.master')
@section('title')
    <title>Tentang Desa</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="container topmargin bottommargin-lg">
                <div class="mx-auto" style="max-width: 700px">
                    <h2 class="text-center">TENTANG DESA BANYUPUTIH</h2>
                </div>
            </div>
        </div>
    </div>
<div class="container clearfix">
    <div class="topmargin-sm center">
</div>
    <div class="row col-mb-50">
        <div class="row col-mb-50">
            <div class="col-md-6 d-none d-md-flex align-self-end">
                <img src="{{asset('foto_tentang/'.$aboutdesa->foto_desa)}}" alt="Image" class="mb-0">
            </div>
            <div class="col-md-6 mb-5 subscribe-widget">
                {!! $aboutdesa->isi !!}
            </div>
        </div>
</div>
@endsection