<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{asset('frontend')}}/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <title>VeboTV</title>
</head>
<body>
    <div id="header" class="bg-black">
        <div class="container top col-8">
            <div class="row">
                <div class="col-3 brand">
                    <a href="https:\\facebook.com/ngtu02" class=""><img src="./assets/img/logo.png" alt="logo" class="logo-img"></a>
                </div>
                <div class="col-5" style="align-items: center; display:flex">
                    <form action="" class="form-search">
                        <input type="input" class="search-input" placeholder="Nhập từ khóa vd: tên phim, tên diễn viên...">
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="col-4 display-flex" style="align-items: center;">
                    <div class="row display-flex" style="align-items: center; width:100%">
                        <a href="" class="col-2 liked-btn" alt="Danh sách phim yêu thích"><i class="fa fa-heart"></i></a>
                        <a href="" class="col-2 history-btn" alt="Lịch sử"><i class="fa fa-clock-rotate-left"></i></a>
                        <a href="" class="col-4 log-in-btn">Đăng nhập</a>
                        <a href="" class="col-4 sign-in-btn">Đăng ký</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu">
            <div class="container col-8">
                <nav class="navbar navbar-light  text-white">
                    <ul class="nav text-upper container">
                        <li class="nav-link focus active"><a href="">Trang chủ</a></li>
                        <li class="nav-link"><a href="">Phim lẻ</a></li>
                        <li class="nav-link"><a href="">Phim bộ</a></li>
                        <li class="nav-link nav-link-dropdown">
                            <a href="">Thể loại</a>
                            <div class="dropdown-content">
                                <div class="col-half">
                                    @foreach ($genres->chunk(ceil($genres->count() / 2))->first() as $genre)
                                        <div class="dropdown-row">
                                            <a href="#">{{$genre->genre_name}}</a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="col-half">
                                    @foreach ($genres->chunk(ceil($genres->count() / 2))->last() as $genre)
                                        <div class="dropdown-row">
                                            <a href="#">{{$genre->genre_name}}</a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                        <li class="nav-link nav-link-dropdown">
                            <a href="">Quốc gia</a>
                            <div class="dropdown-content">
                                <div class="dropdown-row">
                                    <a href="#">Phim Anh</a>
                                    <a href="#">Phim Mỹ</a>
                                </div>
                                <div class="dropdown-row">
                                    <a href="#">Phim Trung Quốc</a>
                                    <a href="#">Phim Hàn Quốc</a>
                                </div>
                                <div class="dropdown-row">
                                    <a href="#">Phim Nhật Bản</a>
                                    <a href="#">Phim Thái Lan</a>
                                </div>
                                <div class="dropdown-row">
                                    <a href="#">Phim Pháp</a>
                                    <a href="#">Phim Úc</a>
                                </div>
                                <div class="dropdown-row">
                                    <a href="#">Phim Hồng Kông</a>
                                    <a href="#">Phim Việt Nam</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-link nav-link-dropdown">
                            <a href="">Năm phát hành</a>
                            <div class="dropdown-content">
                                <div class="dropdown-row">
                                    <a href="#">2023</a>
                                    <a href="#">2022</a>
                                </div>
                                <div class="dropdown-row">
                                    <a href="#">2021</a>
                                    <a href="#">2020</a>
                                </div>
                                <div class="dropdown-row">
                                    <a href="#">2019</a>
                                    <a href="#">2018</a>
                                </div>
                                <div class="dropdown-row">
                                    <a href="#">2017</a>
                                    <a href="#">2016</a>
                                </div>
                                <div class="dropdown-row">
                                    <a href="#">2015</a>
                                    <a href="#">2014</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-link"><a href="">Phim chiếu rạp</a></li>
                        <li class="nav-link"><a href="">TV show</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div id="content" class="bg-dark">
        <div class="container col-8">
            <div class="list-film phim-de-cu">
                <div class="heading">
                    <p class="text-upper">Phim đề cử</p>
                </div>
                <div class="slider">
                    <div class="slider-items">
                    @if(!@empty($movies)&& $movies->count())
                    @foreach ($movies as $movie)
                    <div class="slider-item">
                        <div class="col-sm list-film-item">
                            <a href="" class=""></a>
                            <img src="{{$movie->poster_image}}" alt="" class="slide-item-img">
                            <div class="play-btn"><i class="play-icon fa-sharp fa-solid fa-play"></i></div>
                            <div class="film-name"><span class="title">{{$movie->title}}</span></div>
                        </div>
                      </div>
                    @endforeach
                    @endif
                    </div>
                    <div class="btn-previous slider-btn slider-btn-prev"><i class="fa fa-angle-left"></i></div>
                    <div class="btn-next slider-btn slider-btn-next"><i class="fa fa-angle-right"></i></div>
                  </div>

            </div>
        </div>
    </div>
</body>

<script src="./assets/js/main.js"></script>
<script src="./assets/js/slider.js"></script>
<script src="./assets/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>

</html>
