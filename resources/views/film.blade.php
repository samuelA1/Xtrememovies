@extends('layouts.main')
    @section('intro')
        <section id="intro">
            <div class="intro-container">
                <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                    <ol class="carousel-indicators"></ol>

                    <div class="carousel-inner" role="listbox">

                        <div class="carousel-item active">
                            <div class="carousel-background"><img src="{{Voyager::image($movie->image)}}" alt=""></div>
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2>{{$movie->title}}</h2>
                                    <a href="{{url('showtime/'. $movie->slug)}}" class="btn-get-started scrollto">Get Tickets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #intro -->

        <section id="about">
            <div class="container">


                <div class="row about-cols">

                    <div class="col-md-3 wow wow-image fadeInUp">
                        <p><span>{{$movie->length}}</span> | <span>{{$movie->viewer_description}}</span></p>
                        <h2>IMDB Rating</h2>
                        <h2><strong>{{$movie->rating}}/10</strong></h2>
                    </div>

                    <div class="col-lg-4 col-md-9 wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="title">Overview</h2>
                        <h2 >{!! $movie->overview !!}</h2>
                    </div>

                </div>

            </div>
        </section>

    @stop