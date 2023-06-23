<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PerScent</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/c02acb97e0.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg p-3 sticky-top">
    <div class="container  d-flex justify-content-between">
        <div>
            <a class="navbar-brand" href="#!"><img src="{{asset('images/logo2.png')}}" alt="" srcset="" width="60%"></a>
        </div>
        <div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link" aria-current="page" href="{{'welcome'}}"  style = "font-weight: bold">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{'about'}}" style = "font-weight: bold">About</a></li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item"><a class="nav-link" href="{{url('/home')}}" style = "font-weight: bold">Shop Now</a></li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{route('login')}}" style = "font-weight: bold">Log in</a></li>

                            @if(Route::has('register'))
                            <li class="nav-item"><a class="nav-link" href="{{route('register')}}" style = "font-weight: bold">Register</a></li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav>
    </body>
</html>
