<?php
require_once './header.php';


function clean($data)
{
    $sanitize = new Sanitize();
    $data = $sanitize->clean($data);
    return $data;
}

$host = "webdev.iyaserver.com";
$userid = "lewischr";
$userpw = "Iya6521484446";
$db = "lewischr_recipes";

$mysqli = new mysqli ($host, $userid, $userpw, $db);

if ($mysqli->connect_errno) {
    echo "db connection error" . $mysqli->connect_error;
    exit("STOPPING page");
}

$maxResults = 15;

$sql="SELECT ingredient, COUNT(ingredient) as count
FROM lewischr_recipes.recipe_ingredient_join
GROUP BY ingredient order by count desc limit $maxResults";

if(!$results = $mysqli->query($sql)) {
    exit();
}

$ingrLabels = [];
$ingrData = [];

while ($row = $results->fetch_assoc()){
    array_push($ingrLabels, $row['ingredient']);
    array_push($ingrData, $row['count']);

}

json_encode($ingrLabels);
json_encode($ingrData);



$sql="SELECT diet, COUNT(diet) as count
FROM lewischr_recipes.recipe_diet_join
GROUP BY diet order by count desc limit $maxResults";

if(!$results = $mysqli->query($sql)) {
    exit();
}

$dietLabels = [];
$dietData = [];

while ($row = $results->fetch_assoc()){
    array_push($dietLabels, $row['diet']);
    array_push($dietData, $row['count']);

}

json_encode($dietLabels);
json_encode($dietData);



$sql="SELECT meal, COUNT(meal) as count
FROM lewischr_recipes.recipe_meal_join
GROUP BY meal order by count desc limit $maxResults";

if(!$results = $mysqli->query($sql)) {
    exit();
}

$mealLabels = [];
$mealData = [];

while ($row = $results->fetch_assoc()){
    array_push($mealLabels, $row['meal']);
    array_push($mealData, $row['count']);

}

json_encode($mealLabels);
json_encode($mealData);



?>
<html lang="en-us">
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
            width: 30%;
            float: left;
            margin: 40px auto auto;
        }
        #allCharts{

            margin-left: 5%;
            margin-top: 100px;
        }
        @media screen and (max-width: 400px){
            .charts{
                margin-left: -31px;
                width: 400px;
                float: left;
                margin-top: 40px;
            }
        }
    </style>
    <title>Data Visualizations</title>
</head>
<body>
<div id="allCharts">
    <h1>Top 15 Filters by Category</h1>
<div class="charts">

<canvas id="ingredChart" class="chart" ></canvas>

<script>

    var ctx = document.getElementById('ingredChart').getContext('2d');
    var chart = new Chart(ctx, {
// The type of chart we want to create
        type: 'doughnut',

// The data for our dataset
        data: {
            labels: <?=json_encode($ingrLabels) ?>,
            datasets: [{
                label: "My First dataset",
                backgroundColor: 'rgb(170, 224, 209)',
                borderColor: '#ffffff',
                data: <?=json_encode($ingrData) ?>,
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

    <canvas id="mealChart" class="chart" ></canvas>

    <script>

        var ctx = document.getElementById('mealChart').getContext('2d');
        var chart = new Chart(ctx, {
// The type of chart we want to create
            type: 'doughnut',

// The data for our dataset
            data: {
                labels: <?=json_encode($mealLabels) ?>,
                datasets: [{
                    label: "My First dataset",
                    backgroundColor: 'rgb(170, 216, 224)',
                    borderColor: '#ffffff',
                    data: <?=json_encode($mealData) ?>,
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

    <canvas id="dietChart" class="chart" ></canvas>

    <script>

        var ctx = document.getElementById('dietChart').getContext('2d');
        var chart = new Chart(ctx, {
// The type of chart we want to create
            type: 'doughnut',

// The data for our dataset
            data: {
                labels: <?=json_encode($dietLabels) ?>,
                datasets: [{
                    label: "My First dataset",
                    backgroundColor: 'rgb(120, 187, 188)',
                    borderColor: '#ffffff',
                    data: <?=json_encode($dietData) ?>,
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