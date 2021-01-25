@extends('master')
@section('content')

    <div class="banner">
        <div class="center">
            <div class="text">
                <span></span><span class="type"></span>
            </div>
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 right" style="padding: 0;">
                <div style="background: #ecf0f1;">
                    <div class="title" style="background: #03a9f4;">
                        <p style="font-size: 18px;">Thể loại</p>
                    </div>
                    <!-- =====================================BEGIN CATEGORY============================= -->
                    <div class="row" style="margin: auto;">
                        @foreach($category as $cate)
                        <div class="col-md-6 col-lg-6 col-6" style="text-align: center;line-height: 25px;">
                            <p><a href="{{route('theloai',$cate->id)}}" class="cls_hover">{{$cate->name}}</a></p>
                        </div>
                        @endforeach
                    </div>
                    <!-- ======================================END CATEGORY================================ -->
                </div>
                <div class="title" style="background: #28a745;">
                    <p style="font-size: 18px;">Truyện Mới Cập Nhật</p>
                </div>
                <!-- ==============================NEW STORIES========================================= -->
                @foreach($chapter as $index => $chap)

                <div class="row" style="margin: auto;">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2" style="margin: auto;">
                        <div>
{{--                            <p class="number" style="border: 1px solid #e74c3c;background:  #e74c3c;">{{$index+1}}</p>--}}
                            <p class="number" style="{{ $index < 3 ? "border: 1px solid #e74c3c;background:  #e74c3c;" : "border: 1px solid black; color: black"}}">{{$index+1}}</p>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-10" style="padding: 0;">
                        <p><a href="/truyen/{{$chap->story->id}}" class="new_story" style="color: teal; font-weight: 500;">{{$chap->story->name}}</a></p>
                        <p><a href="/tacgia/{{$chap->story->author->id}}" class="new_story">{{$chap->story->author->name}}</a></p>
                    </div>



                </div>
            @endforeach

            <!-- ==============================NEW STORIES========================================= -->

            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 ">
                <div class="left">


                    <div class="title" style="background:  #009688;">
                        <p style="font-size: 18px;">Truyện Tổng Hợp</p>
                    </div>
                    <div class="container" style="padding: 0px;">
                        <!----------------------------------- Begin all storeis -------------------------- -->
{{--                        @foreach($story as $stor)--}}
                        @foreach($chapter as  $chap)
{{--                            @if($stor == $chap->story)--}}
                        <div class="row" style="padding: 0 ;margin: 5px 0px;">
                            <div class="col-sm-3 col-3 col-md-3 col-lg-3" style=" padding: 0px;">
                                <div class="nh-thumb nh-thumb--72  mr-3">
                                    <img src="/assets/images/{{$chap->story->image}}" alt="" class="edit_img" width="100">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-6" style="margin: auto;">

                                <div>
                                    <p class="name_stories"><a href="{{route('truyen',$chap->story->id)}}" class="new_story"><i class="fa fa-book"
                                                aria-hidden="true"></i>
                                            {{$chap['story']['name']}}</a></p>
                                    <p><a href="{{route('tacgia',$chap->story->author->id)}}" class="new_story"><i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i>
                                            {{$chap['story']['author']['name']}}</a></p>
                                </div>

                            </div>
                            <div class="col-md-3 col-lg-3 col-3 col-sm-3" style="margin: auto;">
                                <div>
{{--                                    <p class="chapter"><a href="{{route('chitiet',getNew($chap['story_id'])['id'])}}" class="new_story">Chương {{ getNew($chap['story_id'])['chap'] }}</a></p>--}}
{{--                                    @dd(getNew($chap['story_id'])['story']['name'])--}}
                                    <p class="chapter"><a href="chitiet/{{getNew($chap['story_id'])['story']['name']}}/{{getNew($chap['story_id'])['chap']}}" class="new_story">Chương {{ getNew($chap['story_id'])['chap'] }}</a></p>

                                </div>
                            </div>
                        </div>
                        <hr style="margin: 0px;">
                        @endforeach
{{--                        @endforeach--}}
                        <!-- =================end========================== -->





{{--                    {!! $chapter->links() !!}--}}

                    <!------------------------------------ end all stories ------------------------------->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
