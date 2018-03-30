@extends('layouts.skeletal')
@section('info')
    <div style="width: 100%; height: 50px; background-color: black; color: white; text-align: center; font-weight: bold; font-size: 20px; letter-spacing: 5px;">Select Ticket Type
        <button style="font-size: 50px; color: white; opacity: 1;" type="button" class="close float-left" aria-label="Close" data-toggle="modal" data-target="#exampleModal">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <section id="about">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                        <div>
                            <h2>{{$movie->title}}</h2>
                            <p style="text-transform: uppercase">
                                <span>{{$theatre->theatre}}</span>|
                                <span>{{$carbon->toFormattedDateString()}}</span>|
                                <span>{{$time->time}}</span>|
                                <span>RESERVED SEATING</span>
                            </p>
                        </div>
                    <div id="ticketPanel" class="">
                        <svg focusable="false" xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 16 16">
                            <path d="m 13.59,7.9 c 0,-0.1325483 -0.107452,-0.24 -0.24,-0.24 H 7.59 L 6.73,5.78 C 6.21,4.62 6.11,4.38 6,4.06 L 5.82,3.67 C 5.8137,3.5634265 5.8137,3.4565735 5.82,3.35 5.829367,3.0104289 5.7785844,2.6718784 5.67,2.35 5.5891722,2.141156 5.4956648,1.9374434 5.39,1.74 5.2953693,1.4728663 5.0918365,1.2584299 4.83,1.15 4.5554493,1.0321316 4.2445507,1.0321316 3.97,1.15 L 2.56,1.76 C 2.3276489,1.848154 2.1427376,2.0294399 2.05,2.26 1.976463,2.4463405 1.976463,2.6536595 2.05,2.84 L 4,8 v 6.06 c 0,0.480488 0.3895123,0.87 0.87,0.87 h 7.81 c 0.480488,0 0.87,-0.389512 0.87,-0.87 0.06113,-7.6472165 -0.01953,1.085292 0.04,-6.16 z M 13.11,9.92 H 4.52 V 8.14 h 8.6 v 1.8 z M 4.42,7.67 4.2,7.09 6.39,6.18 7.07,7.67 Z M 2.5,2.67 C 2.474,2.598971 2.474,2.5210287 2.5,2.45 2.5468478,2.3449006 2.6330031,2.2623351 2.74,2.22 L 4.15,1.61 c 0.1537312,-0.063341 0.3262688,-0.063341 0.48,0 0.1434627,0.065969 0.2524072,0.1894397 0.3,0.34 0.098497,0.1843782 0.1853337,0.3747518 0.26,0.57 0.077426,0.2729736 0.111177,0.5564783 0.1,0.84 -0.00953,0.161654 0.00736,0.3237801 0.05,0.48 l 0.2,0.4 C 5.66,4.55 5.76,4.78 6.2,5.75 L 4,6.64 2.48,2.64 Z M 12.72,14.46 H 4.91 c -0.2153911,0 -0.39,-0.174609 -0.39,-0.39 v -3.65 h 8.6 v 3.65 c 7.2e-5,0.219358 -0.180715,0.395625 -0.4,0.39 z m 3.89,-2.17 c -9.74,2.473333 -4.87,1.236667 0,0 z"></path>
                        </svg>
                        <p class="font-weight-bold"><span class="sit font-weight-bold"></span> OF {{$number}} SEATS SELECTED</p>
                        <p  class="font-italic">Please select attendees</p>
                        <input type="hidden" value="{{$number}}">

                        {{--Select Buttons--}}
                        <div>
                            <button class="w3-button w3-xlarge w3-circle w3-black float-left subtract subtract-adult">-</button>
                            <button class="w3-button w3-xlarge w3-circle w3-black float-right add add-adult">+</button>
                        </div>
                        <p class="font-weight-bold seat-size">Adult</p>
                        <p class="font-weight-bold">$15.99</p>
                        <div>
                            <button class="w3-button w3-xlarge w3-circle w3-black float-left subtract subtract-child">-</button>
                            <button class="w3-button w3-xlarge w3-circle w3-black float-right add add-child">+</button>
                        </div>
                        <p class="font-weight-bold seat-size">Child</p>
                        <p class="font-italic">Age 2-12</p>
                        <p class="font-weight-bold">$13.00</p>
                        <div>
                            <button class="w3-button w3-xlarge w3-circle w3-black float-left subtract subtract-senior">-</button>
                            <button class="w3-button w3-xlarge w3-circle w3-black float-right add add-senior">+</button>
                        </div>
                        <p class="font-weight-bold seat-size">Senior</p>
                        <p class="font-italic">Age 60+</p>
                        <p class="font-weight-bold">$14.49</p>
                        <p class="font-italic">For orders of 30 or more, or orders containing more than 10 of each ticket type, you will be given a very huge discount</p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div style="width: 100%; height: 70px; background-color: black; color: white; font-weight: bold; font-size: 20px;">
        <div class="offset-md-9">
            <span style="font-size: 15px;" class="tickets-selected"></span>
            <a  class="btn btn-danger disabled continue" role="button" aria-disabled="true" href="#">Continue</a>
        </div>
    </div>

    @include('includes.modal')

    <script src="{{asset('js/jquery.min.js')}}"></script>

    {{--SELECTING SEATS--}}

    <script type="text/javascript">
        window.onload = disable;

            function disable () {
              $('.subtract'). attr('disabled', 'disabled');
            };

            $(function(){
                var selected = 0;
                var adult = 0;
                var child = 0;
                var senior = 0;
                $('button').on('click',function(){

                    $('.continue').removeClass('disabled');

                    if($(this).hasClass( "add" )){
                        selected++;
                        $('.subtract').attr('disabled', false)
                    }else{
                        selected--;
                    }
                    $('.tickets-selected').html(selected + ' TICKET(S) SELECTED');

                    $('.sit').html(selected);

                    if (selected === 0) {
                        $('.continue').addClass('disabled');
                    }
                    if (selected === 0) {
                        disable();
                    }

                    //Amount category selected
                    if ($(this).hasClass('add-adult')) {
                        adult++;
                    } else if ($(this).hasClass('subtract-adult')) {
                        adult--;
                    } else if ($(this).hasClass('add-child')) {
                        child++;
                    } else if ($(this).hasClass('subtract-child')) {
                        child--;
                    } else if ($(this).hasClass('add-senior')) {
                        senior++;
                    } else {
                        senior--;
                    }

                    // Disable button based on category selected
                    if (adult === 0) {
                        $('.subtract-adult').attr('disabled', true)
                    } else {
                        $('.subtract-adult').attr('disabled', false)
                    }
                    if (child === 0) {
                        $('.subtract-child').attr('disabled', true)
                    } else {
                        $('.subtract-child').attr('disabled', false)
                    }
                    if (senior === 0) {
                        $('.subtract-senior').attr('disabled', true)
                    } else {
                        $('.subtract-senior').attr('disabled', false)
                    }


                    var ticket = $('input').val();
                    var tickets = parseInt(ticket);
                    if (selected === tickets) {
                        $('.add').attr('disabled', true);
                    } else {
                        $('.add').attr('disabled', false);
                    }

                    var url = "{{url('payment/'.$movie->slug .'/'.$time->time.'/'.$theatre->theatre)}}" + '/' + adult + '/' + child + '/' + senior +'/cat';
                    $('.continue').attr("href", url);

                });

            });

    </script>