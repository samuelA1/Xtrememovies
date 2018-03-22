@extends('layouts.skeletal')
    @section('info')
        <div style="width: 100%; height: 50px; background-color: black; color: white; text-align: center; font-weight: bold; font-size: 30px; letter-spacing: 5px;">Showtime
            <button style="font-size: 50px; color: white; opacity: 1;" type="button" class="close float-left" aria-label="Close" data-toggle="modal" data-target="#exampleModal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <section id="about">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <img style="border-radius: 100%; width:10%;" src="{{Voyager::image($movie->image)}}" alt="" class="img-fluid">
                        <h2>{{$movie->title}}</h2>
                        <p><span>{{$movie->length}}</span> | <span>{{$movie->viewer_description}}</span></p>
                        <p><strong>Today:  </strong>{{$carbon->toFormattedDateString()}}</p>
                    </div>
                    <div class="row">
                        @foreach($theatres as $theatre)
                            <div class="col-12 mb-5">
                                <h2>{{$theatre->theatre}}</h2>
                                @foreach($times as $time)
                                    <a href="{{url('seat/'.$movie->slug .'/'.$time->time.'/'.$theatre->theatre)}}" role="button" class="btn btn-outline-primary">{{$time->time}}</a>
                                @endforeach
                            </div>
                        @endforeach
                    </div>

                    </div>
                </div>

            </div>
        </section>

       @include('includes.modal')
