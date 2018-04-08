@extends('layouts.skeletal')
@section('info')
    <div style="width: 100%; height: 50px; background-color: black; color: white; text-align: center; font-weight: bold; font-size: 20px; letter-spacing: 5px;">Search
        <a  style="color: white" class="float-left" href="{{url('/')}}">Home</a>
    </div>
    <section id="about" >
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <div id="messagePanel" class="messagePanel">
                        <div>
                            <h1 class="text-center">Search</h1>
                            <br>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="search" name="search" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Search by title">
                            </div>
                            <br>
                        </div>
                        <div class="search col-lg-8 col-md-10 mx-auto"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="footer-top">
            <div class="container footer">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>Xtreme Movie Theatres</h3>
                        <p>Xtreme Movie Theatres is a web app I (Samuel Essim) created  to exercise my web development skills.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="{{url('movies')}}">See a Movie</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="{{url('soon')}}">Coming Soon</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Food & Drinks</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Gift Cards</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Me</h4>
                        <div class="social-links">
                            <a href="https://twitter.com/essim_b" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/sam_essim/" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/in/samuel-essim-49518314b/" class="linkedin"><i class="fa fa-linkedin"></i></a>
                            <a href="https://github.com/samuelA1" class="github"><i class="fa fa-github"></i></a>
                            <a href="mailto:sessim37@gmail.com" class="at"><i class="fa fa-at"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>About Me</h4>
                        <p>My name is Samuel Essim. I’m a freelance Full Stack developer. I build beautiful and usable web Applications using best practices and the latest W3C web standards. I specialize in both front-end and back-end development, with great user experience using modern tools in the build process. I tasked myself to find a passion and that is how i got into Web App Development. My goal is to work fully as a Full Stack developer in a team of amazing people who share the same passion, and work daily to fulfil it . I am ready to start working with you.</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>Xtreme Movie Theatres</strong>. All Rights Reserved
            </div>
            <div class="credits mt-3">
                Made by Samuel Essim
            </div>
        </div>
    </footer>

    <script src="{{asset('js/jquery.min.js')}}"></script>

    <script type="text/javascript">

        $('#search').on('keyup',function(){

            $value=$(this).val();

            $.ajax({

                type : 'get',

                url : '{{URL::to('searched')}}',

                data:{'search':$value},

                success:function(data){

                    $('.search').html(data);

                }

            });



        })

    </script>

    <script type="text/javascript">

        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

    </script>
