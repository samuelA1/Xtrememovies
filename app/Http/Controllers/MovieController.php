<?php

namespace App\Http\Controllers;
use App\Carousel;
use App\Food;
use App\Movie;
use App\Theatre;
use App\Time;
use App\Upcoming;
use Carbon\Carbon;


class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $movies = Movie::all();
        $carousels = Carousel::all();
        $foods = Food::all();
        $theatres = Theatre::all();
        $upcomings = Upcoming::whereId(1)->get();
        $upcomings2 = Upcoming::whereId(2)->get();

        return view('index', compact('movies', 'carousels', 'upcomings', 'upcomings2', 'theatres', 'foods'));
    }

    public function showtimes($slug)
    {
        $movie = Movie::where('slug', '=', $slug)->firstOrFail();
        $theatres = Theatre::all();
        $times = Time::all();
        $carbon = Carbon::today();
        return view('showtime', compact('movie', 'theatres', 'times', 'carbon'));

    }

    public function seats ($slug, $time, $theatre) {
        $movie = Movie::where('slug', '=', $slug)->firstOrFail();
        $time = Time::where('time', '=', $time)->firstOrFail();
        $theatre = Theatre::where('theatre', '=', $theatre)->firstOrFail();;
        $carbon = Carbon::today();

        return view('seats', compact('movie', 'time', 'theatre', 'carbon'));
    }

    public function films($slug)
    {
            $movie = Movie::where('slug', '=', $slug)->firstOrFail();
            return view('film', compact('movie'));
    }

    public function movies()
    {
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }

    public function tickets ($slug, $time, $theatre, $ticket) {
        $movie = Movie::where('slug', '=', $slug)->firstOrFail();
        $time = Time::where('time', '=', $time)->firstOrFail();
        $theatre = Theatre::where('theatre', '=', $theatre)->firstOrFail();;
        $carbon = Carbon::today();
        $number = $ticket;

        return view('ticket', compact('movie', 'time', 'theatre', 'carbon', 'number'));
    }

    public function payments ($slug, $time, $theatre, $adult, $child, $senior) {
        $movie = Movie::where('slug', '=', $slug)->firstOrFail();
        $time = Time::where('time', '=', $time)->firstOrFail();
        $theatre = Theatre::where('theatre', '=', $theatre)->firstOrFail();;
        $carbon = Carbon::today();
        $ad = $adult * 15.99;
        $ch = $child * 13.00;
        $se = $senior * 14.49;

        return view('payment', compact('movie', 'time', 'theatre', 'carbon', 'ad', 'ch', 'se'));
    }






}
