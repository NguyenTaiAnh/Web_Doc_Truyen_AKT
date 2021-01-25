@extends('master')
@section('content')
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-xs-8 col-sm-12 truyen-main">
                <h2 style="border-bottom:1px solid ;">Truyện Theo Dõi</h2>
                @dd($userstory)
{{--                <!-- --------------------------content---------------------------- -->--}}
{{--                @foreach($story as $stor)--}}

{{--                    <div class="truyen">--}}
{{--                        <div class="row" style="margin: 0;">--}}
{{--                            <div class="col-md-3 col-sm-3 col-3 " style="padding: 0;">--}}
{{--                                <img src=" /assets/images/{{$stor->image}}" class="img_cate" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-9 col-sm-9 col-9 content">--}}
{{--                                <p class="name_stories"><a href="{{route('truyen',$stor->id)}}" class="new_story"><i class="fa fa-book"--}}
{{--                                                                                                                     aria-hidden="true"></i>--}}
{{--                                        {{$stor->name}}</a></p>--}}

{{--                                <p><a href="{{route('tacgia',$stor->author->id)}}" class="new_story"><i class="fa fa-pencil-square-o"--}}
{{--                                                                                                        aria-hidden="true"></i> {{$stor->author->name}}</a></p>--}}
{{--                                <div style="word-break: break-all" class="showhide">--}}
{{--                                    <p class=" content text-less ">{{$stor->description}}</p>--}}
{{--                                    <p class=" content text-more d-none">{{$stor->description}}</p>--}}
{{--                                </div>--}}
{{--                                --}}{{--                                <p>Chương: <a href="detail.html" class="new_story">{{$chap->chap}}: {{$chap->name}}</a></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <hr>--}}

{{--                @endforeach--}}
            <!-- -------------------------- end-content---------------------------- -->


                @endsection
                @section('custom_js')
                    <script !src="">
                        const thDescription = document.querySelectorAll('.showhide');



                        thDescription.forEach((item, index) => {
                            const textLess = item.querySelector('.text-less');
                            const textMore = item.querySelector('.text-more');
                            const btnMore = document.createElement('span');

                            btnMore.setAttribute('class', 'btn btn-primary')
                            btnMore.innerHTML  = "Show"
                            btnMore.style.cursor = 'pointer'

                            if(textLess.textContent.length > 50){
                                textLess.innerHTML = textLess.textContent.substr(0, 50) + '...'
                                item.appendChild(btnMore)
                            }
                            btnMore.onclick = function () {
                                textMore.classList.toggle('d-none')
                                textLess.classList.toggle('d-none')

                                if(textLess.getAttribute('class').includes('d-none')){
                                    btnMore.innerHTML  = "Hide"
                                    btnMore.classList.add('btn-danger')
                                } else {
                                    btnMore.innerHTML  = "Show"
                                    btnMore.classList.remove('btn-danger')

                                }
                            }
                        })


                    </script>
@endsection
