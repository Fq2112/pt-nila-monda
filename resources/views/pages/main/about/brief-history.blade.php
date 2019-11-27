@extends('layouts.mst')
@section('title', 'Brief History | '.env('APP_TITLE'))
@push('styles')
    <style>
        .breadcrumbs {
            background-image: url({{asset('images/slider/qhse-commitment.jpg')}});
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Brief History</h2>
            <p>Do you want to know more about our company?</p>
        </div>
        <ul class="crumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('home')}}"><i class="fa fa-angle-double-right"></i> Home</a></li>
            <li><a href="{{route('brief-history')}}"><i class="fa fa-angle-double-right"></i> About</a></li>
            <li><a href="#" onclick="goToAnchor()"><i class="fa fa-angle-double-right"></i> Brief History</a></li>
        </ul>
    </div>

    <section class="wrapper-choose">
        <div class="container">
            <h2 class="text-heading border-2 text-center">Brief <strong class="strong-color">History</strong></h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="wrapper-txtInfo">
                        <h2>PT. NILA MONDA</h2>
                        <p align="justify">Berkedudukan di Jalan Perintis Kemerdekaan RT.05 / RW.03 Bangunharjo,
                            Boyolali - Jawa Tengah - Indonesia, dengan akte pendirian Nomor 08 Tanggal 8 Juni 2009
                            dengan Notaris ADANG TRI SUNOKO, SH. Dan dengan perubahan akte pendirian Nomor 02 Tanggal 21
                            Desember 2018 - Notaris UPIK ISMOYOWATI, S.H., M.Kn. di Semarang.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wrapper-imageInfo">
                        <div class="img"></div>
                        <img src="{{asset('images/history.jpg')}}" alt="" style="-webkit-transform: scaleX(-1);transform: scaleX(-1);">
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 2.5em">
                <div class="col-12" style="padding: 0 15px">
                    <div class="wrapper-txtInfo">
                        <p align="justify"><strong>PT. NILA MONDA</strong> sejak awal didirikan bergerak dalam bidang
                            kontraktor dan perdagangan umum. Pada tahun yang sama memenangkan kepercayaan dari
                            Pemerintah Kota Boyolali dan berlanjut ke berbagai Kabupaten di wilayah Jawa Tengah.</p>
                        <p align="justify">Selain pekerjaan dilingkungan Pemerintah Kota Boyolali dan Kabupaten di
                            sekitarnya, <strong>PT. NILA MONDA</strong> juga dipercaya untuk menangani beberapa proyek -
                            proyek swasta di sekitar daerah dan wilayah tersebut.</p>
                        <p align="justify">Pada tahun 2015, PT. NILAMONDA mendapat kepercayaan yang lebih besar untuk
                            mengembangkan diri di bidangnya dengan nominal kontrak yang lebih besar daripada tahun
                            sebelumnya. Pada tahun 2015 inilah merupakan tonggak sejarah untuk <strong>PT. NILA
                                MONDA</strong>, karena dalam tahun tersebut semua kemampuan telah diuji dan membuat
                            <strong>PT. NILA MONDA</strong> bersemangat untuk terus tumbuh berkembang.</p>
                        <p align="justify">Pada tahun 2019, karena pertumbuhan bisnis dan persaingan semakin ketat, maka
                            <strong>PT. NILA MONDA</strong> yang berkantor pusat di Kota Boyolali untuk membuat
                            terobosan baru dengan membuka beberapa kantor Cabang di beberapa wilayah dan daerah di
                            Indonesia.</p>
                        <p align="justify"><strong>PT. NILA MONDA</strong> terus mengembangkan kemampuan untuk
                            berpartisipasi aktif sebagai bagian dari pengembangan negara tercinta ini, di INDONESIA
                            khususnya dan luar negeri pada umumnya.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        function goToAnchor() {
            $('html,body').animate({scrollTop: $(".wrapper-choose").offset().top}, 500);
        }
    </script>
@endpush
