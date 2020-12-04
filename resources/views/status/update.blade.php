
@extends('admin.admin')
@section('content')
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-12 main-chart">

                    <div class="row mtbox">
                        <div style="margin:0 50px">
                            <a class="btn btn-primary"
                               style="margin-bottom: 10px; float: right"
                               href="{{route('status.index')}}"
                               role="button">
                                Back
                            </a>

                            <form class="form-horizontal" action="{{route('status.update',$status->id)}}"method="post">
                                @csrf
                                @method('put')

                                <fieldset>
                                    <!-- Form Name -->
                                    <legend>status</legend>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">status Name</label>
                                        <div class="col-md-4">
                                            <input name="name" placeholder="{{$status->name}}" class="form-control input-md" required="" type="text">
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label"></label>
                                        <div class="col-md-4">
                                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Update status</button>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>
                        </div>
                    </div><!-- /row mt -->
                </div>
            </div>
        </section>
    </section>

@endsection

