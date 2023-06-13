@extends('backend.master')
@section('title', 'Thêm phim mới')
@section('heading')
<h3 class="">Thêm phim mới</h3>
@endsection
@section('main')
<form class="row" method="POST" action="{{asset('admin/movie/post')}}" enctype="multipart/form-data">
    @csrf
    <div class="col-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Tiêu đề phim</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Nhập tiêu đề">
        </div>
        <div class="form-group">
            <label>Thể loại</label>
            <select name="genre"  value="Chọn thể loại" class="form-control">
                @foreach ($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->genre_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Năm phát hành</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="year" placeholder="Nhập năm phát hành">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Mô tả</label>
            <textarea name="decription" id="editor2" cols="30" rows="10" class="form-control"></textarea>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Thời lượng</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="duration" placeholder="Nhập thời lượng">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Ảnh poster</label>
            <input type="text" class="form-control" id="poster_image" name="poster_image" placeholder="Chọn ảnh" readonly>
            <a href="#" class="btn btn-info mt-2" onclick="browseServer(); return false;">Chọn ảnh</a>
            <script>
                function browseServer() {
                    CKFinder.popup({
                        chooseFiles: true,
                        width: 800,
                        height: 600,
                        onInit: function (finder) {
                            finder.on('files:choose', function (event) {
                                var file = event.data.files.first();
                                document.getElementById('poster_image').value = file.getUrl();
                            });
                        }
                    });
                }
            </script>

            {{-- <script type="text/javascript">
                CKEDITOR.replace("editor1",{
                    language:'vi',
                    filebrowserBrowseUrl: 'editor/ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl: 'editor/ckfinder/ckfinder.html?type=Images',
                    filebrowserFlashBrowseUrl: 'editor/ckfinder/ckfinder.html?type=Flash',
                    filebrowserUploadUrl: 'editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: 'editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: 'editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                });
            </script> --}}
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Đạo diễn</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="director" placeholder="Nhập tên đạo diễn">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Quốc gia</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="country" placeholder="Nhập quốc gia">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Xếp hạng</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="rating" placeholder="Nhập điểm đánh giá">
        </div>
        <button type="submit" class="btn btn-info">Thêm</button>
    </div>
</form>
@endsection
