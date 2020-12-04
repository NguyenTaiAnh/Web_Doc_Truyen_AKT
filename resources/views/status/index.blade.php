@extends('admin.admin')
@section('content')
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-12 main-chart">

                    <div class="row mtbox" style="margin: 0px">

                        <div style="margin: 10px">
                            <h2>status</h2>
                            <a class="btn btn-primary"
                               style="margin-bottom: 10px; float: right"
                               href="{{route('status.create')}}"
                               role="button">
                                Add new
                            </a>


                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>

                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Options</th>

                                </tr>
                                </thead>

                                <tbody>
                                @foreach($status as $au)

                                <tr>
                                    <th scope="row">{{$au->id}}</th>
                                    <th>{{$au->name}}</th>
                                    <th>
                                        <form action="{{route('status.destroy',$au->id)}}" method="post" >
                                            @csrf
                                            <a type="button" class="btn btn-info" href="{{route('status.edit',$au->id)}}">Update</a>

                                            <a type="button" class="btn btn-success" href="{{route('status.show',$au->id)}}">Detail</a>
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

