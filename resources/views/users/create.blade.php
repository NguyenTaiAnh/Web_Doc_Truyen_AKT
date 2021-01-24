@extends('admin.admin')
@section('content')
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-12 main-chart">

                    <div class="row mtbox">
                        <div style="margin:0 50px">
                            <form class="form-horizontal" action="{{route('users.store')}}" method="post">
                                @csrf
                                <fieldset>
                                    <!-- Form Name -->
                                    <legend>users <a class="btn btn-primary"
                                                      style="margin-bottom: 10px; float: right"
                                                      href="{{route('users.index')}}"
                                                      role="button">
                                            Back
                                        </a></legend>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Users Name</label>
                                        <div class="col-md-4">
                                            <input name="name" placeholder="users name" class="form-control input-md" required="" type="text">
                                        </div>
                                    </div><div class="form-group">
                                        <label class="col-md-4 control-label">Email</label>
                                        <div class="col-md-4">
                                            <input name="email" placeholder="email users" class="form-control input-md" required="" type="email">
                                        </div>
                                    </div><div class="form-group">
                                        <label class="col-md-4 control-label">Password</label>
                                        <div class="col-md-4">
                                            <input name="password" placeholder="users name" class="form-control input-md" required="" type="password">
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label"></label>
                                        <div class="col-md-4">
                                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Add users</button>
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

