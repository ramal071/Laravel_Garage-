<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Garage | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
           
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" action="{{ route('auth.check')}}" method="post">
                {{csrf_field() }}

                @if(session()->has('error'))
                <div class="alert danger">
                {{session()->get('error')}}
              </div>
                @endif 
    
            <div class="form-group">
              <input type="email" name="email" id="email" class="form-control @error ('email') is-invalid @enderror" placeholder="Email Address">
              @error ('email')
                  <div class="alert danger"> {{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control @error ('password') is-invalid @enderror" placeholder="Password">
                    @error ('password')
                        <div class="alert danger"> {{ $message }}</div>
                    @enderror
            </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                {{-- <a href="#"><small>Forgot password?</small></a> --}}


                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register">Create an account</a>
            </form>
            <p class="m-t"> <small>ramal071&copy; 2021</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>



