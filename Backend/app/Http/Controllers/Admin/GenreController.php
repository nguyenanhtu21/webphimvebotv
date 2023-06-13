<?php

namespace App\Http\Controllers\Admin;
use App\Models\Genre;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function getGenre(){
        $genres = DB::table('genres')->paginate(5);
        return view('backend.genre',['genres'=>$genres]);
    }

    public function postGenre(Request $request){
        $genre = new Genre;
        $genre->genre_name = $request->genre;
        $genre->save();
        session()->flash('success', 'Thêm thể loại thành công!');
        return redirect()->back();
    }

    public function deleteGenre($id){
        Genre::destroy($id);
        session()->flash('success', 'Đã xóa một thể loại');
        return back();
    }

    public function getEditGenre($id){
        $genre = Genre::find($id);
        return view('backend.editgenre',['genre'=>$genre]);
    }

    public function postEditGenre(Request $request, $id){
        $genre = Genre::find($id);
        $genre->genre_name = $request->genre;

        $genre->save();
        return redirect('admin/genre');

    }

}
