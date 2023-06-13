@extends('backend.master')
@section('title','Quản lí thể loại')
@section('heading')
<h3 class="">Quản lý thể loại</h3>
@endsection
@section('main')
<div class="content-wapper">
    @include('message.success')
    <div class="row">
        <form class="col-3" method="POST" action="{{asset('admin/genre/post')}}">
            <h5 class="">Thêm thể loại</h5>
            @csrf
            <div class="form-group">
              <input type="text" name="genre" class="form-control" id="exampleInputEmail1"  placeholder="Nhập thể loại" required>
            </div>
            <button type="submit" class="btn btn-info form-control">Thêm</button>
        </form>
        <div class="col-8">
            <h5 class="">Danh sách thể loại</h5>
            <table class="table col-sm-12">
                <thead>
                  <tr>
                    <th scope="col" class="col-8">Thể loại</th>
                    <th scope="col">Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                @if(!empty($genres) && $genres->count())
                @foreach ($genres as $genre)
                <tr>
                    <td>{{$genre->genre_name}}</td>
                    <td>
                        <a href="/admin/genre/edit/{{$genre->id}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                        <a href="/admin/genre/delete/{{$genre->id}}" class="btn bg-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
                @endif
                </tbody>
            </table>
        <div class="pagination">
            {{ $genres->links() }}
        </div>
        </div>
    </div>
</div>
@endsection
