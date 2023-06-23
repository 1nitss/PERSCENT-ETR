
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Orders</title>
</head>

<body style=" background-color:  #D2E9E9;overflow-x: hidden;">
    @include('layouts.homeheader')
    <section style="height: 100vh" class="my-5">
        <center>
            <h4>YOUR ORDERS</h4>
        </center>
        <hr style="color: black; margin: 80px;">
        @if ($orders->isEmpty())
       <center>
        <img src="{{asset('images/box.png')}}" alt="" width="20%">
        <h5 class="text-secondary mt-2">No orders found.</h5>
    </center>
        @else
            <div class="row justify-content-center">
                <div class="col-lg-5 mx-auto w-50">
                    <ul class="list-group">
                        @foreach ($orders as $order)
                            <li class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-sm">
                                        <img src="{{ asset('perfume/' . $order->product_image) }}" width="200">
                                    </div>
                                    <div class="col-sm">
                                        <div>
                                            <h5 class="mt-0 font-weight-bold mb-2">{{$order->product_name}}</h5>
                                            <p class="font-italic text-muted mb-0 small">QUANTITY ORDERED: {{$order->quantity}}</p>
                                            <p>ORDER DATE: {{ $order->created_at->format('M j, Y g:i A') }}</p>
                                            <div class="d-flex align-items-center justify-content-between mt-1">
                                                <h6 class="font-weight-bold my-2">TOTAL PRICE: {{$order->total_price}}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <br>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </section>
    
    @include('layouts.footer')
</body>

</html>
