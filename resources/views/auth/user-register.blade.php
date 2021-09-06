<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <link href="{{asset('bootstrap.min.css')}}" rel="stylesheet">
    {{--    <link href="{{asset('css/admin-login.css')}}" rel="stylesheet">--}}
    {{--    <link href="{{asset('css/admin-login.css')}}" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&amp;display=swap"
          rel="stylesheet">
    {{--    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>--}}
    <script type="text/javascript"
            src="{{ \Illuminate\Support\Facades\URL::asset('jquery/3.5.1/jquery.min.js')}}"></script>

    <style>
        .login-block {
            background: #05728f; /* fallback for old browsers */
            /*background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  !* Chrome 10-25, Safari 5.1-6 *!*/
            /*background: linear-gradient(to bottom, #FFB88C, #DE6262); !* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ *!*/
            float: left;
            width: 100%;
            height: 100vh;
            padding: 50px 0;
        }

        .banner-sec {
            background: url(/pexels-photo.jpg) no-repeat left bottom;
            background-size: cover;
            min-height: 570px;
            border-radius: 0 10px 10px 0;
            padding: 0;
        }

        .container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 15px 20px 0px rgba(0, 0, 0, 0.1);
        }

        .carousel-inner {
            border-radius: 0 10px 10px 0;
        }

        .carousel-caption {
            text-align: left;
            left: 5%;
        }

        .login-sec {
            padding: 0px 30px;
            position: relative;
        }

        .login-sec .copy-text {
            position: absolute;
            width: 80%;
            bottom: 20px;
            font-size: 13px;
            text-align: center;
        }

        .login-sec .copy-text i {
            color: #05728f;
        }

        .login-sec .copy-text a {
            color: #05728f;
        }

        .login-sec h2 {
            /*margin-bottom: 30px;*/
            font-weight: 800;
            font-size: 30px;
            color: #05728f;
        }

        .login-sec h2:after {
            content: " ";
            width: 100px;
            height: 5px;
            background: #05728f;
            display: block;
            margin-top: 20px;
            border-radius: 3px;
            margin-left: auto;
            margin-right: auto
        }

        .btn-login {
            background: #05728f;
            color: #fff;
            font-weight: 600;
        }

        .banner-text {
            width: 70%;
            position: absolute;
            bottom: 40px;
            padding-left: 20px;
        }

        .banner-text h2 {
            color: #fff;
            font-weight: 600;
        }

        .banner-text h2:after {
            content: " ";
            width: 100px;
            height: 5px;
            background: #FFF;
            display: block;
            margin-top: 20px;
            border-radius: 3px;
        }

        .banner-text p {
            color: #fff;
        }
    </style>
</head>

<body>

<section class="login-block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 login-sec">

                <h2 class="text-center">SGSS</h2>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <h4>{{$errors->first()}}</h4>
                    </div>
                @endif
                <h3 class="text-center">User Register</h3><br>
                <form class="login-form" method="POST" action="{{ url('register-user') }}" onsubmit="return onSubmitForm();">
                    @csrf
                    <div class="form-group text-center">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="radio" name="type" value="student" checked> Student
                            </div>
                            <div class="col-lg-6">
                                <input type="radio" name="type" value="family"> Family
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="text-uppercase">Name</label>
                        <input type="text" class="form-control" placeholder="" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="text-uppercase">Email</label>
                        <input type="text" class="form-control" placeholder="" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                        <input type="password" class="form-control" placeholder="" id="password" name="password"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="text-uppercase">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="" id="confirmPassword" name="confirmPassword"
                               required>
                    </div>
                    <p id="passwordNotMatchError" style="color: red;display: none">Password and Confirm Password doesn't
                        match.</p>
                    <div class="form-check">
                        <button type="submit" class="btn btn-login float-right">Submit</button>
                    </div>
                    <div style="text-align: center"><h4>Already Registered? <a style="text-decoration: underline"
                                                                         href="{{url('/')}}">Login Now</a>
                        </h4></div>
                </form>
            </div>
            <div class="col-md-8 banner-sec">

            </div>
        </div>
    </div>
</section>
</body>
</html>
<script>
    function onSubmitForm() {
        if (document.getElementById('confirmPassword').value !== document.getElementById('password').value) {
            document.getElementById('passwordNotMatchError').style.display = 'block';
            return false;
        }
    }
</script>

<script>
    $("#login-button").click(function (event) {
        event.preventDefault();

        $('form').fadeOut(500);
        $('.wrapper').addClass('form-success');
    });
</script>


