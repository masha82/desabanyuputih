@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ url('https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css') }}">
@endpush
@section('title')
    <title>KEGIATAN KORPRI</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="container topmargin bottommargin-lg">
                <div class="mx-auto" style="max-width: 700px">
                    <h2 class="gradient-text center gradient-horizon">DAFTAR KEGIATAN {{strtoupper($bansos->master_kegiatan)}}
                        KABUPATEN SITUBONDO</h2>
                    <br>
                </div>
                <table class="table table-striped" id="myTable">
                    <thead>
                    <tr>
                        <th>TANGGAL</th>
                        <th>TEMPAT</th>
                        <th>KETERANGAN KEGIATAN</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
@push('js')
    <script src="{{ url('https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            var table = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('bansos.show',$bansos->id) }}",
                columns: [{
                    data: 'tgl_keg',
                    name: 'tgl_keg'
                },
                    {
                        data: 'tempat',
                        name: 'tempat'
                    },
                    {
                        data: 'keterangan',
                        name: 'keterangan'
                    },
                ]
            });
        });
    </script>
@endpush
