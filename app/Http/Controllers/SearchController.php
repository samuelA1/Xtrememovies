<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()

    {

        return view('search');

    }


    public function search(Request $request)

    {

        if ($request->ajax()) {

            $output = "";

            $movies = Movie::where('title', 'LIKE', '%' . $request->search . "%")->get();

            if ($movies) {

                foreach ($movies as $key => $movie) {

                    $output .=
                        '<div class="mb-5">' .
                          '<div class="card">' .
                             '<div class="card-body">' .


                                '<h5 class="card-title"> ' . $movie->title . '</h5>' .

                                '<a class="btn btn-danger" href="' . 'showtime/' . $movie->slug . '"' . '>' . 'Get Ticket' . '</a>' .
                             '</div>' .
                          '</div>' .
                        '</div>';


                }


                return Response($output);


            }


        }

    }
}