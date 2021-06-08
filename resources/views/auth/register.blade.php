<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Garage | Register</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Register to IN+</h3>
            <p>Create account to see it in action.</p>
            <form class="m-t" role="form" action="{{ route('auth.create')}}" method="POST">
                @csrf

                <div class="results">
                    @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success')}}
                    </div>
                @endif

                @if (Session::get('fail'))
                <div class="alert danger">
                    {{ Session::get('fail')}}
                </div>
                @endif
                </div>
                

                <div class="form-group">
                    <input type="text" name="name" class="form-control @error ('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}">
                    @error ('name')
                    <div class="alert danger"> {{ $message }}</div>
            @enderror
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control @error ('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                    @error ('email')
                    <div class="alert danger"> {{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control @error ('password') is-invalid @enderror" placeholder="Password" value="{{ old('password') }}">
                    @error ('password')
                    <div class="alert danger"> {{ $message }}</div>
                @enderror
                </div>

                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="login">Login</a>
            </form>
           
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>


    <!-- iCheck -->
    {{-- <script src="js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        }); 
    </script>--}}
</body>

</html>
