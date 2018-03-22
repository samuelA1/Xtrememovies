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
                    <div class="screen">Screen</div>
                    <div id="messagePanel" class="messagePanel"></div>
                </div>
            </div>
        </div>

        </div>
    </section>

    @include('includes.modal')

    <script src="{{asset('js/jquery.min.js')}}"></script>

    {{--CREATING SEATS--}}

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
                $('.seat').on('click',function(){
                    if($(this).hasClass( "selected" )){
                        $( this ).removeClass( "selected" );
                    }else{
                        $( this ).addClass( "selected" );
                    }
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

















