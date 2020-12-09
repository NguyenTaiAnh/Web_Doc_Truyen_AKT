
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
                               href="{{route('chapter.index')}}"
                               role="button">
                                Back
                            </a>


                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>

                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Chap</th>
                                    <th scope="col">Story</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Options</th>

                                </tr>
                                </thead>

                                <tbody>

                                <tr>
                                    <th scope="row">
                                        <form action="{{route('chapter.show',$chapter->id)}}" >
                                            <p>{{$chapter->id}}</p>
                                        </form>
                                    </th>
                                    <th>
                                        <form action="{{route('chapter.show',$chapter->id)}}" >
                                            <p>{{$chapter->name}}</p>
                                        </form>
                                    </th>
                                    <th>
                                        <form action="{{route('chapter.show',$chapter->id)}}" >
                                            <p>{{$chapter->chap}}</p>
                                        </form>
                                    </th>
                                    <th>
                                        <form action="{{route('chapter.show',$chapter->id)}}" >
                                            <p>{{$chapter['story']['name']}}</p>
                                        </form>
                                    </th>
                                    <th>
                                        <form action="{{route('chapter.show',$chapter->id)}}" >
                                            <p>{{$chapter->content}}</p>
                                        </form>
                                    </th>
                                    <th>
                                        <a type="button" class="btn btn-info" href="{{route('chapter.edit',$chapter->id)}}">Update</a>

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

