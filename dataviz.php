<?php
require_once './header.php';
?>
<html>
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style/generalStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body{
            background: none;
        }
        .charts{
            margin-left: 50px;
            width: 400px;
            float: left;
            margin-top: 40px;
        }
        #allCharts{

            margin-left: 5%;
            margin-top: 100px;
        }
        @media screen and (max-width: 400px){
            .charts{
                margin-left: -30px;
                width: 400px;
                float: left;
                margin-top: 40px;
            }
        }
    </style>
</head>
<body>
<div id="allCharts">
    <h1>Top 5 Filters by Category</h1>
<div class="charts">

<canvas id="ingredChart" width="300" height="300" ></canvas>

<script>

    var ctx = document.getElementById('ingredChart').getContext('2d');
    var chart = new Chart(ctx, {
// The type of chart we want to create
        type: 'doughnut',

// The data for our dataset
        data: {
            labels: ["ingredient1", "ingredient2", "ingredient3", "ingredient4", "ingredient5"],
            datasets: [{
                label: "My First dataset",
                backgroundColor: 'rgb(170, 224, 209)',
                borderColor: '#ffffff',
                data: [0, 10, 5, 2, 20],
            }]
        },

// Configuration options go here
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Ingredients'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    });
</script>
</div>

<div class="charts">

    <canvas id="mealChart" width="300" height="300" ></canvas>

    <script>

        var ctx = document.getElementById('mealChart').getContext('2d');
        var chart = new Chart(ctx, {
// The type of chart we want to create
            type: 'doughnut',

// The data for our dataset
            data: {
                labels: ["ingredient1", "ingredient2", "ingredient3", "ingredient4", "ingredient5"],
                datasets: [{
                    label: "My First dataset",
                    backgroundColor: 'rgb(170, 216, 224)',
                    borderColor: '#ffffff',
                    data: [0, 10, 5, 2, 20],
                }]
            },

// Configuration options go here
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Meal Type'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
            }
        });
    </script>
</div>

<div class="charts">

    <canvas id="dietChart" width="300" height="300" ></canvas>

    <script>

        var ctx = document.getElementById('dietChart').getContext('2d');
        var chart = new Chart(ctx, {
// The type of chart we want to create
            type: 'doughnut',

// The data for our dataset
            data: {
                labels: ["ingredient1", "ingredient2", "ingredient3", "ingredient4", "ingredient5"],
                datasets: [{
                    label: "My First dataset",
                    backgroundColor: 'rgb(120, 187, 188)',
                    borderColor: '#ffffff',
                    data: [0, 10, 5, 2, 20],
                }]
            },

// Configuration options go here
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Diet'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
            }
        });
    </script>
</div>
</div>

</body>
</html>