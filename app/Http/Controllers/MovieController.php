<?php

namespace App\Http\Controllers;
use App\Carousel;
use App\Movie;
use App\Theatre;
use App\Time;
use App\Upcoming;
use Carbon\Carbon;
use Illuminate\Http\Request;




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
        $theatres = Theatre::all();
        $upcomings = Upcoming::whereId(1)->get();
        $upcomings2 = Upcoming::whereId(2)->get();

        return view('index', compact('movies', 'carousels', 'upcomings', 'upcomings2', 'theatres'));
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

        return view('seats', compact('movie', 'time', 'theatre'));
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



}
