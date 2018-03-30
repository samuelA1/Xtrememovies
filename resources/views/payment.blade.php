@extends('layouts.skeletal')
@section('info')
    <div style="width: 100%; height: 50px; background-color: black; color: white; text-align: center; font-weight: bold; font-size: 20px; letter-spacing: 5px;">Confirm Purchase
        <button style="font-size: 50px; color: white; opacity: 1;" type="button" class="close float-left" aria-label="Close" data-toggle="modal" data-target="#exampleModal">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <section id="about">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <div>
                        <img class="" style="border-radius: 100%; width: 8%;" src="{{Voyager::image($movie->image)}}" alt="">
                        <div>
                            <h2>{{$movie->title}}</h2>
                            <p style="text-transform: uppercase">
                                <span>{{$theatre->theatre}}</span>|
                                <span>{{$carbon->toFormattedDateString()}}</span>|
                                <span>{{$time->time}}</span>|
                                <span>RESERVED SEATING</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            {{--Billing--}}
            <div class="row text-center">
                <div id="messagePanel" class="col">
                    <form action="">
                        <div>
                            <h3 class="font-weight-bold">Contact Info</h3>
                            <label for="email" class="font-italic">Enter your email for receipt and confirmation</label>
                            <input type="email" id="email" name="email" placeholder="Email" required>
                        </div>
                        <hr>

                        <div>
                            <h3 class="font-weight-bold">Payment Info</h3>
                            <div class="icon-container">
                                <i class="fa fa-cc-visa " style="color:navy;"></i>
                                <i class="fa fa-cc-amex " style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard " style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
                            <label for="ccnum">CREDIT CARD</label>
                            <input style="width: 60%;" type="text" id="ccnum" name="cardnumber" placeholder="Credit Card Number">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <input type="text" id="expmonth" name="expmonth" placeholder="September">
                                </div>
                                <div class="col">
                                    <input type="text" id="expyear" name="expyear" placeholder="2018">
                                </div>
                                <div class="col">
                                    <input type="text" id="zip" name="zip" placeholder="10001">
                                </div>
                                <div class="col">
                                    <input type="text" id="cvv" name="cvv" placeholder="352">
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                </div>
                <div id="messagePanel" class="col"></div>
            </div>
        </div>
    </section>

    <div style="width: 100%; height: 70px; background-color: black; color: white; font-weight: bold; font-size: 20px;">
        <div class="offset-md-9">
            <span style="font-size: 15px;" class="seats-selected"></span>
            <a  class="btn btn-danger disabled continue" role="button" aria-disabled="true" href="">Purchase</a>
        </div>
    </div>

    @include('includes.modal')