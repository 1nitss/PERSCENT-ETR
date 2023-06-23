<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5a10e0b94b.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <input type="checkbox" id="menu-toggle">
    <div class="sidebar1">
        <div class="side-header1">
            <img src="{{asset('images/logo.png')}}" alt="" srcset="" width="40%">
        </div>

        <div class="side-content1">

            <div class="side-menu1">
                <ul class="myul">
                    <li class="my-li">
                        <a href="{{'dashboard'}}">
                            <span style="color: white;"><i class="fa-solid fa-house"></i></span>
                            <small style="font-size: 18px;">Dashboard</small>
                        </a>
                    </li>
                    <li class="my-li">
                        <a href="{{'manage-product'}}">
                            <span style="color: white;"><i class="fa-solid fa-pencil"></i></span>
                            <small style="font-size: 18px;">Manage Products</small>
                        </a>
                    </li>
                    <li class="my-li">
                        <a href="{{'add-product'}}">
                            <span style="color: white;"><i class="fa-solid fa-copy"></i></span>
                            <small style="font-size: 18px;">Add Perfume Product</small>
                        </a>
                    </li>

                    <li class="my-li">
                        <a href="{{'view-orders'}}">
                            <span style="color: white;"><i class="fa-solid fa-cart-shopping"></i></span>
                            <small style="font-size: 18px;">Customer Orders</small>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>