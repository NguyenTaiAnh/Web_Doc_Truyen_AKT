@extends('master')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <input type="hidden" name="{{ $chapter->story->id }}" id="story">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-xs-8 col-sm-12 truyen-main">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-12" style="padding: 0; margin-bottom: 20px;">
                        <img src=" /assets/images/{{ $chapter->story->image }}" width="100%" alt="">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-12">
                        <div style="display: block; margin: auto;">
                            <div style="line-height: 2;">
                                <h3 style="text-transform: uppercase; font-weight: bold;">{{ $chapter->story->name }}</h3>
                                <p class="str-name">Tác giả: <a href="{{ route('tacgia', $chapter->story->author->id) }}"
                                        style="text-transform: capitalize;">{{ $chapter->story->author->name }}</a>
                                </p>
                                <p class="str-name">Thể loại:

                                    @foreach (getCategory($chapter->story->category_id) as $key => $name)

                                        <a href="{{ route('theloai', $name->id) }}" style="text-transform: capitalize;">
                                            {{ $name['name'] }}
                                        </a>

                                        {{-- <li>{{ $name['name'] }}</li>
                                        <br>--}}
                                    @endforeach
                                </p>
                                <p>Trạng thái: <span
                                        style="text-transform: capitalize;">{{ $chapter->story->status->name }}</span></p>
                                <p>Độ dài: <span>{{ $count }}</span></p>

                            </div>
                            <div style=" margin-bottom: 10px;">
                            @if(!$check)
                                <form action="{{ route('theodoi') }}" method="post">
                                <input type="hidden" name="story_id" value="{{ $chapter->story->id }}">
                                    @csrf
                                    <button class="follow" type="submit"><i class="fa fa-bookmark" aria-hidden="true"></i>

                                        Theo Dõi</button>
                                </form>
                            @endif
                                <ul class="btn_gt">
                                    <li class="">
                                        <a class="" href="{{ route('truyen', $chapter->story->id) }}#gioithieu">Giới
                                            Thiệu</a>
                                    </li>
                                    <li
                                        style="border: 1px solid #5cabb8;
                                                                                                                                                                                                                                                                                                                                            background: #5cabb8;">
                                        <a href="{{ route('truyen', $chapter->story->id) }}/#danhsach">Danh Sách
                                            Chương</a>
                                    </li>
                                </ul>
                                <a href="/chitiet/{{ $chapter->story->name }}/{{ $chapter->chap }}" class="btn_story">Đọc
                                    Truyện</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="gioithieu">
                    <h5 class="title-name">Giới thiệu truyện <span
                            style="text-transform: capitalize; font-weight: bold; ">{{ $chapter->story->name }} </span>
                    </h5>
                    <hr style="margin-top: 0;">

                    <p style="line-height: 2;">{{ $chapter->story->description }}</p>
                </div>
                <div id="danhsach">
                    <h5 class="title-name">Danh sách chương</h5>
                    <hr style="margin-top: 0;">
                    <div class="container">
                        <div class="row">
                            @foreach ($allChapter as $chap)
                                <div class="col-md-6 col-sm-12 col-12">
                                    <ul class="detail">
                                        <li>
                                            <a href="chitiet/{{ $chap->story->name }}/{{ $chap->chap }}">Chương
                                                {{ $chap->chap }}
                                                : {{ $chap->name }} </a>
                                        </li>

                                    </ul>
                                </div>
                            @endforeach
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
                        @foreach ($category as $cate)
                            <div class="col-md-6 col-lg-6 col-6" style="text-align: center;line-height: 25px;">
                                <p><a href="{{ route('theloai', $cate->id) }}" class="cls_hover">{{ $cate->name }}</a></p>
                            </div>
                        @endforeach
                    </div>
                    <!-- ======================================END CATEGORY================================ -->
                </div>
                <div class="title" style="background: #28a745;">
                    <p style="font-size: 18px;">Truyện Mới Cập Nhật</p>
                </div>
                <!-- ==============================NEW STORIES========================================= -->
                <div class="row" style="margin: auto;">
                    @foreach ($totalChapter as $index => $chap)
                        @if ($index < 10)
                            <div class="col-lg-2 col-md-2 col-sm-2 col-2" style="margin: auto;">
                                <div>
                                    <p class="number"
                                        style="{{ $index < 3 ? 'border: 1px solid #e74c3c;background:  #e74c3c;' : 'border: 1px solid black; color: black' }}">
                                        {{ $index + 1 }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-10" style="padding: 0;">
                                <p><a href="/truyen/{{ $chap->story->id }}" class="new_story"
                                        style="color: teal; font-weight: 500;">{{ $chap->story->name }}</a></p>
                                <p><a href="/tacgia/{{ $chap->story->author->id }}"
                                        class="new_story">{{ $chap->story->author->name }}</a></p>
                            </div>
                            <!-- =================end========================== -->
                        @endif

                    @endforeach
                    <!-- =================end========================== -->


                </div>
                <!-- ==============================NEW STORIES========================================= -->

            </div>
        </div>
    </div>
@endsection

