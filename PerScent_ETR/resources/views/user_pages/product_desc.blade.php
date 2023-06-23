<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PerScent | Finalize Order</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('css/product_desc.css')}}">
</head>
<body>
  @include('layouts.homeheader')
  <section class="py-5">
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
            </div>
        </div>
    </div>
  </form>
  
<center><hr width="85%"></center>
</section>

<div class="container">   
  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
  <div class="row">
        <div class="col-sm-8">   
            <form action="{{ route('comment.store') }}" method="POST">
              @csrf
              <input type="hidden" name="product_id" value="{{ $product_id }}">
              <input type="hidden" name="user_no" value="{{ Auth::user()->id }}">
              <input type="hidden" name="username" value="{{ Auth::user()->name }}">
              <h3 class="pull-left">New Comment</h3>
                    <div class="row my-2">
                        <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                            <textarea class="form-control" id="message" placeholder="Your message" name="comment" required></textarea>
                        </div>
                    </div>  
                    
              <button type="submit" class="btn btn-primary bg-gradient my-2">Submit Comment</button>	
            </form>
            @if($comments->count() > 1)
            <h3 class="letter-spacing-1">{{ $comments->count() }} COMMENTS</h3>
            @else
            <h3 class="letter-spacing-1">{{ $comments->count() }} COMMENT</h3>
            @endif
            <hr>
            @if ($comments->isEmpty())
            <p class="text-secondary text-bold">No Comments</p>
            @else
            @foreach ($comments as $comment)
            <div class="media">
                <div class="media-body">
                    <h4 class="media-heading text-bold">{{ $comment->username }}</h4>
                    <p>{{ $comment->comment }}</p>
                    <ul class="list-unstyled list-inline media-detail pull-left">
                      <li><i class="fa fa-calendar text-secondary" style="color:#212529"></i> {{ $comment->formatted_date }}</li>
                    </ul>
                </div>
                <hr>
            </div>
        @endforeach
        @endif
        </div>
    </div>
</div>
  @include('layouts.footer')
</body>
</html>
