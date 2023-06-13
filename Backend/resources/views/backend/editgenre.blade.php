@extends('backend.master')
@section('title','Sửa thể loại')
@section('main')
<form class="col-4" method="POST" action="/admin/genre/edit/{{$genre->id}}">
    <h5 class="">Sửa thể loại</h5>
    @csrf
    <div class="form-group">
      <input type="text" name="genre" value="{{$genre->genre_name}}" class="form-control" placeholder="Nhập thể loại" required>
    </div>
    <button type="submit" class="btn btn-info form-control">Cập nhật</button>
</form>
@endsection
