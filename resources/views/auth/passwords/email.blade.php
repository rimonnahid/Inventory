<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Forgot password</title>

    <link href="{{ asset('public/back/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/back/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('public/back/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/back/css/style.css') }}" rel="stylesheet">

</head>

<body class="gray-bg">


    <div class="passwordBox animated fadeInDown">
        <div class="row">

            <div class="col-md-12">
                <div class="ibox-content">

                    <h2 class="font-bold">Forgot password</h2>

                    <p>
                        Enter your email address and your password will be reset and emailed to you.
                    </p>

                    <div class="row">

                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="@gmail.com" autofocus >

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <button type="submit" class="btn btn-primary block full-width m-b">Send new password</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Example Company
            </div>
            <div class="col-md-6 text-right">
               <small>© 2020-2025</small>
            </div>
        </div>
    </div>



</body>

</html>


