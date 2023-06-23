<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="{{ asset('js/search.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/homestyles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c02acb97e0.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

    @if ($errors->any())
        <script>
            swal("Error", "{{ $errors->first() }}", "error");
        </script>
    @endif
    @include('layouts.homeheader')
    <div class="container mt-4">
    </div>
    @if ($perfumeProducts->isEmpty())
    <section>
    @else
    <section style="height: 100vh">
    @endif
        <div class="row">
            <h2 class="text-secondary text-center">Search Results for: "{{ $searchQuery }}"</h2>
            @if ($perfumeProducts->isEmpty())
            <div class="col-12 text-center d-flex align-items-center justify-content-center" style="height: 100vh;">
                <div>
                    <p class="text-secondary text-bold">No results found.</p>
                    <img src="{{ asset('images/box.png') }}" alt="" width="20%">
                </div>
            </div>
            
            @else
                @foreach ($perfumeProducts as $perfumeProduct)
                    <div class='col-md-3 col-sm-6'>
                        <div class='product-grid shadow-lg overflow-hidden' style="background-color: white">
                            <div class='product-image' style="border: 1px solid black">

                                @csrf
                                <a href='' class='image'>
                                    <img src='{{ asset('perfume/' . $perfumeProduct->perfume_image . '') }}'>
                                </a>

                                <ul class='product-links'>
                                    <form action="{{ route('favorites.store') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $perfumeProduct->id }}">
                                        <input type="hidden" name="product_name"
                                            value="{{ $perfumeProduct->perfume_name }}">
                                        <input type="hidden" name="product_desc"
                                            value="{{ $perfumeProduct->perfume_desc }}">
                                        <input type="hidden" name="product_image"
                                            value="{{ $perfumeProduct->perfume_image }}">
                                        <input type="hidden" name="product_price"
                                            value="{{ $perfumeProduct->perfume_price }}">

                                        <li><button type="submit"><i class='fa-solid fa-star'
                                                    style='color: red;'></i></button></li>
                                    </form>
                                </ul>
                                <form method='post'>
                                    <a href="{{ route('order.form', ['product_name' => $perfumeProduct->perfume_name, 'product_desc' => $perfumeProduct->perfume_desc, 'product_image' => $perfumeProduct->perfume_image, 'product_price' => $perfumeProduct->perfume_price, 'product_id' => $perfumeProduct->id]) }}"
                                        class="add-to-cart">BUY NOW</a>

                                </form>

                            </div>

                            <div class='product-content'>
                                <h5 class='title'><a href=''>{{ $perfumeProduct->perfume_name }}</a></h5>
                                <div class='Seller'>
                                    <p>{{ $perfumeProduct->perfume_desc }}</p>
                                    <p>stocks: {{ $perfumeProduct->stocks }}</p>
                                </div>
                                <hr>
                                <div class='price'>
                                    <p><i class='fa-solid fa-peso-sign'></i>{{ $perfumeProduct->perfume_price }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
    @include('layouts.footer')

</body>

</html>
