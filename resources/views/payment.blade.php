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
                    <strong>All fields are required</strong>
                    <br>
                    <form>
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
                            <input style="width: 60%;" type="text" id="ccnum" name="cardnumber" placeholder="Credit Card Number" required>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <select aria-label="Click to expand this List" class="Styled-Select-Dropdown" required>
                                        <option selected="" disabled="" value="">Exp. Month</option>
                                        <option value="01" >01</option>
                                        <option value="02" >02</option>
                                        <option value="03" >03</option>
                                        <option value="04" >04</option>
                                        <option value="05" >05</option>
                                        <option value="06" >06</option>
                                        <option value="07" >07</option>
                                        <option value="08" >08</option>
                                        <option value="09" >09</option>
                                        <option value="10" >10</option>
                                        <option value="11" >11</option>
                                        <option value="12" >12</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select aria-label="Click to expand this List" class="Styled-Select-Dropdown" required>
                                        <option selected="" disabled="" value="" >Exp. Year</option>
                                        <option value="2018" >2018</option>
                                        <option value="2019" >2019</option>
                                        <option value="2020" >2020</option>
                                        <option value="2021" >2021</option>
                                        <option value="2022" >2022</option>
                                        <option value="2023" >2023</option>
                                        <option value="2024" >2024</option>
                                        <option value="2025" >2025</option>
                                        <option value="2026" >2026</option>
                                        <option value="2027" >2027</option>
                                        <option value="2028" >2028</option>
                                        <option value="2029" >2029</option>
                                        <option value="2030" >2030</option>
                                        <option value="2031" >2031</option>
                                        <option value="2032" >2032</option>
                                    </select>
                                </div>

                                <div class="col">
                                    <input type="text" id="zip" name="zip" placeholder="Zip" required>
                                </div>
                                <div class="col">
                                    <input type="text" id="cvv" name="cvv" placeholder="CVV" required>
                                </div>
                                <p class="font-italic">
                                    Sorry, no refunds provided after the displayed showtime. By clicking Purchase, I agree to the <strong>XMT Terms of Service</strong>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="messagePanel" class="col">
                    <table class="float-right">
                        <tr>
                            <th>TICKETS</th>
                            <th><a href="{{url('seat/'.$movie->slug .'/'.$time->time.'/'.$theatre->theatre)}}" class="font-weight-bold">Edit</a></th>
                        </tr>
                        @if($ad > 0)
                        <tr>
                            <td><strong>Adult Ticket({{$adult1}})</strong></td>
                            <td><strong>${{$ad}}</strong></td>
                        </tr>
                        @endif

                        @if($ch > 0)
                        <tr>
                            <td><strong>Child Ticket({{$child1}})</strong></td>
                            <td><strong>${{$ch}}</strong></td>
                        </tr>
                        @endif

                        @if($se > 0)
                        <tr>
                            <td><strong>Senior Ticket({{$senior1}})</strong></td>
                            <td><strong>${{$se}}</strong></td>
                        </tr>
                        @endif

                        <tr>
                            <td>Taxes</td>
                            <td>$3.10</td>
                        </tr>
                        <tr>
                            <th style="opacity: 1">TOTAL</th>
                            <th style="opacity: 1">${{$total}}</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <div style="width: 100%; height: 70px; background-color: black; color: white; font-weight: bold; font-size: 20px;">
        <div class="offset-md-9">
            <a href="{{url('success')}}" class="btn btn-danger  purchase" aria-disabled="true" role="button">Purchase</a>
        </div>
    </div>

    @include('includes.modal')
