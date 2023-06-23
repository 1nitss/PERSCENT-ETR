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
    @include('header')
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="fadeIn first">
                <img src="images/Picture1.png" id="icon" alt="User Icon" style="width: 450px; padding: 50px" />
            </div>
            <form method="POST" id="form" action="{{ route('register') }}">
                @csrf
                <input type="text" id="name" class="fadeIn form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" placeholder="Enter Your name" autocomplete="name"
                    autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="text" id="email" class="fadeIn form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" placeholder="Enter Your email" autocomplete="email"
                    autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br>
                <input type="text" id="password"
                    class="fadeIn third form-control @error('password') is-invalid @enderror" name="text"
                    autocomplete="current-password" placeholder="Your Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" id="password"
                class="fadeIn third form-control @error('password') is-invalid @enderror" name="password_confirmation"
                autocomplete="new-password" placeholder="Confirm Your Password">


                <input type="submit" name="submit" class="fadeIn fourth btn btn-submit" value="Log In">
            </form>
        </div>
    </div>
    @include('footer')
</body>

</html>
