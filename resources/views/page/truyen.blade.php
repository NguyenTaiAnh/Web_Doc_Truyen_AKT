@extends('master')
@section('content')
<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-md-8 col-lg-8 col-xs-8 col-sm-12 truyen-main">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12 col-12" style="padding: 0; margin-bottom: 20px;">
                    <img src=" /assets/images/{{$chapter->story->image}}" width="100%" alt="">
                </div>
                <div class="col-md-8 col-lg-8 col-sm-12 col-12">
                    <div style="display: block; margin: auto;">
                        <div style="line-height: 2;">
                            <h3 style="text-transform: uppercase; font-weight: bold;">{{$chapter->story->name}}</h3>
                            <p class="str-name">Tác giả: <a href="{{route('tacgia',$chapter->story->author->id)}}"
                                                            style="text-transform: capitalize;">{{$chapter->story->author->name}}</a>
                            </p>
                            <p class="str-name">Thể loại:

                                @foreach(getCategory($chapter->story->category_id) as $key=> $name)

                                <a href="{{route('theloai',$name->id)}}"
                                                             style="text-transform: capitalize;">
                                {{ $name['name'] }}
                                </a>

{{--                                <li>{{ $name['name'] }}</li> <br>--}}
                            @endforeach
                            </p>
                            <p>Trạng thái: <span style="text-transform: capitalize;">{{$chapter->story->status->name}}</span></p>
                            <p>Độ dài: <span>999</span></p>

                        </div>
                        <div style=" margin-bottom: 10px;">
                            <a href="#" class="follow">Theo Dõi</a>

                            <ul class="btn_gt">
                                <li class="">
                                    <a class="" href="#gioithieu">Giới Thiệu</a>
                                </li>
                                <li style="border: 1px solid #5cabb8;
                                    background: #5cabb8;">
                                    <a href="#danhsach">Danh Sách Chương</a>
                                </li>
                            </ul>
                            <a href="/chitiet" class="btn_story">Đọc Truyện</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="gioithieu">
                <h5 class="title-name">Giới thiệu truyện <span
                        style="text-transform: capitalize; font-weight: bold; ">asdasd
                            asdasd </span></h5>
                <hr style="margin-top: 0;">

                <p style="line-height: 2;">Hai con người hai tính cách hoàn toàn trái ngược nhau.

                    Nữ chính là Hồ Kiều tính tình bưu hãn lại mạnh mẽ,

                    Còn nam chính là Hứa Thanh Gia tính cách lại văn nhã.

                    Cuộc sống sau khi cưới của họ là như vậy:

                    Hồ Kiều: ”Tướng công chàng nói cái gì?”

                    Hứa Thanh Gia: ”… Nàng thân là phụ nhân, phải tuân thủ nghiêm ngặt phụ đức…”

                    Hồ Kiều: ”Tướng công ta nghễnh ngãng, chàng tới gần đây mà nói…” Chậm rãi giơ đao trong tay lên…

                    Hứa Thanh Gia… Hứa Thanh Gia nặn ra một nụ cười cho qua, “Nương tử… Nương tử nói có lý!”

                    Nguyên bản là thuần phụ ký, cuối cùng lại biến thành thuần phu ký.

                    Hồ Kiều: ”…” Ta cái gì cũng chưa làm!

                    Hứa Thanh Gia: “… Nương tử nói có lý!” Nội tâm lại yên lặng rơi lệ: Người nào có thể cho ta
                    biết, có ai làm đại quan mà vẫn sợ vợ không? Đây không phải là sự thật đâu!</p>
            </div>
            <div id="danhsach">
                <h5 class="title-name">Danh sách chương</h5>
                <hr style="margin-top: 0;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-12">
                            <ul class="detail">

                                <li>
                                    <a href="/chitiet">Chương 1: Tên chương </a>
                                </li>
                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12 col-12">
                            <ul class="detail">

                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                                <li>
                                    <a href="detail.html">Chương 1: Tên chương </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- -------------------- end---------------- -->
        <div class="col-md-4 col-lg-4 col-xs-4 col-sm-12">
            <div style="background: #ecf0f1;">
                <div class="title" style="background: #03a9f4;">
                    <p style="font-size: 18px;">Thể loại</p>
                </div>
                <!-- =====================================BEGIN CATEGORY============================= -->
                <div class="row" style="margin: auto;">
                    <div class="col-md-6 col-lg-6 col-6" style="text-align: center;line-height: 25px;">
                        <p><a href="category.html" class="cls_hover">Tên thể loại</a></p>
                        <p><a href="category.html" class="cls_hover">Tên thể loại</a></p>
                        <p><a href="category.html" class="cls_hover">Tên thể loại</a></p>
                        <p><a href="category.html" class="cls_hover">Tên thể loại</a></p>
                        <p><a href="category.html" class="cls_hover">Tên thể loại</a></p>
                        <p><a href="category.html" class="cls_hover">Tên thể loại</a></p>
                        <p><a href="category.html" class="cls_hover">Tên thể loại</a></p>
                    </div>
                    <div class="col-md-6 col-lg-6 col-6" style="text-align: center;line-height: 25px;">
                        <p><a href="category.html" class="cls_hover">Tên thể loại</a></p>
                        <p><a href="category.html" class="cls_hover">Tên thể loại</a></p>
                        <p><a href="category.html" class="cls_hover">Tên thể loại</a></p>
                        <p><a href="category.html" class="cls_hover">Tên thể loại</a></p>
                        <p><a href="category.html" class="cls_hover">Tên thể loại</a></p>
                        <p><a href="category.html" class="cls_hover">Tên thể loại</a></p>
                        <p><a href="category.html" class="cls_hover">Tên thể loại</a></p>
                    </div>
                </div>
                <!-- ======================================END CATEGORY================================ -->
            </div>
            <div class="title" style="background: #28a745;">
                <p style="font-size: 18px;">Truyện Mới Cập Nhật</p>
            </div>
            <!-- ==============================NEW STORIES========================================= -->
            <div class="row" style="margin: auto;">
                <div class="col-lg-2 col-md-2 col-sm-2 col-2" style="margin: auto;">
                    <div>
                        <p class="number" style="border: 1px solid #e74c3c;background:  #e74c3c;">1</p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-10" style="padding: 0;">
                    <p><a href="story.html" class="new_story" style="color: teal; font-weight: 500;">Trọng Sinh Đô
                            Thị Tu
                            Tiên</a></p>
                    <p><a href="category.html" class="new_story">Tên thể loại</a></p>
                </div>
                <!-- =================end========================== -->
                <div class="col-lg-2 col-md-2 col-sm-2 col-2" style="margin: auto;">
                    <div>
                        <p class="number" style="border: 1px solid #5eb949;background: #5eb949;">1</p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-10" style="padding: 0;">
                    <p><a href="story.html" class="new_story" style="color: teal; font-weight: 500;">Trọng Sinh Đô
                            Thị Tu
                            Tiên</a></p>
                    <p><a href="category.html" class="new_story">Tên thể loại</a></p>
                </div>
                <!-- =================end========================== -->
                <div class="col-lg-2 col-md-2 col-sm-2 col-2" style="margin: auto;">
                    <div>
                        <p class="number" style="border: 1px solid #5cabb8;background: #5cabb8;">1</p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-10" style="padding: 0;">
                    <p><a href="story.html" class="new_story" style="color: teal; font-weight: 500;">Trọng Sinh Đô
                            Thị Tu
                            Tiên</a></p>
                    <p><a href="category.html" class="new_story">Tên thể loại</a></p>
                </div>
                <!-- =================end========================== -->
                <div class="col-lg-2 col-md-2 col-sm-2 col-2" style="margin: auto;">
                    <div>
                        <p class="number" style="color: black;border: 1px solid">1</p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-10" style="padding: 0;">
                    <p><a href="story.html" class="new_story" style="color: teal; font-weight: 500;">Trọng Sinh Đô
                            Thị Tu
                            Tiên</a></p>
                    <p><a href="category.html" class="new_story">Tên thể loại</a></p>
                </div>
                <!-- =================end========================== -->
                <div class="col-lg-2 col-md-2 col-sm-2 col-2" style="margin: auto;">
                    <div>
                        <p class="number" style="color: black;border: 1px solid">1</p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-10" style="padding: 0;">
                    <p><a href="story.html" class="new_story" style="color: teal; font-weight: 500;">Trọng Sinh Đô
                            Thị Tu
                            Tiên</a></p>
                    <p><a href="category.html" class="new_story">Tên thể loại</a></p>
                </div>
                <!-- =================end========================== -->
                <div class="col-lg-2 col-md-2 col-sm-2 col-2" style="margin: auto;">
                    <div>
                        <p class="number" style="color: black;border: 1px solid">1</p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-10" style="padding: 0;">
                    <p><a href="story.html" class="new_story" style="color: teal; font-weight: 500;">Trọng Sinh Đô
                            Thị Tu
                            Tiên</a></p>
                    <p><a href="category.html" class="new_story">Tên thể loại</a></p>
                </div>
                <!-- =================end========================== -->
                <div class="col-lg-2 col-md-2 col-sm-2 col-2" style="margin: auto;">
                    <div>
                        <p class="number" style="color: black;border: 1px solid">1</p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-10" style="padding: 0;">
                    <p><a href="story.html" class="new_story" style="color: teal; font-weight: 500;">Trọng Sinh Đô
                            Thị Tu
                            Tiên</a></p>
                    <p><a href="category.html" class="new_story">Tên thể loại</a></p>
                </div>
                <!-- =================end========================== -->
                <div class="col-lg-2 col-md-2 col-sm-2 col-2" style="margin: auto;">
                    <div>
                        <p class="number" style="color: black;border: 1px solid">1</p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-10" style="padding: 0;">
                    <p><a href="story.html" class="new_story" style="color: teal; font-weight: 500;">Trọng Sinh Đô
                            Thị Tu
                            Tiên</a></p>
                    <p><a href="category.html" class="new_story">Tên thể loại</a></p>
                </div>
                <!-- =================end========================== -->
                <div class="col-lg-2 col-md-2 col-sm-2 col-2" style="margin: auto;">
                    <div>
                        <p class="number" style="color: black;border: 1px solid">1</p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-10" style="padding: 0;">
                    <p><a href="story.html" class="new_story" style="color: teal; font-weight: 500;">Trọng Sinh Đô
                            Thị Tu
                            Tiên</a></p>
                    <p><a href="category.html" class="new_story">Tên thể loại</a></p>
                </div>
                <!-- =================end========================== -->
                <div class="col-lg-2 col-md-2 col-sm-2 col-2" style="margin: auto;">
                    <div>
                        <p class="number" style="color: black;border: 1px solid">1</p>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-10" style="padding: 0;">
                    <p><a href="story.html" class="new_story" style="color: teal; font-weight: 500;">Trọng Sinh Đô
                            Thị Tu
                            Tiên</a></p>
                    <p><a href="category.html" class="new_story">Tên thể loại</a></p>
                </div>
                <!-- =================end========================== -->


            </div>
            <!-- ==============================NEW STORIES========================================= -->

        </div>
    </div>
</div>
@endsection
