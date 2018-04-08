@extends('layouts.skeletal')
@section('info')
    <div style="width: 100%; height: 50px; background-color: black; color: white; text-align: center; font-weight: bold; font-size: 20px; letter-spacing: 5px;">Select Seats
        <button style="font-size: 50px; color: white; opacity: 1;" type="button" class="close float-left" aria-label="Close" data-toggle="modal" data-target="#exampleModal">
            <span aria-hidden="true">&times;</span>
        </button>
        <a  style="color: white" class="float-left" href="{{url('/')}}">Home</a>
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
                    <div class="screen">SCREEN</div>
                    <div id="messagePanel" class="messagePanel"></div>
                </div>

                {{--Legend--}}
                <div style="width: 100%" class="text-center">
                    <span class="legend"></span><span class="legend-text">Available</span>
                    <span style="background-color: red" class="legend"></span><span class="legend-text">Selected</span>
                </div>
            </div>
        </div>
    </section>

    <div style="width: 100%; height: 75px; background-color: black; color: white; font-weight: bold; font-size: 20px;">
        <div class="offset-md-9">
            <span style="font-size: 15px;" class="seats-selected"></span>
            <a  class="btn btn-danger disabled continue" role="button" aria-disabled="true" href="">Continue</a>
        </div>
    </div>

    @include('includes.modal')

    <script src="{{asset('js/jquery.min.js')}}"></script>

    {{--CREATING SEATS and SEAT COUNT--}}

    <script type="text/javascript">

        window.onload = createSeating('A', 'B', 'C', 'D', 'E', 'F');

        function createSeating(letter1 , letter2, letter3, letter4, letter5, letter6){
             var seatingValue = [];
                for (var j=1; j<17; j++) {
                    var seatingStyle1 = "<a role='button' class='seat btn btn-outline-primary layout__seat'>" + letter1 + [j] + "</a>";
                    seatingValue.push(seatingStyle1);
                }
                for (var j = 1; j < 17; j++) {
                    var seatingStyle2 = "<a role='button' class='seat btn btn-outline-primary layout__seat'>" + letter2 + [j] + "</a>";
                    seatingValue.push(seatingStyle2);
                }

                for (var j = 1; j < 10; j++) {
                    var seatingStyle3 = "<a role='button' class='seat btn btn-outline-primary layout__seat ml-5'>" +
                        "<span  class='fa-stack'>" +
                        "<i class='fa fa-wheelchair fa-stack-2x'></i>" +
                        "</span>" +
                        "</a>";
                    seatingValue.push(seatingStyle3);
                }

                for (var j = 1; j < 17; j++) {
                    var seatingStyle3 = "<a role='button' class='seat btn btn-outline-primary layout__seat'>" + letter3 + [j] + "</a>";
                    seatingValue.push(seatingStyle3);
                }

                for (var j = 1; j < 17; j++) {
                    var seatingStyle4 = "<a role='button' class='seat btn btn-outline-primary layout__seat'>" + letter4 + [j] + "</a>";
                    seatingValue.push(seatingStyle4);
                }
                for (var j = 1; j < 17; j++) {
                    var seatingStyle5 = "<a role='button' class='seat btn btn-outline-primary layout__seat'>" + letter5 + [j] + "</a>";
                    seatingValue.push(seatingStyle5);
                }
                for (var j = 1; j < 17; j++) {
                    var seatingStyle6 = "<a role='button' class='seat btn btn-outline-primary layout__seat'>" + letter6 + [j] + "</a>";
                    seatingValue.push(seatingStyle6);
                }


            $('#messagePanel').html(seatingValue);

            $(function(){
                var selected = 0;
                $('.seat').on('click',function(){

                    $('.continue').removeClass('disabled');

                    if($(this).hasClass( "selected" )){
                        $( this ).removeClass( "selected" );
                        selected--;
                    }else{
                        $( this ).addClass( "selected" );
                        selected++;
                    }
                    $('.seats-selected').html(selected + ' SEAT(S) SELECTED');
                    if (selected === 0) {
                        $('.continue').addClass('disabled');
                    }

                    var seats = selected;
                    var url = "{{url('ticket/'.$movie->slug .'/'.$time->time.'/'.$theatre->theatre)}}" + '/' + seats +'/tickets';
                    $('.continue').attr("href", url);
                });





                $('.seat').mouseenter(function(){
                    $( this ).addClass( "hovering" );

                    $('.seat').mouseleave(function(){
                        $( this ).removeClass( "hovering" );

                    });
                });
            });
        };

    </script>

















