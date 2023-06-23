<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PerScent</title>
        <link rel="stylesheet" href="{{asset('css/search.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/c02acb97e0.js" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg p-3 sticky-top">
            <div class="container d-flex justify-content-between">
                <div>
                    <a class="navbar-brand" href="#!"><img src="{{ asset('images/logo2.png') }}" alt="" srcset="" width="60%"></a>
                </div>
                <div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                            <li class="nav-item">   <div class="container">
                                <form action="{{ route('search') }}" method="get">
                                    @csrf
                                    <div class="search m-0">
                                        <input type="text" class="search-input" placeholder="Search..." name="search_query">
                                        <button type="submit" class="search-icon"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div></li>
                            <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ route('home') }}" style="font-weight: bold">Home</a></li>

                            <li class="nav-item"><a class="nav-link" href="{{ route('favorites.index')}}" style="font-weight: bold">Favorites</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('user.orders')}}" style="font-weight: bold">Orders</a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"  style="font-weight: bold" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    style="font-weight: bold"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </body>
</html>
