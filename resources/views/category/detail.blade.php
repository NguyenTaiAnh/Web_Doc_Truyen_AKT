
@extends('admin.admin')
@section('content')
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-12 main-chart">

                    <div class="row mtbox" style="margin: 0px">

                        <div style="margin: 10px">
                            <h2>Category</h2>
                            <a class="btn btn-primary"
                               style="margin-bottom: 10px; float: right"
                               href="{{route('category.index')}}"
                               role="button">
                                Back
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

                                <tr>
                                    <th scope="row">
                                        <form action="{{route('category.show',$category->id)}}" >
                                            <p>{{$category->id}}</p>
                                        </form>
                                    </th>
                                    <th>
                                        <form action="{{route('category.show',$category->id)}}" >
                                            <p>{{$category->name}}</p>
                                        </form>
                                    </th>
                                    <th>
                                        <a type="button" class="btn btn-info" href="{{route('category.edit',$category->id)}}">Update</a>

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

