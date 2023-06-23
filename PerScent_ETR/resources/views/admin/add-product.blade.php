<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5a10e0b94b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</head>

<body>
    @include('layouts.admin-header')

    <div class="main-content">

        <header>
            <div class="header-content mb-2">
                <label for="menu-toggle">


                    <img src="{{ asset('images/logo2.png') }}" alt="" srcset="" width="200px">

                </label>
            </div>
        </header>


        <main>

            <div class="page-header">
                <h3 id="date-time" class="text-uppercase font-weight-bold mt-3">
                    {{ \Carbon\Carbon::now()->format('F d, Y h:i A') }}</h3>
            </div>
            <div class="page-content">
                <!-- edit-product.blade.php -->
<center><h2>ADD PERFUME PRODUCT</h2></center>
               <div class="bg-white p-5 m-5 rounded">
                @if (session('congrats'))
<div class="alert alert-success">{{ session('congrats') }}</div>
@endif

<form action="{{ route('product.add') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Input fields for other product details -->
    <div class="form-group mb-3">
        <label for="perfume_name">Perfume Name</label>
        <input type="text" class="form-control @error('perfume_name') is-invalid @enderror" name="perfume_name" >
        @error('perfume_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="perfume_description">Perfume Description</label>
        <textarea class="form-control @error('perfume_desc') is-invalid @enderror" name="perfume_desc" ></textarea>
        @error('perfume_desc')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="price">Price</label>
        <input type="number" step="0.01" class="form-control @error('perfume_price') is-invalid @enderror" name="perfume_price" >
        @error('perfume_price')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="stocks">Stocks</label>
        <input type="number" class="form-control @error('stocks') is-invalid @enderror" name="stocks" >
        @error('stocks')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <!-- Input field for the perfume image -->
    <div class="form-group mb-3">
        <label for="perfume_image">Perfume Image</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input @error('perfume_image') is-invalid @enderror" id="perfume_image" name="perfume_image">
        </div>
        @error('perfume_image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update Product</button>
</form>

               </div>
                
            </div>

        </main>

    </div>
</body>

</html>
