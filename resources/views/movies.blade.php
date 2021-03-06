
    @extends('layouts.main')
    <section id="about">
        <div class="container">

            <header class="section-header mt-5">
                <h3>Movies</h3>
            </header>

            <div class="row about-cols">

                @foreach($movies as $movie)
                    <div class="clients-img col-3">
                        <a href="{{url('movie/'. $movie->slug)}}"><img style="width: 250px; height: 375px" src="{{Voyager::image($movie->image)}}" alt="{{$movie->title}}"></a>
                        <h4>{{$movie->title}}</h4>
                        <p><span>{{$movie->length}} | <span>{{$movie->viewer_description}}</span></span></p>
                        <span>Released {{$movie->release_date}}</span>
                        <br>
                        <a href="{{url('showtime/'. $movie->slug)}}" class="btn btn-danger btn-sm mb-5">Get Tickets</a>
                    </div>
                @endforeach

            </div>

        </div>
    </section><!-- #about -->

