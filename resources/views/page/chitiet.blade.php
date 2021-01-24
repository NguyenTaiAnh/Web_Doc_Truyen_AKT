@extends('master')
@section('content')
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12 col-sm-12">

                <div style="text-align: center; margin-bottom: 20px;">
                    <h2 style="text-transform: uppercase; text-align: center;">{{$chapter->story->name}} </h2>
                    <p class="chapter-name"><a >Chương {{$chapter->chap}} : {{$chapter->name}}</a></p>
                    <hr class="chapter-start">
                    <div>
                        <a href="#" class="btn btn-success btn-chapter-nav disabled">Chương Trước</a>
                        <select class="btn btn-success btn-chapter-nav form-control" name="chapter">
                            @foreach($totalChapter as   $total)
                                @if($total->story->id === $chapter->story->id)
                            <option value="{{$total->id}}"
                                {{$total->chap === $chapter->chap ? "selected" : ""}}
                            >Chương {{$total->chap}}: {{$total->name}}</option>
                                @endif
                            @endforeach
                        </select>
                        <a href="" class="btn btn-success btn-chapter-nav ">Chương Tiếp</a>
                    </div>
{{--                        {!! $totalChapter->links() !!}--}}
                    <hr class="chapter-start">
                </div>
                <div class="chuong">
                    <p>
                        {{$chapter->content}}
                    </p>
                </div>
                <div style="text-align: center; margin-bottom: 20px;">

                    <hr class="chapter-start">
                    <div>
                        <a href="#" class="btn btn-success btn-chapter-nav disabled">Chương Trước</a>
                        <select class="btn btn-success btn-chapter-nav form-control">
                            @foreach($totalChapter as   $total)
                                @if($total->story->id === $chapter->story->id)
                                    <option value="{{$total->id}}"
                                        {{$total->chap === $chapter->chap ? "selected" : ""}}
                                    >Chương {{$total->chap}}: {{$total->name}}</option>
                                @endif
                            @endforeach
                        </select>
                        <a href="#" class="btn btn-success btn-chapter-nav ">Chương Tiếp</a>

                    </div>
                    <hr class="chapter-start">
                </div>
            </div>
        </div>
    </div>
    @endsection
