@extends('master')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-xs-8 col-sm-12 truyen-main">
                <h2 style="border-bottom:1px solid ;">{{$detail->name}}</h2>
                <!-- --------------------------content---------------------------- -->
{{--                @foreach($story as $stor)--}}
                    @foreach($chapter as $chap)
{{--                        @if($chap->story->category_id == $stor->category_id)--}}
                            <div class="truyen">
                                <div class="row" style="margin: 0;">
                                    <div class="col-md-3 col-sm-3 col-3 " style="padding: 0;">
                                        <img src=" /assets/images/{{$chap->story->image}}" class="img_cate" alt="">
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-9 content">
                                        <p class="name_stories"><a href="{{route('truyen',$chap->story->id)}}"
                                                                   class="new_story"><i class="fa fa-book"
                                                                                        aria-hidden="true"></i>
                                                {{$chap->story->name}}</a></p>

                                        <p><a class="new_story" href="{{route('tacgia',$chap->story->author->id)}}"><i class="fa fa-pencil-square-o"
                                                                   aria-hidden="true"></i> {{$chap->story->author->name}}
                                            </a></p>
                                        <div style="word-break: break-all" class="showhide">
                                            <p class=" content text-less ">{{$chap->story->description}}</p>
                                            <p class=" content text-more d-none">{{$chap->story->description}}</p>
                                        </div>
                                        {{--                                                                    <p class="content">{{$stor->description}}</p>--}}
                                        <p>Chương: <a href="chitiet/{{getNew($chap['story_id'])['story']['name']}}/{{getNew($chap['story_id'])['chap']}}" class="new_story">{{ getNew($chap['story_id'])['chap'] }}
                                                : {{ getNew($chap['story_id'])['name'] }}</a></p>
                                    </div>
                                </div>
                            </div>
                            <hr>
{{--                        @endif--}}
{{--                    @endforeach--}}
                @endforeach

            {!! $chapter->links() !!}
            </div>
            <!-- -------------------- end---------------- -->
            <div class="col-md-4 col-lg-4 col-xs-4 col-sm-12">
                <div style="background: #ecf0f1;">
                    <div class="title" style="background: #03a9f4;">
                        <p style="font-size: 18px;">Thể loại</p>
                    </div>
                    <!-- =====================================BEGIN CATEGORY============================= -->
                    <div class="row" style="margin: auto;">
                        <div class="row" style="margin: auto;">
                            @foreach($category as $cate)
                                <div class="col-md-6 col-lg-6 col-6" style="text-align: center;line-height: 25px;">
                                    <p><a href="{{route('theloai',$cate->id)}}" class="cls_hover">{{$cate->name}}</a></p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- ======================================END CATEGORY================================ -->
                </div>
                <div class="title" style="background: #28a745;">
                    <p style="font-size: 18px;">Truyện Mới Cập Nhật</p>
                </div>
                <!-- ==============================NEW STORIES========================================= -->
                <div class="row" style="margin: auto;">
                    @foreach($chapter as $index => $chap)
                        @if($index <10)
                            <div class="col-lg-2 col-md-2 col-sm-2 col-2" style="margin: auto;">
                                <div>
                                    <p class="number" style="{{ $index < 3 ? "border: 1px solid #e74c3c;background:  #e74c3c;" : "border: 1px solid black; color: black"}}">{{$index+1}}</p>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-10 col-10" style="padding: 0;">
                                <p><a href="/truyen/{{$chap->story->id}}" class="new_story" style="color: teal; font-weight: 500;">{{$chap->story->name}}</a></p>
                                <p><a href="/tacgia/{{$chap->story->author->id}}" class="new_story">{{$chap->story->author->name}}</a></p>
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
@section('custom_js')
    <script !src="">
        const thDescription = document.querySelectorAll('.showhide');


        thDescription.forEach((item, index) => {
            const textLess = item.querySelector('.text-less');
            const textMore = item.querySelector('.text-more');
            const btnMore = document.createElement('span');

            btnMore.setAttribute('class', 'btn btn-primary')
            btnMore.innerHTML = "Show"
            btnMore.style.cursor = 'pointer'

            if (textLess.textContent.length > 50) {
                textLess.innerHTML = textLess.textContent.substr(0, 50) + '...'
                item.appendChild(btnMore)
            }
            btnMore.onclick = function () {
                textMore.classList.toggle('d-none')
                textLess.classList.toggle('d-none')

                if (textLess.getAttribute('class').includes('d-none')) {
                    btnMore.innerHTML = "Hide"
                    btnMore.classList.add('btn-danger')
                } else {
                    btnMore.innerHTML = "Show"
                    btnMore.classList.remove('btn-danger')

                }
            }
        })


    </script>
@endsection
