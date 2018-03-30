<section id="facts"  class="wow fadeIn">
    <div class="container">

        <header class="section-header">
            <h3>Upcoming Movies</h3>
        </header>

        <div class="row about-cols">
            @foreach($upcomings as $upcoming)
            <div class="col-md-6 wow wow-image fadeInUp">
                <img src="{{Voyager::image($upcoming->image)}}" alt="" class="img-fluid">
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="title">{{$upcoming->title}}</h2>
                <p>{{$upcoming->body}}</p>
                <a href="{{url('showtime/'. $upcoming->slug)}}" class="btn btn-danger">Get Tickets</a>
            </div>
    @endforeach
        </div>



    </div>
</section><!-- #facts -->

<section id="facts"  class="wow fadeIn">
    <div class="container">

        <div class="row about-cols">
            @foreach($upcomings2 as $upcoming2)
            <div class="col-lg-4 col-md-6 wow wow-image fadeInUp" data-wow-delay="0.1s">
                <h2 class="title">{{$upcoming2->title}}</h2>
                <p>{{$upcoming2->body}}</p>
                <a href="{{url('showtime/'. $upcoming2->slug)}}" class="btn btn-danger">Get Tickets</a>
            </div>

            <div class="col-md-6 wow  fadeInUp">
                <img src="{{Voyager::image($upcoming2->image)}}" alt="" class="img-fluid">
            </div>
            @endforeach
        </div>



    </div>
</section><!-- #facts -->