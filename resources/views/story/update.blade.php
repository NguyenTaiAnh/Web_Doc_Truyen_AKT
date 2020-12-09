@extends('admin.admin')
@section('content')
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-12 main-chart">

                    <div class="row mtbox">
                        <div style="margin:0 50px">
                            <form class="form-horizontal" action="{{ route('story.update', $story['id']) }} " enctype="multipart/form-data"
                                  method="post">
                                @csrf
                                @method('put')
                                @method('PATCH')
                                <fieldset>
                                    <!-- Form Name -->
                                    <legend>story <a class="btn btn-primary" style="margin-bottom: 10px; float: right"
                                                     href="{{ route('story.index') }}" role="button"> Back </a></legend>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">story Name</label>
                                        <div class="col-md-4">
                                            <input name="name" placeholder="story name" class="form-control input-md"
                                                   required="" type="text" value="{{ $story->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Category</label>
                                        <table>
                                            <tr>
                                                @foreach ($categories as $i => $category)

                                                    <th>
                                                        <input type="checkbox" name="category_id[]"
                                                               value="{{ $category['id'] }}"
                                                            {{ in_array($category['id'], $oldCategory) ? 'checked' : '' }}>
                                                        <label for=""> {{ $category['name'] }}</label><br>
                                                    </th>

                                                @endforeach
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Author</label>
                                        <div class="col-md-4">
                                            <select name="author_id" class="form-control">
                                                @foreach ($author as $au)
                                                    <option value="{{ $au->id }}"
                                                        {{ $au->id == $story->author_id ? 'selected' : '' }}>{{ $au->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div>
                                            {{ $story->author->name }}

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Status</label>
                                        <div class="col-md-4">
                                            <select name="status_id" class="form-control">
                                                @foreach ($status as $sta)
                                                    <option value="{{ $sta->id }}"
                                                        {{ $sta->id == $story->status_id ? 'selected' : '' }}>
                                                        {{ $sta->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <di>
                                            {{ $story->status->name }}
                                        </di>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Description</label>
                                        <div class="col-md-4">
                                            <textarea name="description" class="form-control input-md" required="">
                                            {{ $story->description }}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Image</label>
                                        <div class="col-md-4">
                                            <input type="file" name="image" class="form-control-file">
                                            <img src="/assets/images/{{ $story->image }}" width="100">
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label"></label>
                                        <div class="col-md-4">
                                            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Update
                                                Story
                                            </button>
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
