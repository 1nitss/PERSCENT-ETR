<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Favorites</title>
    <link rel="stylesheet" href="{{ asset('css/favorites.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    @include('layouts.homeheader')
    <section class="section-products" style = "height: 100vh" >
        <div class="container">
            @if ($favorites->isEmpty())
        <center><p>No favorites added.</p></center>
        @else
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-lg-6">
                    <div class="header">
                        <h2>YOUR FAVORITES</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Product -->
                @foreach ($favorites as $favorite)
                <div class="col-md-6 col-lg-4 col-xl-3 shadow-lg pt-2">
                    <div id="product-1" class="single-product">
                        <div class="part-1">
                            <img src="{{ asset('perfume/' . $favorite->product_image) }}" alt="" style="width: 100%; height: 100%; ">
                            <ul>
                                <li><a href="{{ route('order.form', ['product_name' => $favorite->product_name, 'product_desc' => $favorite->perfume_desc, 'product_image' => $favorite->product_image, 'product_price' => $favorite->price, 'product_id' => $favorite->product_id]) }}"  class="shadow-lg"><i class="fas fa-shopping-cart"> ORDER NOW</i></a></li>
                            </ul>
                        </div>
                        
                        <div class="part-2 text-center">
                            <h3 class="product-title">{{ $favorite->product_name }}</h3>
                            <h4 class="text-secondary">{{ $favorite->price }}</h4><br>
                            
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>
    
    @include('layouts.footer')
</body>

</html>