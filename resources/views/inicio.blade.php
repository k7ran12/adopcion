@extends('layouts.template')
@section('content')
   <Section class="minsection">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide cover-background" style="background-image:url({{ @Vite::asset('resources/images/b.png') }})">
                    <div class="po-ab-se">
                        <div class="container">
                            <div class="content-slider">
                                <h2>Welcome to<br><span> DogMilo</span> Pets</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing <br>and typesetting industry.</p>
                                <button type="submit">Get Started</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide cover-background" style="background-image:url({{ @Vite::asset('resources/images/b.png') }})">
                    <div class="po-ab-se">
                        <div class="container">
                            <div class="content-slider">
                                <h2>Welcome to<br><span> DogMilo</span> Pets</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing <br>and typesetting industry.</p>
                                <button type="submit">Get Started</button><img src="images/play.png" alt="" data-toggle="modal" data-target="#myModal">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide cover-background" style="background-image:url({{ @Vite::asset('resources/images/b.png') }})">
                    <div class="po-ab-se">
                        <div class="container">
                            <div class="content-slider">
                                <h2>Welcome to<br><span> DogMilo</span> Pets</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing <br>and typesetting industry.</p>
                                <button type="submit">Get Started</button><img src="images/play.png" alt="" data-toggle="modal" data-target="#myModal">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </Section>
    <section class="pets">
        <div class="d-img">
            <img src="{{ @Vite::asset('resources/images/dog-logo.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="pet">
                        <img src="{{ @Vite::asset('resources/images/about.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="pet1">
                        <h6><img src="{{ @Vite::asset('resources/images/dog-icon.png') }}" alt="">About Us</h6>
                        <h2>Welcome DogMilo Pets</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="dog-safety">
        <div class="container-full">
            <div class="row">
                <div class="col-sm-6">
                    <div class="safety-first">
                        <img src="{{ @Vite::asset('resources/images/why.png') }}" alt="">
                    </div>
                </div>
                <div class="col-sm-6 pr-90">
                    <div class="dogsafety">
                        <h6><img src="{{ @Vite::asset('resources/images/dog-icon.png') }}" alt="">Choose Us</h6>
                        <h2>Why Choose Us?</h2>
                    </div>
                    <div class="dog-s">
                        <img src="{{ @Vite::asset('resources/images/w-3.png') }}" alt="">
                        <div class="dogs-s">
                            <h3>Safety First </h3>
                            <p>It is a long established fact that a reader will be distructed by the readable content of a page when looking at its layout.</p>
                        </div>

                    </div>
                    <div class="dog-s">
                        <img src="{{ @Vite::asset('resources/images/w-2.png') }}" alt="">
                        <div class="dogs-s">
                            <h3>Play Yards </h3>
                            <p>It is a long established fact that a reader will be distructed by the readable content of a page when looking at its layout.</p>
                        </div>

                    </div>
                    <div class="dog-s">
                        <img src="{{ @Vite::asset('resources/images/w-1.png') }}" alt="">
                        <div class="dogs-s">
                            <h3>Monitor Your Pets </h3>
                            <p>It is a long established fact that a reader will be distructed by the readable content of a page when looking at its layout.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>
    <section class="rating">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="demoslide3" class="owl-carousel owl-theme">
                        @foreach($noticias as $noticia)
                        <div class="item">
                            <div class="review-rating">
                                <div class="rating1 p-3">
                                    <center><h4>{{ $noticia->titulo }}</h4></center>
                                    <center><h4>{{ $noticia->subtitulo }}</h4></center>
                                    <p>{{ $noticia->contenido }}</p>
                                </div>
                                <div class="right">
                                    <img style="width: 100% !important;height: 400px !important;max-height: 300px;" src="{{ @Vite::asset('storage/app/public/'.$noticia->imagen) }}" alt="">

                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
