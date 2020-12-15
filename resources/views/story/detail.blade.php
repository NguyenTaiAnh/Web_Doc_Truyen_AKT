
@extends('admin.admin')
@section('content')
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-12 main-chart">

                    <div class="row mtbox" style="margin: 0px">

                        <div style="margin: 10px">
                            <h2>story</h2>

                            <a class="btn btn-primary"
                               style="margin-bottom: 10px; float: right"
                               href="{{route('story.index')}}"
                               role="button">
                                Back
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

                                <tr>
                                    <th scope="row">
                                        <form action="{{route('story.show',$story->id)}}" >
                                            <p>{{$story->id}}</p>
                                        </form>
                                    </th>
                                    <th>
                                        <form action="{{route('story.show',$story->id)}}" >
                                            <p>{{$story->name}}</p>
                                        </form>
                                    </th>
                                    <th>
                                        <form action="{{route('story.show',$story->id)}}" >

                                        <ul style="padding: 0px;">
                                            @foreach(getCategory($story->category_id) as $key=> $name)

                                                <li>{{ $name['name'] }}</li> <br>
                                            @endforeach
                                        </ul>
                                        </form>
                                    </th>
                                    <th>
                                        <form action="{{route('story.show',$story->id)}}" >
                                            <p> {{ $story->author->name }}</p>
                                        </form>
                                    </th>
                                    <th style="word-break: break-all" class="showhide">
                                        <form action="{{route('story.show',$story->id)}}" >
                                            <p class="text-less">{{$story->description}}</p>
                                            <p class="text-more d-none">{{$story->description}}</p>
                                        </form>
                                    </th>
                                    <th>
                                        <form action="{{route('story.show',$story->id)}}" >
                                            <p>{{$story->status->name}}</p>
                                        </form>
                                    </th>
                                    <th>
                                        <form action="{{route('story.show',$story->id)}}" >
                                            <img src="/assets/images/{{ $story->image }}" width="100">
                                        </form>
                                    </th>

                                    <th>
                                        <a type="button" class="btn btn-info" href="{{route('story.edit',$story->id)}}">Update</a>

                                    </th>
                                </tr>

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
        const thDescription = document.querySelector('.showhide');
        const textLess = document.querySelector('.text-less');
        const textMore = document.querySelector('.text-more');
        const btnMore = document.createElement('span')
        btnMore.setAttribute('class', 'btn btn-primary')
        btnMore.innerHTML  = "Show"
        btnMore.style.cursor = 'pointer'


        if(textLess.textContent.length > 50){
            textLess.innerHTML = textLess.textContent.substr(0, 50) + '...'
            thDescription.appendChild(btnMore)
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

    </script>
@endsection
