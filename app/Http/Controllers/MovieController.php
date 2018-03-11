<?php

namespace App\Http\Controllers;
use App\Carousel;
use App\Movie;
use App\Upcoming;
use Illuminate\Http\Request;




use GuzzleHttp\Client;
use TCG\Voyager\Models\Post;


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
        $upcomings = Upcoming::whereId(1)->get();
        $upcomings2 = Upcoming::whereId(2)->get();
        //

//        $client = new Client();
//        $api_response = $client->get('https://api.themoviedb.org/3/discover/movie?api_key=9ecdf3e232825fc83834862215b61a5d&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1');
//        $response = json_decode($api_response->getBody());
//        $movie1 = ($response->results);
//
//        $client = new Client();
//        $api_response = $client->get('https://api.themoviedb.org/3/discover/movie?api_key=9ecdf3e232825fc83834862215b61a5d&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=2');
//        $response = json_decode($api_response->getBody());
//        $movie2= ($response->results);



        return view('index', compact('movies', 'carousels', 'upcomings', 'upcomings2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
