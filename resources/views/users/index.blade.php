@extends('admin.admin')
@section('content')
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-12 main-chart">

                    <div class="row mtbox" style="margin: 0px">

                        <div style="margin: 10px">
                            <h2>users</h2>
                            <a class="btn btn-primary"
                               style="margin-bottom: 10px; float: right"
                               href="{{route('users.create')}}"
                               role="button">
                                Add new
                            </a>


                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>

                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Options</th>

                                </tr>
                                </thead>

                                <tbody>
                                @foreach($users as $i => $au)

                                    <tr>
                                        <th scope="row">{{$i+1}}</th>
                                        <th>{{$au->name}}</th>
                                        <th>{{$au->email}}</th>
                                        <th>
                                            <form action="{{route('users.destroy',$au->id)}}" method="post" >
                                                @csrf
                                                <a type="button" class="btn btn-info" href="{{route('users.edit',$au->id)}}">Update</a>

{{--                                                <a type="button" class="btn btn-success" href="{{route('users.show',$au->id)}}">Detail</a>--}}
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>

                                            </form>
                                        </th>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            {!! $users->links() !!}

                        </div>


                    </div><!-- /row mt -->
                </div>
            </div>
        </section>
    </section>

@endsection

