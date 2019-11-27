@extends('layouts.mst')
@section('title', 'Vision and Mission | '.env('APP_TITLE'))
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
            <h2>Vision & Mission</h2>
            <p>Do you want to know more about our company?</p>
        </div>
        <ul class="crumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('home')}}"><i class="fa fa-angle-double-right"></i> Home</a></li>
            <li><a href="{{route('brief-history')}}"><i class="fa fa-angle-double-right"></i> About</a></li>
            <li><a href="#" onclick="goToAnchor()"><i class="fa fa-angle-double-right"></i> Vision & Mission</a></li>
        </ul>
    </div>

    <section class="wrapper-choose">
        <div class="container">
            <h2 class="text-heading border-2 text-center">Vision <strong class="strong-color">& Mission</strong></h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="wrapper-txtInfo">
                        <h2>VISION</h2>
                        <p align="justify">Menjadi Perusahaan Konstruksi, Pengadaan Barang / Jasa, dan Perdagangan Umum yang terpercaya dan dapat diandalkan.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="wrapper-txtInfo">
                        <h2>MISSION</h2>
                        <p align="justify">Dapat berpartisipasi dalam pembangunan melalui jasa konstruksi.</p>
                        <p align="justify">Memberikan pelayanan dengan sikap yang profesional dan memenuhi standar Kesehatan - Keselamatan Kerja dan Lingkungan.</p>
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
