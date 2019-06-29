@extends('index')


@section('signin-section')

    <div class="container-fluid w-75" style="margin-top: 100px;">

        <div class="container shadow-sms p-3 mb-5  mt-5 bg-white rounded ">
            <h2 class="text-center my-heading-text ">LOGIN </h2>
            <hr>

            <div class="row mt-5">
                <div class="col-md-12 text-center" style="color: #fff;">
                    <a class="btn btn-md btn-social btn-facebook">
                        <i class="fa fa-facebook "></i> Login with Facebook
                    </a>
                </div>


            </div>



            <div class="word-line-break text-bold mt-4"><span>or</span></div>

            <div class="row ">
                <div class=" col-md-6 mb-5 shadow-sms bg-white rounded offset-md-3 bg-light">
                    <form  class="mt-2 mb-5"   name="login-form"  action="{{url('login')}}" method="post">

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
                        <div class="form-group text-center">
                            <button type="submit" class="btn my-btn1 btn-md"  id="Cbtn" >Login</button>
                        </div>
                        {{csrf_field()}}

                    </form>

                    <p class="text-muted justify-content-center">Don't have an account?<a href="{{url('/Sign-up')}}"> Signup</a></p>


                </div>
            </div>


        </div>
    </div>



@endsection