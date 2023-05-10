@extends('layout.template')
@section('title','Rockfest - Music Festival Event, DJ Concert and Night Club')
@section('css')

@endsection

@section('content')
            <!-- Carousel wrapper -->
            <section id="de-carousel" class="no-top no-bottom carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-mdb-target="#de-carousel" data-mdb-slide-to="0" class="active"></li>
                    <li data-mdb-target="#de-carousel" data-mdb-slide-to="1"></li>
                    <li data-mdb-target="#de-carousel" data-mdb-slide-to="2"></li>
                </ol>
                <!-- Inner -->
                <div class="carousel-inner">
                    <!-- Single item -->
                    <div class="carousel-item active" data-bgimage="url({{asset('template')}}/img/slider-1.jpg)">
                        <div class="mask">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="container text-white text-center">
                                    <div class="row">
                                        <div class="col-md-8 offset-md-2">
                                            <div class="box-line-outer wow flipInX">
                                                <div class="box-line-inner">
                                                    <h1 class="ultra-big mb-3 wow fadeInUp">Electro<br>Fusion</h1>
                                                    <div class="col-md-6 offset-md-3">
                                                        <h4 class="s2 lead wow fadeInUp" data-wow-delay=".3s">Feel The Energy</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn-main-wrap">
                                                <a href="#section-artists" class="btn-main wow fadeInUp" data-wow-delay=".6s">Explore</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single item -->
                    <div class="carousel-item" data-bgimage="url({{asset('template')}}/img/slider-2.jpg)">
                        <div class="mask">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="container text-white text-center">
                                    <div class="row">
                                        <div class="col-md-8 offset-md-2">
                                            <div class="box-line-outer wow flipInX">
                                                <div class="box-line-inner">
                                                    <h1 class="ultra-big mb-3 wow fadeInUp">Feel The<br>Beat</h1>
                                                    <div class="col-md-6 offset-md-3">
                                                        <h4 class="s2 lead wow fadeInUp" data-wow-delay=".3s">Feel The Energy</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn-main-wrap">
                                                <a href="#section-artists" class="btn-main wow fadeInUp" data-wow-delay=".6s">Explore</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Inner -->
                <!-- Controls -->
                <a class="carousel-control-prev" href="#de-carousel" role="button" data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#de-carousel" role="button" data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </section>
            <!-- Carousel wrapper -->

            <section id="section-date" class="no-top no-bottom">
                <div class="container-fluid">
                    <div class="row align-items-center bg-color">
                        <div class="col-lg-6 pt40 pb20">
                            <div class="text-center">
                                <div id="defaultCountdown" class="wow fadeInUp" data-wow-delay=".2s"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 pt40 pb20" data-bgcolor="#0b168d">
                            <div class="text-center">
                                <h2 class="s2 wow fadeInUp" data-wow-delay="0s">March 20-24</h2>
                                <h3 class="wow fadeInUp" data-wow-delay=".2s">Allegiant Stadium, Las Vegas, NV, United States</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="section-artists">
                <div class="container">
                    <div class="row g-custom-x align-items-center">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <div class="title-box-outer wow flipInX">
                                    <div class="title-box-inner wow flipInX" data-wow-delay=".2s">
                                        <h2 class="wow fadeInUp" data-wow-delay=".2s"><span class="id-color">01</span> Artists</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-sm-30">
                            <div class="de-image-text s2 wow flipInY">
                                <a href="#" class="d-text">
                                    <div class="arrow_wrap">
                                        <div class="arrow__up"></div>
                                    </div>
                                    <h3>DJ Neurogenic</h3>
                                </a>
                                <img src="{{asset('template')}}/img/featured-1.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 mb-sm-30">
                            <div class="de-image-text s2 wow flipInY">
                                <a href="#" class="d-text">
                                    <div class="arrow_wrap">
                                        <div class="arrow__up"></div>
                                    </div>
                                    <h3>DJ Phenomenic</h3>
                                </a>
                                <img src="{{asset('template')}}/img/featured-2.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 mb-sm-30">
                            <div class="de-image-text s2 wow flipInY">
                                <a href="#" class="d-text">
                                    <div class="arrow_wrap">
                                        <div class="arrow__up"></div>
                                    </div>
                                    <h3>DJ Fritz</h3>
                                </a>
                                <img src="{{asset('template')}}/img/featured-3.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-md-1 text-center">
                            <div class="spacer-single"></div>
                            <ul class="list-inline-style-1">
                                <li>Albetad</li>
                                <li>Formulary</li>
                                <li>Stylewort</li>
                                <li>Windgalled</li>
                                <li>Taxidermize</li>
                                <li>Lysimachus</li>
                                <li>Cassinese</li>
                                <li>Abiezer</li>
                                <li>Chevelle</li>
                                <li>Carabus</li>
                                <li>Aggrieved</li>
                                <li>Floater</li>
                                <li>Ovidae</li>
                                <li>Rockward</li>
                                <li>Hotbox</li>
                                <li>Emarcid</li>
                                <li>Victuallership</li>
                                <li>Barnard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section id="section-schedule" aria-label="section-services-tab" data-bgimage="url({{asset('template')}}/img/background-1.jpg)">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <div class="title-box-outer wow flipInX">
                                    <div class="title-box-inner wow flipInX" data-wow-delay=".2s">
                                        <h2 class="wow fadeInUp" data-wow-delay=".2s"><span class="id-color">02</span> Schedule</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-single"></div>
                        <div class="col-md-12">
                            <div class="de_tab tab_style_4 text-center">
                                <ul class="de_nav de_nav_dark">
                                    <li class="active" data-link="#section-services-tab">
                                        <h3>Day <span>01</span></h3>
                                        <h4>March 20, 2023</h4>
                                    </li>
                                    <li data-link="#section-services-tab">
                                        <h3>Day <span>02</span></h3>
                                        <h4>March 21, 2023</h4>
                                    </li>
                                    <li data-link="#section-services-tab">
                                        <h3>Day <span>03</span></h3>
                                        <h4>March 22, 2023</h4>
                                    </li>
                                    <li data-link="#section-services-tab">
                                        <h3>Day <span>04</span></h3>
                                        <h4>March 23, 2023</h4>
                                    </li>
                                    <li data-link="#section-services-tab">
                                        <h3>Day <span>05</span></h3>
                                        <h4>March 24, 2023</h4>
                                    </li>
                                </ul>
                                <div class="de_tab_content text-left">
                                    <div id="tab1" class="tab_single_content">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <ul class="list-boxed-s1">
                                                    <li>
                                                        <h3>DJ Neurogenic</h3><span></span>
                                                    </li>
                                                    <li>
                                                        <h3>Stylewort</h3><span></span>
                                                    </li>
                                                    <li>
                                                        <h3>Hotbox</h3><span></span>
                                                    </li>
                                                    <li>
                                                        <h3>Formulary</h3><span></span>
                                                    </li>
                                                    <li>
                                                        <h3>Exalbuminous</h3><span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab2" class="tab_single_content">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <ul class="list-boxed-s1">
                                                    <li>
                                                        <h3>DJ Fritz</h3><span></span>
                                                    </li>
                                                    <li>
                                                        <h3>Taxidermize</h3><span></span>
                                                    </li>
                                                    <li>
                                                        <h3>Chevelle</h3><span></span>
                                                    </li>
                                                    <li>
                                                        <h3>Lysimachus</h3><span></span>
                                                    </li>
                                                    <li>
                                                        <h3>Ovidae</h3><span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab3" class="tab_single_content">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <ul class="list-boxed-s1">
                                                    <li>
                                                        <h3>DJ Phenomenic</h3><span></span>
                                                    </li>
                                                    <li>
                                                        <h3>Rockward</h3><span></span>
                                                    </li>
                                                    <li>
                                                        <h3>Floater</h3><span></span>
                                                    </li>
                                                    <li>
                                                        <h3>Carabus</h3><span></span>
                                                    </li>
                                                    <li>
                                                        <h3>Windgalled</h3><span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab4" class="tab_single_content">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <ul class="list-boxed-s1">
                                                    <li>
                                                        <h3>DJ Neurogenic</h3><span></span>
                                                    </li>
                                                    <li>
                                                        <h3>Cassinese</h3><span></span>
                                                    </li>
                                                    <li>
                                                        <h3>Barnard</h3><span></span>
                                                    </li>
                                                    <li>
                                                        <h3>Aggrieved</h3><span></span>
                                                    </li>
                                                    <li>
                                                        <h3>Victuallership</h3><span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab5" class="tab_single_content">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <ul class="list-boxed-s1">
                                                    <li>
                                                        <h3>DJ Phenomenic</h3><span></span>
                                                    </li>
                                                    <li>
                                                        <h3>DJ Fritz</h3><span></span>
                                                    </li>
                                                    <li>
                                                        <h3>DJ Neurogenic</h3><span></span>
                                                    </li>
                                                    <li>
                                                        <h3>Emarcid</h3><span></span>
                                                    </li>
                                                    <li>
                                                        <h3>Stylewort</h3><span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="section-tickets">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <div class="title-box-outer wow flipInX">
                                    <div class="title-box-inner wow flipInX" data-wow-delay=".2s">
                                        <h2 class="wow fadeInUp" data-wow-delay=".2s"><span class="id-color">03</span> Tickets</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-single"></div>
                    </div>
                    <div class="row g-custom-x">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="pricing-s1 mb-sm-30 wow flipInY">
                                <div class="top text-center">
                                    <h2>{{$tiket[0]->name}}</h2>
                                </div>
                                <div class="mid text-center text-light" data-bgcolor="#5124ee">
                                    <p class="price">
                                        <span class="currency">Rp</span>
                                        <span class="m opt-1">{{number_format($tiket[0]->price,0,"",".")}}</span>
                                    </p>
                                </div>
                                <div class="bottom">
                                    @php
                                    echo $tiket[0]->desc;
                                    @endphp
                                </div>
                                <div class="action text-center">
                                    @if(Session::has('login'))
                                    <a href="{{url('/buy-ticket/'.$tiket[0]->id)}}" class="btn-main">Buy Ticket</a>
                                    @else
                                    <a href="{{url('/auth')}}" class="btn-main">Buy Ticket</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="pricing-s1 mb-sm-30 wow flipInY">
                                <div class="top text-center">
                                    <h2>{{$tiket[1]->name}}</h2>
                                </div>
                                <div class="mid text-center text-light bg-color">
                                    <p class="price">
                                        <span class="currency">Rp</span>
                                        <span class="m opt-1">{{number_format($tiket[1]->price,0,"",".")}}</span>
                                    </p>
                                </div>
                                <div class="bottom">
                                    @php
                                    echo $tiket[0]->desc;
                                    @endphp
                                </div>
                                <div class="action text-center">
                                    @if(Session::has('login'))
                                    <a href="{{url('/buy-ticket/'.$tiket[1]->id)}}" class="btn-main">Buy Ticket</a>
                                    @else
                                    <a href="{{url('/auth')}}" class="btn-main">Buy Ticket</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="pricing-s1 mb-sm-30 wow flipInY">
                                <div class="top text-center">
                                    <h2>{{$tiket[2]->name}}</h2>
                                </div>
                                <div class="mid text-center text-light" data-bgcolor="#dfa638">
                                    <p class="price">
                                        <span class="currency">Rp</span>
                                        <span class="m opt-1">{{number_format($tiket[2]->price,0,"",".")}}</span>
                                    </p>
                                </div>
                                <div class="bottom">
                                    @php
                                    echo $tiket[2]->desc;
                                    @endphp
                                </div>
                                <div class="action text-center">
                                    @if(Session::has('login'))
                                    <a href="{{url('/buy-ticket/'.$tiket[2]->id)}}" class="btn-main">Buy Ticket</a>
                                    @else
                                    <a href="{{url('/auth')}}" class="btn-main">Buy Ticket</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="section-gallery" data-bgimage="url({{asset('template')}}/img/background-1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="title-box-outer wow flipInX">
                                <div class="title-box-inner wow flipInX" data-wow-delay=".2s">
                                    <h2 class="wow fadeInUp" data-wow-delay=".2s"><span class="id-color">04</span> Gallery</h2>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-single"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div id="carouselExampleIndicators" class="carousel slide carousel-fade wow flipInY" data-mdb-ride="carousel">
                                <!-- Slides -->
                                <div class="carousel-inner mb-5">
                                    <div class="carousel-item active">
                                        <img src="{{asset('template')}}/img/gallery-1.jpg" class="d-block w-100" alt="" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('template')}}/img/gallery-2.jpg" class="d-block w-100" alt="" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('template')}}/img/gallery-3.jpg" class="d-block w-100" alt="" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('template')}}/img/gallery-4.jpg" class="d-block w-100" alt="" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('template')}}/img/gallery-5.jpg" class="d-block w-100" alt="" />
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('template')}}/img/gallery-6.jpg" class="d-block w-100" alt="" />
                                    </div>

                                </div>
                                <!-- Slides -->
                                <!-- Controls -->
                                <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                <!-- Controls -->
                                <!-- Thumbnails -->
                                <div class="carousel-indicators" style="margin-bottom: -20px;">
                                    <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="width: 100px;">
                                        <img class="d-block w-100 img-fluid" src="{{asset('template')}}/img/gallery-1.jpg" alt="" />
                                    </button>
                                    <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="1" aria-label="Slide 2" style="width: 100px;">
                                        <img class="d-block w-100 img-fluid" src="{{asset('template')}}/img/gallery-2.jpg" alt="" />
                                    </button>
                                    <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="2" aria-label="Slide 3" style="width: 100px;">
                                        <img class="d-block w-100 img-fluid" src="{{asset('template')}}/img/gallery-3.jpg" alt="" />
                                    </button>
                                    <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="3" aria-label="Slide 4" style="width: 100px;">
                                        <img class="d-block w-100 img-fluid" src="{{asset('template')}}/img/gallery-4.jpg" alt="" />
                                    </button>
                                    <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="4" aria-label="Slide 5" style="width: 100px;">
                                        <img class="d-block w-100 img-fluid" src="{{asset('template')}}/img/gallery-5.jpg" alt="" />
                                    </button>
                                    <button type="button" data-mdb-target="#carouselExampleIndicators" data-mdb-slide-to="5" aria-label="Slide 6" style="width: 100px;">
                                        <img class="d-block w-100 img-fluid" src="{{asset('template')}}/img/gallery-6.jpg" alt="" />
                                    </button>
                                </div>
                                <!-- Thumbnails -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <div class="title-box-outer wow flipInX">
                                    <div class="title-box-inner wow flipInX" data-wow-delay=".2s">
                                        <h2 class="wow fadeInUp" data-wow-delay=".2s"><span class="id-color">05</span> Sponsored By:</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-single"></div>
                    </div>
                    <div class="row g-custom-x">
                        <div class="col-lg-2 col-md-4 col-6 mb-sm-30">
                            <img src="{{asset('template')}}/img/sponsor-logo-1.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 mb-sm-30">
                            <img src="{{asset('template')}}/img/sponsor-logo-2.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 mb-sm-30">
                            <img src="{{asset('template')}}/img/sponsor-logo-3.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 mb-sm-30">
                            <img src="{{asset('template')}}/img/sponsor-logo-4.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 mb-sm-30">
                            <img src="{{asset('template')}}/img/sponsor-logo-5.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 mb-sm-30">
                            <img src="{{asset('template')}}/img/sponsor-logo-6.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </section>
@endsection


@section('js')

@endsection


