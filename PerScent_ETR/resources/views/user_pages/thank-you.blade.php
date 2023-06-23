<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank You</title>
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
</head>
<body>
    @include('layouts.homeheader')
    <div class="thankyou-page">
        <div class="_header">
            <div class="logo">
                <img src="{{asset('images/logo.png')}}" alt="">
            </div>
            <h1>Thank You!</h1>
        </div>
        <div class="_body">
            <div class="_box">
                <h3 style="text-align: justify">
                    <p>
                        Thank you for choosing PerScent: Perfume Store. Your support means the world to us. We hope your purchase brings you joy and enhances your style. We look forward to serving you again. Thank you!
                        
                    </p>
                </h3><br>
                <span>Warmest regards,
                    The PerScent Team</span>
            </div>
        </div>
        <div class="_footer">
            <a class="btn" href="{{'home'}}">Back to homepage</a>
        </div>
    </div>
    @include('layouts.footer')
</body>
</html>