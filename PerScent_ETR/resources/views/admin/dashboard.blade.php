<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/5a10e0b94b.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>
    @include('layouts.admin-header')

    <div class="main-content">

        <header>
            <div class="header-content mb-2">
                <label for="menu-toggle">


                    <img src="{{asset('images/logo2.png')}}" alt="" srcset="" width="200px">

                </label>
            </div>
        </header>


        <main>

            <div class="page-header">
                <h3 id="date-time" class="text-uppercase font-weight-bold mt-3">    {{ \Carbon\Carbon::now()->format('F d, Y h:i A') }}</h3>
            </div>

            <div class="page-content">
                <center><h5>MOST POPULAR PRODUCTS</h5></center>
                <hr>
                <canvas id="productChart"></canvas>
                <center><h5>TOTAL SALES PER MONTH</h5></center>
                <hr>
                <canvas id="monthlySalesChart"></canvas>
                <script>
                    var productCounts = @json($productCounts);
                    var monthlySales = @json($monthlySales);
                
                    var productCtx = document.getElementById('productChart').getContext('2d');
                    var monthlySalesCtx = document.getElementById('monthlySalesChart').getContext('2d');
                
                    // Product Counts Chart
                    var productLabels = Object.keys(productCounts);
                    var productData = Object.values(productCounts);
                
                    var productChart = new Chart(productCtx, {
                        type: 'bar',
                        data: {
                            labels: productLabels,
                            datasets: [{
                                label: 'Total product bought by users',
                                data: productData,
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    stepSize: 1
                                }
                            }
                        }
                    });
                
                    // Monthly Sales Chart
                    var monthlyLabels = Object.keys(monthlySales);
                    var monthlyData = Object.values(monthlySales);
                
                    var monthlySalesChart = new Chart(monthlySalesCtx, {
                        type: 'bar',
                        data: {
                            labels: monthlyLabels,
                            datasets: [{
                                label: 'Total Sales per Month',
                                data: monthlyData,
                                backgroundColor: 'rgba(192, 75, 75, 0.2)',
                                borderColor: 'rgba(192, 75, 75, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    stepSize: 1
                                }
                            }
                        }
                    });
                </script>
                
            </div>

        </main>

    </div>
</body>

</html>