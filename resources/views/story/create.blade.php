@extends('admin.admin')
@section('content')
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-12 main-chart">

                    <div class="row mtbox">
                        <div style="margin:0 50px">
{{--                            thêm enctype = "multipart/form-dât" để lưu ảnh--}}
                            <form class="form-horizontal" action="{{route('story.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                    <!-- Form Name -->
                                    <legend>story <a class="btn btn-primary"
                                                      style="margin-bottom: 10px; float: right"
                                                      href="{{route('story.index')}}"
                                                      role="button">
                                            Back
                                        </a></legend>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">story Name</label>
                                        <div class="col-md-4">
                                            <input name="name" placeholder="story name" class="form-control input-md" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" >Category</label>

                                              <table>
                                                  <tr>
                                                      @foreach($category as $cate)

                                                      <th>
                                                    <input type="checkbox" name="category[]"
                                                           value="{{$cate->id}}"
{{--                                                        {{ !empty($category) ? 'checked': '' }}--}}
                                                    >
                                                   <span style="margin-right:10px"> {{ $cate->name }}</span>
                                                      </th>
                                                      @endforeach
                                                  </tr>


                                              </table>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Author</label>
                                        <div class="col-md-4">
                                            <select name="author_id" class="form-control">
                                                @foreach($author as $au)
                                                    <option value="{{$au->id}}" >{{$au->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Image</label>
                                        <div class="col-md-4">
                                            <input type="file" name="image" class="form-control-file">

                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label"></label>
                                        <div class="col-md-4">
                                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Add Story</button>
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

