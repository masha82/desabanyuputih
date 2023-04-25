@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ url('https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css') }}">
@endpush
@section('title')
    <title>DASAR HUKUM</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="container topmargin bottommargin-lg">
                <div class="heading-block mx-auto" style="max-width: 700px">
                    <h2 class="mb-2 nott center ls0 gradient-text gradient-horizon">REGULASI YANG BERKAITAN DENGAN
                        KORPRI</h2>
                </div>
                <div>
                    <table class="table table-striped" id="myTable">
                        <thead>
                        <tr>
                            <th>JUDUL REGULASI</th>
                            <th>NOMOR</th>
                            <th>TAHUN</th>
                            <th>JENIS</th>
                            <th>UNDUH</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
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
                ajax: "{{ route('regulasi.index') }}",
                columns: [{
                    data: 'judul',
                    name: 'judul'
                },
                    {
                        data: 'nomor',
                        name: 'nomor'
                    },
                    {
                        data: 'tahun',
                        name: 'tahun'
                    },
                    {
                        data: 'jenis',
                        name: 'jenis'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>
@endpush
