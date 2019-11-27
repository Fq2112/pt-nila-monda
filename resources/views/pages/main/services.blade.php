@extends('layouts.mst')
@section('title', 'Our Services | '.env('APP_TITLE'))
@push('styles')
    <style>
        .breadcrumbs {
            background-image: url({{asset('images/slider/services.jpg')}});
        }

        .about-wrapper p, .about-wrapper ol {
            font-size: 18px
        }

        ol {
            margin-left: 3em;
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Our Services</h2>
            <p>What services does our company provide to you?</p>
        </div>
        <ul class="crumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('home')}}"><i class="fa fa-angle-double-right"></i> Home</a></li>
            <li><a href="#" onclick="goToAnchor()"><i class="fa fa-angle-double-right"></i> Services</a></li>
        </ul>
    </div>

    <section class="bot-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="about-wrapper">
                                <h2>Our <strong class="strong-color">Services</strong></h2>
                                <p align="justify">Jasa pelayanan <strong>PT. NILA MONDA</strong> meliputi :</p>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="icon-bx-wraper">
                                            <div class="icon-info">
                                                <i class="flaticon-oil-platform"></i>
                                            </div>
                                            <div class="txt-info">
                                                <h2>Pekerjaan Sipil</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="icon-bx-wraper">
                                            <div class="icon-info">
                                                <i class="flaticon-mining-industry"></i>
                                            </div>
                                            <div class="txt-info">
                                                <h2>Pembangunan Gedung, Rumah, atau lainnya</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="icon-bx-wraper">
                                            <div class="icon-info">
                                                <i class="flaticon-refinery"></i>
                                            </div>
                                            <div class="txt-info">
                                                <h2>Desain Interior</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="icon-bx-wraper">
                                            <div class="icon-info">
                                                <i class="flaticon-power-plant"></i>
                                            </div>
                                            <div class="txt-info">
                                                <h2>Arsitektur</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="icon-bx-wraper">
                                            <div class="icon-info">
                                                <i class="flaticon-refinery"></i>
                                            </div>
                                            <div class="txt-info">
                                                <h2>Perdagangan Umum</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="icon-bx-wraper">
                                            <div class="icon-info">
                                                <i class="flaticon-power-plant"></i>
                                            </div>
                                            <div class="txt-info">
                                                <h2>Pengadaan Barang atau Jasa</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p align="justify">Pelayanan tersebut dilakukan dalam rangka turut serta andil pada
                                    pembangunan, dan berperan aktif untuk penyediaan kebutuhan pokok masyarakat, sesuai
                                    dengan moto <strong>PT. NILA MONDA</strong> :</p>
                                <blockquote><strong style="font-size: 18px">Grow Up with Us</strong></blockquote>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="text-center">
                                <img src="{{asset('images/excavator.png')}}" alt="" style="-webkit-transform: scaleX(-1);transform: scaleX(-1);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        function goToAnchor() {
            $('html,body').animate({scrollTop: $(".bot-50").offset().top}, 500);
        }
    </script>
@endpush
