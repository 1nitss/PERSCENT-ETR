<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PerScent</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c02acb97e0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>

<body>
    @include('layouts.header')
    <div class="wrapper ">
        <div id="formContent">
          <div class="">
            <img src="{{asset('images/logo.png')}}" id="icon" alt="User Icon" width="40%"/>
            
        </div><br>
            <form method="POST" id="form" action="{{ route('login')}}">
                @csrf
                <label for="email">Email Address:</label>
                <input type="text" id="email" class=" form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" placeholder="Enter Your email" autocomplete="email"
                    autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br>
                <label for="email">Password:</label>
                <input type="text" id="password"
                    class=" third form-control @error('password') is-invalid @enderror" name="password"
                    autocomplete="current-password" placeholder="Your Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="row mb-3 mt-3">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input " type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>


                <input type="submit" name="submit" class="btn btn-primary bg-gradient"
                    style="width: 85% ; padding: 10px; margin: 20px" value="Sign up">

            </form>
        </div>
    </div>

    @include('layouts.footer')
</body>

</html>
