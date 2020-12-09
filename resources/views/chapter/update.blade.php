
@extends('admin.admin')
@section('content')
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-12 main-chart">

                    <div class="row mtbox">
                        <div style="margin:0 50px">


                            <form class="form-horizontal" action="{{route('chapter.update',$chapter->id)}}"method="post">
                                @csrf
                                @method('put')

                                <fieldset>
                                    <!-- Form Name -->
                                    <legend>chapter <a class="btn btn-primary" style="margin-bottom: 10px; float: right"  href="{{route('chapter.index')}}" role="button"> Back </a></legend>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Chapter Name</label>
                                        <div class="col-md-4">
                                            <input name="name" placeholder="chapter name" class="form-control input-md" required="" type="text" value="{{$chapter->name}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Chap</label>
                                        <div class="col-md-4">
                                            <input name="chap" class="form-control input-md" required="" type="text" value="{{$chapter->chap}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">chapter</label>
                                        <div class="col-md-4">
                                            <select name="story_id" class="form-control">
                                                @foreach($story as $sto)
                                                    <option value="{{$sto->id}}" >{{$sto->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Content</label>
                                        <div class="col-md-4">
                                            <textarea name="content" class="form-control input-md" required="" >
                                                {{$chapter->content}}
                                            </textarea>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label"></label>
                                        <div class="col-md-4">
                                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Update Status</button>
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

