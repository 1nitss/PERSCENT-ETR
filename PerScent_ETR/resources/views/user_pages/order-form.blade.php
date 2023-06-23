<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PerScent | Finalize Order</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  
</head>
<body>
  @include('layouts.homeheader')
  <section class="py-5" style="height: 100vh">
    <form action="{{ route('order.store') }}" method="POST">
      @csrf
      <input type="hidden" name="product_price" value="{{ $product_price }}">
      <input type="hidden" name="product_name" value="{{ $product_name }}">
      <input type="hidden" name="product_id" value="{{ $product_id }}">
    <input type="hidden" name="product_image" value="{{ $product_image }}">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6 border border-dark-1 rounded"><img class="card-img-top mb-5 mb-md-0" src="{{ asset('perfume/' . $product_image) }}" alt="..." /></div>
            <div class="col-md-6">
                <div class="small mb-1 px-2">
                  <i class="bi bi-arrow-return-left"></i>
                  <a  class = "text-decoration-underline text-dark"href="{{route('home')}}">BACK TO HOMEPAGE</a>
                </div>
                <h1 class="display-5 fw-bolder">{{$product_name}}</h1>
                <div class="fs-5 mb-5">
                    <span>{{$product_price}}</span>
                </div>
                <p class="lead">{{$product_desc}}</p>
                <div class="d-flex">
                    <input class="form-control text-center me-3" name="quantity" id="quantity" type="number" value="1" style="max-width: 5rem" min = '1'/>
                    <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                        <i class="bi bi-bag"></i>
                        BUY NOW
                    </button>
                </div>
            </div>
        </div>
    </div>
  </form>
</section>
  @include('layouts.footer')
</body>
</html>
