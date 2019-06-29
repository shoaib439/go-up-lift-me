@extends('index')


@section('signup-section')

    <div class="container-fluid w-75" style="margin-top: 100px;">

        <div class="container shadow-sms p-3 mb-5  mt-5 bg-white rounded ">
            <h2 class="text-center my-heading-text">Sign Up </h2>
            <hr>

            <div class="row mt-5">
                <div class="col-md-12 text-center" style="color: #fff;">
                    <a href="{{route('login.facebook')}}" class="btn btn-md btn-social btn-facebook">
                        <i class="fa fa-facebook "></i> Continue with Facebook
                    </a>
                </div>


            </div>



            <div class="word-line-break text-bold mt-4"><span>or</span></div>

            <div class="row ">
                <div class=" col-md-6 mb-5 shadow-sms bg-white rounded offset-md-3 bg-light">
                    <form  class="mt-2 mb-5"   name="Signup-form"  action="{{url('register')}}" method="post">

                        <div class="form-group">

                            <input  type="text"  required class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter Username">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback-custom" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">

                            <input  type="email"  required class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter Email">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback-custom" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">

                            <input type="password" required class="form-control" id="pass" placeholder="Enter password" name="password">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback-custom" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group ">



                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirm password" required autocomplete="new-password">
                            @if ($errors->has('password-confirm'))
                                <span class="invalid-feedback-custom" role="alert">
                                    <strong>{{ $errors->first('password-confirm') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn my-btn1 btn-md"  id="Cbtn" >Sign Up</button>
                        </div>
                        {{csrf_field()}}

                    </form>

                    <p class="text-muted justify-content-center">Already have an account?<a href="{{url('/Sign-in')}}"> Signin</a></p>


                </div>
            </div>


        </div>
    </div>






@endsection