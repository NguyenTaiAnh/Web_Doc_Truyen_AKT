@extends('master')
@section('content')
<div class="container-fluid bkg">
    <div class="container ">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign Up</h5>
                        <form class="form-signin" action="{{ route('register') }}" method="post">
                            @csrf

                            <div class="form-label-group">
                                <input type="name" id="inputName" class="form-control" placeholder="Name" name="name" required
                                       autofocus>
                                <label for="inputName">Name</label>
                            </div>
                            <div class="form-label-group">
                                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address"
                                       required autofocus>
                                <label for="inputEmail">Email address</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="inputPassword" class="form-control" name="password"
                                       placeholder="Password" required>
                                <label for="inputPassword">Password</label>
                            </div>
                            <div class="form-label-group">
                                <input type="password" id="inputConfirmPassword" class="form-control" name="password"
                                       placeholder="Confirm Password" required>
                                <label for="inputConfirmPassword">Confirm Password</label>
                            </div>

{{--                            <div class="custom-control custom-checkbox mb-3">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="customCheck1">--}}
{{--                                <label class="custom-control-label" for="customCheck1">Remember password</label>--}}
{{--                            </div>--}}

                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign
                                Up</button>

                            <hr class="my-4">
                            <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit">
                                <i class="fa fa-google" aria-hidden="true"></i>
                                Sign in with Google</button>
                            <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i
                                    class="fa fa-facebook" aria-hidden="true"></i>
                                Sign in with Facebook</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
