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
            <script>
                $(document).ready(function() {
                    $('#table').DataTable({
                        
                        ordering: false
                    });
                });
            </script>
            <div class="page-content bg-white" style="height: 90vh">
                <!-- Display success message if available -->
@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<h2>MANAGE PERFUME PRODUCTS</h2>
<hr>

                <table id="table" class="display" style="width: 100%">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>PERFUME IMAGE</th>

                            <th>PERFUME NAME</th>
                            <th>PERFUME DESCRIPTION</th>
                            <th>PRICE</th>
                            <th>STOCKS</th>
                            <th>UPDATE</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>

                                <td>
                                    <img src="{{ asset('perfume/' . $product->perfume_image . '') }}" alt=""
                                       width="100px" >
                                </td>
                                <td>{{ $product->perfume_name }}</td>
                                <td>{{ $product->perfume_desc }}</td>
                                <td>{{ $product->perfume_price }}</td>
                                <td>{{ $product->stocks }}</td>
                                <td>
                                    <a href="{{ route('product.edit', $product->id) }}" class="text-decoration-none text-black font-weight-bold">UPDATE PRODUCT</a>
                                </td>
                                <td>
                                    <a href="{{ route('product.delete', ['id' => $product->id]) }}" class="text-decoration-none text-black font-weight-bold">DELETE PRODUCT</a>
                                </td>




                            </tr>
                            <!-- Display other product information as needed -->
                        @endforeach
                    </tbody>
                </table>
            </div>

        </main>

    </div>
</body>

</html>
