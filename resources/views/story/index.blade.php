@extends('admin.admin')
@section('content')
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-12 main-chart">

                    <div class="row mtbox" style="margin: 0px">

                        <div style="margin: 10px">
                            <h2>Story</h2>
                            <a class="btn btn-primary"
                               style="margin-bottom: 10px; float: right"
                               href="{{route('story.create')}}"
                               role="button">
                                Add new
                            </a>


                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>

                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Options</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($story as $key=> $stor)
                                    {{--                                @if ($key==1)                                                                                                    <tr>--}}
                                    <th scope="row">{{$stor->id}}</th>

                                    <th>{{$stor->name}}</th>
                                    <th>
                                        <ul style="padding: 0px;">
                                            @foreach(getCategory($stor->category_id) as $key=> $name)

                                                <li>{{ $name['name'] }}</li> <br>
                                            @endforeach
                                        </ul>
                                    </th>

                                    <th>
                                        {{$stor['author']['name']}}
                                    </th>
                                    <th style="word-break: break-all" class="showhide">
                                        <p class="text-less">{{$stor->description}}</p>
                                        <p class="text-more d-none">{{$stor->description}}</p>

                                    </th>
                                    <th>
                                        {{$stor['status']['name']}}
                                    </th>
                                    <th style="width: 30%"><img src="/assets/images/{{$stor->image}}"
                                                                style="width: 100%;"></th>
                                    <th>
                                        <form action="{{route('story.destroy',$stor->id)}}" method="post">
                                            @csrf
                                            <a type="button" class="btn btn-info"
                                               href="{{route('story.edit',$stor->id)}}">Update</a>

                                            <a type="button" class="btn btn-success"
                                               href="{{route('story.show',$stor->id)}}">Detail</a>
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>

                                        </form>
                                    </th>
                                    </tr>
                                    {{--                                    @endif--}}
                                @endforeach

                                </tbody>
                            </table>
                            {!! $story->links() !!}
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
