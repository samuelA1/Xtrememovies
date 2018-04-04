<?php

namespace App\Http\Controllers;
use App\Carousel;
use App\Food;
use App\Movie;
use App\Soon;
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
        $sn = Soon::where('slug', $slug)->first();
        if ($sn) {
            $movie =  Soon::where('slug', '=', $slug)->firstOrFail();
        }else {
            $movie = Movie::where('slug', '=', $slug)->firstOrFail();
        }
        $theatres = Theatre::all();
        $times = Time::all();
        $carbon = Carbon::today();
        return view('showtime', compact('movie', 'theatres', 'times', 'carbon'));

    }

    public function seats ($slug, $time, $theatre) {
        $sn = Soon::where('slug', $slug)->first();
        if ($sn) {
            $movie =  Soon::where('slug', '=', $slug)->firstOrFail();
        }else {
            $movie = Movie::where('slug', '=', $slug)->firstOrFail();
        }
        $time = Time::where('time', '=', $time)->firstOrFail();
        $theatre = Theatre::where('theatre', '=', $theatre)->firstOrFail();;
        $carbon = Carbon::today();

        return view('seats', compact('movie', 'time', 'theatre', 'carbon'));
    }

    public function films($slug)
    {
        $sn = Soon::where('slug', $slug)->first();
        if ($sn) {
            $movie =  Soon::where('slug', '=', $slug)->firstOrFail();
        }else {
            $movie = Movie::where('slug', '=', $slug)->firstOrFail();
        }

            return view('film', compact('movie'));
    }

    public function movies()
    {
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }

    public function success()
    {
        return view('success');
    }

    public function card()
    {
        return view('card');
    }

    public function soon()
    {
        $movies = Soon::all();
        return view('soon', compact('movies'));
    }

    public function tickets ($slug, $time, $theatre, $ticket) {
        $sn = Soon::where('slug', $slug)->first();
        if ($sn) {
            $movie =  Soon::where('slug', '=', $slug)->firstOrFail();
        }else {
            $movie = Movie::where('slug', '=', $slug)->firstOrFail();
        }
        $time = Time::where('time', '=', $time)->firstOrFail();
        $theatre = Theatre::where('theatre', '=', $theatre)->firstOrFail();;
        $carbon = Carbon::today();
        $number = $ticket;

        return view('ticket', compact('movie', 'time', 'theatre', 'carbon', 'number'));
    }

    public function payments ($slug, $time, $theatre, $adult, $child, $senior) {
        $sn = Soon::where('slug', $slug)->first();
        if ($sn) {
            $movie =  Soon::where('slug', '=', $slug)->firstOrFail();
        }else {
            $movie = Movie::where('slug', '=', $slug)->firstOrFail();
        }
        $time = Time::where('time', '=', $time)->firstOrFail();
        $theatre = Theatre::where('theatre', '=', $theatre)->firstOrFail();;
        $carbon = Carbon::today();
        $adult1 = $adult;
        $child1 = $child;
        $senior1 = $senior;
        $ad = $adult * 15.99;
        $ch = $child * 13.00;
        $se = $senior * 14.49;
        $total = $ad + $ch + $se + 3.10;

        return view('payment', compact('movie', 'time', 'theatre', 'carbon', 'ad', 'ch', 'se', 'adult1', 'child1', 'senior1', 'total'));
    }






}
