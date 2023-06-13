<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $movies = DB::table('movies')
        ->join('genres', 'movies.genre_id', '=', 'genres.id')
        ->select('movies.*','genres.*')->get();
        $genres = Genre::all();
        return view('frontend.index',['movies'=>$movies,'genres'=>$genres]);


    }

    public function getAllGenre(){
        $genres = Movie::all();
        return view('frontend.index',['genres'=>$genres]);
    }
}
