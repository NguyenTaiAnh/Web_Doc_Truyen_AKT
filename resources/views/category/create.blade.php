@extends('admin.admin')
@section('content')
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-12 main-chart">

                    <div class="row mtbox">
                        <div style="margin:0 50px">
                            <form class="form-horizontal" action="{{route('category.store')}}" method="post">
                                @csrf
                                <fieldset>
                                    <!-- Form Name -->
                                    <legend>category <a class="btn btn-primary"
                                                      style="margin-bottom: 10px; float: right"
                                                      href="{{route('category.index')}}"
                                                      role="button">
                                            Back
                                        </a></legend>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">category Name</label>
                                        <div class="col-md-4">
                                            <input name="name" placeholder="category NAME" class="form-control input-md" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Description</label>
                                        <div class="col-md-4">
                                            <textarea name="description" class="form-control input-md" required="" >
                                            </textarea>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label"></label>
                                        <div class="col-md-4">
                                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Add category</button>
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

