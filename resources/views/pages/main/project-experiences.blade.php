@extends('layouts.mst')
@section('title', 'Project Experiences | '.env('APP_TITLE'))
@push('styles')
    <style>
        .breadcrumbs {
            background-image: url({{asset('images/slider/project-experiences.jpg')}});
        }

        .post-meta p {
            font-size: 18px
        }
    </style>
@endpush
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-overlay"></div>
        <div class="page-title">
            <h2>Project Experiences</h2>
            <p>Feel free to check what kind of project that we've done</p>
        </div>
        <ul class="crumb">
            <li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('home')}}"><i class="fa fa-angle-double-right"></i> Home</a></li>
            <li><a href="#" onclick="goToAnchor()"><i class="fa fa-angle-double-right"></i> Project Experiences</a></li>
        </ul>
    </div>

    <section class="wrapper-choose">
        <div class="container">
            <h2 class="text-heading border-2 text-center">Project <strong class="strong-color">Experiences</strong></h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="blog-timeline">
                        <!-- 2009 - 2015 -->
                        <li>
                            <div class="tldate">2009 &ndash; 2015</div>
                        </li>
                        <li>
                            <div class="tl-circ"></div>
                            <div class="timeline-panel">
                                <div class="item html5">
                                    <article class="item-post">
                                        <div class="post-meta">
                                            <p align="justify">Dalam masa ini <strong>PT. NILA MONDA</strong> dipercaya mengerjakan proyek - proyek yang ada di lingkungan Kota dan Kabupaten Boyolali, proyek dari Dinas PU, Dinas Pengairan, Dinas Lingkungan Hidup, dan Instansi Pemerintah lainya. Dan proyek - proyek swasta di area Kabupaten Boyolali dan Area Jawa Tengah.</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </li>

                        <!-- 2016 - 2017 -->
                        <li>
                            <div class="tldate">2016 &ndash; 2017</div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="tl-circ"></div>
                            <div class="timeline-panel">
                                <div class="item css">
                                    <article class="item-post">
                                        <div class="post-thumb">
                                            <a href="javascript:void(0)"><img src="{{asset('images/projects/drainage-phase-I.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="post-meta">
                                            <h4><a href="javascript:void(0)">Pembangunan KAMPUS ESTU UTOMO Tlatar, Boyolali &ndash; Jawa Tengah</a></h4>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </li>

                        <!-- 2017 - 2018 -->
                        <li>
                            <div class="tldate">2017 &ndash; 2018</div>
                        </li>
                        <li>
                            <div class="tl-circ"></div>
                            <div class="timeline-panel">
                                <div class="item design">
                                    <article class="item-post">
                                        <div class="post-thumb">
                                            <a href="javascript:void(0)"><img src="{{asset('images/projects/kantor-bank.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="post-meta">
                                            <h4><a href="javascript:void(0)">Pembangunan POLIKLINIK ESTU UTOMO KARANGGEDE, Boyolali &ndash; Jawa Tengah</a></h4>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </li>

                        <!-- 2019 - now -->
                        <li>
                            <div class="tldate">2019 &ndash; Now</div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="tl-circ"></div>
                            <div class="timeline-panel">
                                <div class="item css">
                                    <article class="item-post">
                                        <div class="post-thumb">
                                            <a href="javascript:void(0)"><img src="{{asset('images/projects/jalan.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="post-meta">
                                            <h4><a href="javascript:void(0)">Pembangunan TANGGUL SUNGAI MIU, Desa Simoro, Kec. Gumbasa, Sigi &ndash; Sulawesi Tengah</a></h4>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </li>
                    </ul>
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
