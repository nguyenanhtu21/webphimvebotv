<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Genre;
use Illuminate\Pagination\Paginator;

class MovieController extends Controller
{
    public function getMovies(){
         $movies = DB::table('movies')
        ->join('genres', 'movies.genre_id', '=', 'genres.id')
        ->select('movies.*','genres.genre_name')->paginate(5);
        return view('backend.movies',['movies'=>$movies]);
    }

    public function getAddMovie(){
        $genres = Genre::all();
        return view('backend.addmovie',['genres'=>$genres]);
    }

    public function postMovie(Request $request){
        $movie = new Movie;

        $movie->title = $request->title;
        $movie->genre_id = $request->genre;
        $movie->year = $request->year;
        $movie->decription = strip_tags($request->decription);
        $movie->rating = $request->rating;
        $movie->duration = $request->duration;
        $movie->poster_image = $request->poster_image;
        $movie->director = $request->director;
        $movie->country = $request->country;

        $movie->save();
        session()->flash('success', 'Thêm phim thành công!');
        return redirect('/admin/movie');
    }

    public function deleteMovie($id){
        Movie::destroy($id);
        session()->flash('success', 'Đã xóa một bộ phim.');
        return back();
    }
}
