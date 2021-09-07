<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <title>User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{url('')}}/admin/img/logo.png"/>

    <link type="text/css" rel="stylesheet" href="{{url('')}}/admin/css/components.css"/>
    <link type="text/css" rel="stylesheet" href="{{url('')}}/admin/css/custom.css"/>


    <link type="text/css" rel="stylesheet" href="{{url('')}}/admin/vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
    <link type="text/css" rel="stylesheet" href="{{url('')}}/admin/vendors/wow/css/animate.css"/>

    <link type="text/css" rel="stylesheet" href="{{url('')}}/admin/css/pages/login2.css"/>
</head>
<body class="login_background">
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{url('')}}/admin/img/loader.gif" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div class="container wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="row">
                <div class="col-lg-4  col-md-8 col-sm-12  mx-auto login_image login_section login_section_top">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center text-white">
                            <img src="{{url('')}}/admin/img/logo.png" alt="josh logo" class="admire_logo">
                        </h3>
                    </div>
                    <div class="row m-t-20">
                        {{--                        <div class="col-12">--}}
                        {{--                            <a class="text-success m-r-20 font_18">LOG IN</a>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="m-t-15">
                        <div >
                            <form class="login-form" method="POST" action="{{ url('register-user') }}" onsubmit="return onSubmitForm();">
                                @csrf
                                <div class="form-group text-center">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="radio" name="type" value="student" checked> <span style="color: white">Student</span>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="radio" name="type" value="family"> <span style="color: white">Family</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="text-uppercase" style="color: white">Name</label>
                                    <input type="text" class="form-control" placeholder="" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="text-uppercase" style="color: white">Email</label>
                                    <input type="text" class="form-control" placeholder="" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="text-uppercase" style="color: white">Password</label>
                                    <input type="password" class="form-control" placeholder="" id="password" name="password"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="text-uppercase" style="color: white">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="" id="confirmPassword" name="confirmPassword"
                                           required>
                                </div>
                                <p id="passwordNotMatchError" style="color: red;display: none">Password and Confirm Password doesn't
                                    match.</p>
                                <div class="form-check">
                                    <button type="submit" class="btn btn-mint btn-block">Submit</button>
                                </div>
                                <div style="text-align: center"><h4 style="color: white">Already Registered? <a style="text-decoration: underline;color: white"
                                                                                           href="{{url('/')}}">Login Now</a>
                                    </h4></div>
                            </form>

{{--                            <form class="login-form" method="POST" action="{{ url('login-user') }}">--}}
{{--                                @csrf--}}
{{--                                <h4 style="color: white">User Login</h4>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputEmail1" class="text-uppercase">Email</label>--}}
{{--                                    <input type="text" class="form-control" placeholder="" id="email" name="email" required>--}}

{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleInputPassword1" class="text-uppercase">Password</label>--}}
{{--                                    <input type="password" class="form-control" placeholder="" id="password" name="password"--}}
{{--                                           required>--}}
{{--                                </div>--}}
{{--                                @if($errors->any())--}}
{{--                                    <div class="alert alert-danger">--}}
{{--                                        <h4>{{$errors->first()}}</h4>--}}
{{--                                    </div>--}}
{{--                                @endif--}}

{{--                                <div class="form-check">--}}
{{--                                    <button type="submit" class="btn btn-mint btn-block">Submit</button>--}}
{{--                                </div>--}}
{{--                                <div style="text-align: center"><h4 style="color: white">Not a member? <a style="text-decoration: underline;color: white" href="{{url('/register')}}">Signup Now</a>--}}
{{--                                    </h4></div>--}}
{{--                            </form>--}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{url('')}}/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="{{url('')}}/admin/js/popper.js"></script>
<script type="text/javascript" src="{{url('')}}/admin/js/bootstrap.min.js"></script>


<script type="text/javascript" src="{{url('')}}/admin/vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="{{url('')}}/admin/vendors/wow/js/wow.min.js"></script>
<script type="text/javascript" src="{{url('')}}/admin/vendors/jquery.backstretch/js/jquery.backstretch.js"></script>

<script type="text/javascript" src="{{url('')}}/admin/js/pages/login2.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    function backHome() {
        window.location.href = `{{env('APP_URL')}}/`
    }
</script>

</html>
