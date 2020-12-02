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
                                    <th scope="col">Image</th>
                                    <th scope="col">Options</th>

                                </tr>
                                </thead>

                                <tbody>
                                @foreach($story as $stor)

                                    <tr>
                                        <th scope="row">{{$stor->id}}</th>
                                        <th>{{$stor->name}}</th>
                                        <th>
                                            <ul>
                                                @foreach($stor->Category as $category)
                                                    <li>{{$category->name}}</li>
                                                @endforeach
                                            </ul>
                                        </th>
                                        <th>
                                            {{$stor['author']['name']}}
                                        </th>
                                        <th style="width: 30%"><img src="/assets/images/{{$stor->image}}" style="width: 20%;"></th>

                                        <th>
                                            <form action="{{route('story.destroy',$stor->id)}}" method="post" >
                                                @csrf
                                                <a type="button" class="btn btn-info" href="{{route('story.edit',$stor->id)}}">Update</a>

                                                <a type="button" class="btn btn-success" href="{{route('story.show',$stor->id)}}">Detail</a>
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

