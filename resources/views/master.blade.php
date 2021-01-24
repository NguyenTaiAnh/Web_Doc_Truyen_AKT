<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AKT-Truyện</title>
    <base href="{{asset('')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./client/css/style.css">
    <link rel="stylesheet" href="./client/css/login.css">
    <link rel="stylesheet" href="./client/css/category.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<header>
    <div class="container div_header">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="/" style="color: white;">AKT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>

                    <!-- <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle menu-style" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Thể Loại
                      </a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Thể Loại
                        </a>
                        <div class="dropdown-menu" style="width: 600px;" aria-labelledby="navbarDropdown">
                            <div class="container">
                                <div class="row">
                                    @foreach($category as $cate)
                                        <div class="col-md-4">
                                            <a class="dropdown-item"
                                               href="{{route('theloai',$cate->id)}}">{{$cate->name}}</a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Danh mục
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($status as $sta)
                                <a class="dropdown-item" href="{{route('danhmuc',$sta->id)}}">{{$sta->name}}</a>

                            @endforeach
                        </div>
                    </li>

                </ul>

                <form class="form-inline my-2 my-lg-0" action="timkiem" method="GET" role="search">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <input type="text" id="keyword" name="tukhoa"
                           value="{{ isset($_GET['tukhoa']) ? $_GET['tukhoa'] : '' }}" class="form-control" autofocus
                           placeholder="Tên truyện hoặc tên tác giả" aria-label="Recipient's username"
                           aria-describedby="basic-addon2">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>

                <ul class="navbar-nav ml-auto">
                    @if (Route::has('login'))
                        @auth
                            @if(Auth::user()->role == 1)
                                <li class="nav-item">
                                    <a href="/admin" class="nav-link">Admin panel</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a href="#" class="nav-link">Tủ truyện</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Đăng Nhập</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('register') }}">Đăng Ký</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="/admin" class="nav-link">Admin panel</a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="account.html" class="nav-link">Tên User</a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a class="nav-link" href="/dangnhap">Đăng Nhập</a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item ">--}}
                    {{--                        <a class="nav-link" href="/dangky">Đăng Ký</a>--}}
                    {{--                    </li>--}}
                </ul>
            </div>

        </nav>
    </div>
</header>
@yield('content')


<div class="container-fluid" style="padding: 0;line-height: 30px;">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12 col-12 ">
                    <p class="ft_title">Giới thiệu</p>
                    <p>
                        AKT-Truyện - Đọc truyện online, đọc truyện chữ, truyện hay. Website luôn cập nhật những bộ
                        truyện mới
                        thuộc
                        các thể loại đặc sắc như truyện tiên hiệp, truyện kiếm hiệp, hay truyện ngôn tình một cách nhanh
                        nhất. Hỗ
                        trợ
                        mọi thiết bị như di động và máy tính bảng.
                    </p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-6">
                    <p class="ft_title">Thể loại</p>
                    <a href="#" class="cls_hover" style="color: white;">Tất cả thể loại</a>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-6">
                    <p class="ft_title">Thông tin liên hệ</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> Email: akttruyen@gmail.com</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> Phone: 01234567871</p>


                </div>
            </div>
        </div>
    </div>
</div>

<!-- js bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.7/typed.min.js"></script>
<script src="./client/js/index.js"></script>


<script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
@yield('custom_js')

</body>

</html>
