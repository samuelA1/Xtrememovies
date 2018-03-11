<section id="clients" class="wow fadeInUp">
    <div class="container">

        <header class="section-header">
            <h3>Movies at XMT</h3>
        </header>
        <div class="owl-carousel clients-carousel">
            @foreach($movies as $movie)
                <div class="clients-img">
                    <img src="{{Voyager::image($movie->image)}}" alt="">
                    <h4>{{$movie->title}}</h4>
                    <p><span>{{$movie->length}} | <span>{{$movie->viewer_description}}</span></span></p>
                    <span>Released {{$movie->release_date}}</span>
                    <br>
                    <a href="#" class="btn btn-danger">Get Tickets</a>
                </div>
            @endforeach
        </div>


    </div>
</section>