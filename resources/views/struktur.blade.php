@extends('layouts.master')
@section('title')
    <title>STRUKTUR ORGANISASI</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="container topmargin bottommargin-lg">
                <div class="heading mx-auto" style="max-width: 700px">
                    <h2 class="nott center ls0 gradient-text gradient-horizon">STRUKTUR ORGANISASI KORPRI KABUPATEN
                        SITUBONDO</h2>
                </div>
                <div class="row">
                    @if (!empty($struktur->file))
                        <img src="{{ asset('struktur/' . $struktur->file) }}" alt="Image">
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
