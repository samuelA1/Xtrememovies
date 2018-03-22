<section id="clients" class="wow fadeInUp">
        <div class="container">
            <header class="section-header">
                <h3>Movies at XMT</h3>
            </header>
            <div class="owl-carousel clients-carousel">
                @foreach($movies as $movie)
                    <div class="clients-img">
                        <a href="{{url('movie/'. $movie->slug)}}"><img src="{{Voyager::image($movie->image)}}" alt=""></a>
                        <h4>{{$movie->title}}</h4>
                        <p><span>{{$movie->length}} | <span>{{$movie->viewer_description}}</span></span></p>
                        <span>Released {{$movie->release_date}}</span>
                        <br>
                        <a href="{{url('showtime/'. $movie->slug)}}" class="btn btn-danger btn-sm">Get Tickets</a>
                    </div>
                @endforeach
                    <div class="clients-img">

                        <h4>Not Finding What You're Looking For?</h4>
                        <a href="{{url('movies')}}" class="btn btn-danger btn-sm">See All Movies</a>
                        <br>
                        <br>
                        <a href="#" class="btn btn-danger btn-sm">Coming Soon</a>
                        <br>
                        <br>
                        <a href="#" class="btn btn-danger btn-sm">Search</a>
                    </div>
            </div>


    </div>
</section>