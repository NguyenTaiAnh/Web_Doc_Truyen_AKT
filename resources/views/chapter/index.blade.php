@extends('admin.admin')
@section('content')
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-12 main-chart">

                    <div class="row mtbox" style="margin: 0px">

                        <div style="margin: 10px">
                            <h2>chapter</h2>
                            <a class="btn btn-primary"
                               style="margin-bottom: 10px; float: right"
                               href="{{route('chapter.create')}}"
                               role="button">
                                Add new
                            </a>


                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>

                                    <th scope="col">ID</th>
                                    <th scope="col">Chap</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Story</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Options</th>

                                </tr>
                                </thead>

                                <tbody>
                                @foreach($chapter as $chap)

                                    <tr>
                                        <th scope="row">{{$chap->id}}</th>
                                        <th>{{$chap->chap}}</th>
                                        <th>{{$chap->name}}</th>
                                        <th>
                                            {{$chap['story']['name']}}
                                        </th>
                                        <th style="word-break: break-all" class="showhide">
                                            <p class="text-less">{{$chap->content}}</p>
                                            <p class="text-more d-none">{{$chap->content}}</p>

                                        </th>
{{--                                        <th>{{$chap['content']}}</th>--}}
                                        <th>
                                            <form action="{{route('chapter.destroy',$chap->id)}}" method="post" >
                                                @csrf
                                                <a type="button" class="btn btn-info" href="{{route('chapter.edit',$chap->id)}}">Update</a>

                                                <a type="button" class="btn btn-success" href="{{route('chapter.show',$chap->id)}}">Detail</a>
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>

                                            </form>
                                        </th>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div>


                    </div><!-- /row mt -->
                </div>
            </div>
        </section>
    </section>

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
