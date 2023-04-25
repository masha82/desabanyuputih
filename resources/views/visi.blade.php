@extends('layouts.master')
@section('title')
    <title>Visi dan Misi</title>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="container topmargin bottommargin-lg">
                <div class="heading-block mx-auto" style="max-width: 700px">
                    <h2 class="mb-2 nott center ls0 gradient-text gradient-horizon">VISI DAN MISI KORPRI</h2>
                    <h4 class="gradient-text gradient-horizon">VISI KORPRI: </h4>
                    <p>Terwujudnya KORPRI sebagai organisasi yang kuat, netral mandiri, profesional dan terdepan dalam
                        menjaga
                        persatuan dan kesatuan bangsa, mensejahterakan anggota, masyarakat dan melindungi kepentingan
                        para
                        anggota
                        agar
                        lebih profesional didalam membangun Pemerintahan yang baik.</p>
                    <hr>
                    <h4 class="gradient-text gradient-horizon">MISI KORPRI: </h4>
                    <br>
                    <ol>
                        <li>Mewujudkan organisasi KORPRI sebagai alat pemersatu bangsa dan negara</li>
                        <li>Memperkuat kedudukan, wibawa, dan martabat organisasi KORPRI</li>
                        <li>Meningkatkan peran serta KORPRI dalam mensukseskan pembangunan nasional</li>
                        <li>Meningkatkan perlindungan hukum dan pengayoman kepada anggota</li>
                        <li>Meningkatkan ketaqwaan dan profesionalitas anggota</li>
                        <li>Meningkatkan kesejahteraan anggota dan keluarganya</li>
                        <li>Menegakkan peraturan perundang-undangan Pegawai Republik Indonesia</li>
                        <li>Mewujudkan rasa kesetiakawanan dan solidaritas sesama anggota KORPRI</li>
                        <li>Mewujudkan prinsip-prinsip ke pemerintahan yang baik</li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('sekda.png') }}" alt="FAQs" class="px-5 mt-4">
            <p class="text-center mb-0 mt-2"><strong>WAWAN SETIAWAN, S.H, M.H.</strong></p>
            <p class="text-center mb-0">Ketua KORPRI Kabupaten Situbondo</p>
        </div>
    </div>
@endsection
