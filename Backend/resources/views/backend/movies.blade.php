@extends('backend.master')
@section('title','Quản lí phim')
@section('heading')
<h3 class="">Quản lý phim</h3>
@endsection
@section('main')
@include('message.success')
<div class="row">
    <a href="/admin/movie/add" class="btn btn-info mb-2 col-sm-1">Thêm</a>
    <div class="col-7"></div>
    <form action="" class="form-search row col-4">
        <input type="text" class="col-8 form-control mr-2" placeholder="Nhập tên phim hoặc thể loại">
        <input type="submit" class="btn btn-info col-3 form-control" value="Tìm kiếm">
    </form>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Tiêu đề</th>
        <th scope="col">Thể loại</th>
        <th scope="col">Năm phát hành</th>
        <th scope="col">Quốc gia</th>
        <th scope="col">Xếp hạng</th>
        <th scope="col">Đạo diễn</th>
        <th scope="col">Thời lượng</th>
        <th scope="col">Mô tả</th>
        <th scope="col">Ảnh poster</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
    @if(!@empty($movies)&& $movies->count())
        @foreach ($movies as $movie)
        <tr>
            <td>{{$movie->title}}</td>
            <td>{{$movie->genre_name}}</td>
            <td>{{$movie->year}}</td>
            <td>{{$movie->country}}</td>
            <td>{{$movie->rating}}</td>
            <td>{{$movie->director}}</td>
            <td>{{$movie->duration}} phút</td>
            <td class="col-sm-2">{{$subDecription=substr($movie->decription,0,100).'...'}}</td>
            <td class="col-sm-1"><img style="max-width:100%" src="{{$movie->poster_image}}"></td>
            <td class=col-sm-2>
                <a href="" class="btn btn-info"><i class="fa fa-edit"></i></a>
                <a href="/admin/movie/delete/{{$movie->id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>

            </td>
        </tr>
        @endforeach
    @endif
    </tbody>
</table>
<div class="pagination">
    {{ $movies->withQueryString()->links() }}
</div>
@endsection
