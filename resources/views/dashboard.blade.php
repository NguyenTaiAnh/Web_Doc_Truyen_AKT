@extends('admin.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-12 main-chart">

                    <div class="row mtbox">
                        <div class="col-md-3 col-sm-3 col-md-offset-1 box0">
                            <div class="box1">
                                <span class="li_news"></span>
                                <h3>{{$story}}</h3>
                            </div>
                            <p>{{$story}} Truyện</p>
                        </div>
                        <div class="col-md-3 col-sm-3 box0">
                            <div class="box1">
                                <span class="li_user"></span>
                                <h3>{{$user}}</h3>
                            </div>
                            <p>{{$user}} Người dùng.</p>
                        </div>
                        <div class="col-md-3 col-sm-3 box0">
                            <div class="box1">
                                <span class="li_note"></span>
                                <h3>{{$chap}}</h3>
                            </div>
                            <p>Tổng {{$chap}} chương .</p>
                        </div>


                    </div><!-- /row mt -->
                </div>
            </div>
        </section>
    </section>
    <!-- /.content-wrapper -->
@endsection
