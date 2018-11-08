
<?php

$host = "webdev.iyaserver.com";
$userid = "lewischr";
$userpw = "Iya6521484446";
$db = "lewischr_recipes";

$mysqli = new mysqli (
    $host,
    $userid,
    $userpw,
    $db

);
if($mysqli -> connect_errno){
    echo "db connection error" . $mysqli -> connect_error;
    exit("STOPPING page");
}
?>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="generalStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat:400,700" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Pantry Pal</title>
    <style>
        #resultsDiv{
            width: 80%;
            background-color: white;
            height: auto;
            min-height: 600px;
            margin: 100px auto 0;
            padding: 40px;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;

        }
        .resultsRecipe{
            width: 20%;
            float: left;
            margin-right: 10px;

        }
        .resultsDescr{
            width: 60%;
            float: left;
            margin-right: 20px;
        }
        .resultsHyper{
            width: 10%;
            float: left;

        }
        /*.headerresults{*/
            /*float: left;*/
            /*font-weight: bold;*/

        /*}*/
        .HRecipe{
            float: left;
            font-weight: bold;
            width: 20%;
            margin-right: 10px;
        }
        .HDescr{
            float: left;
            font-weight: bold;
            width: 60%;
            margin-right: 20px;
        }
        .HLink{
            float: left;
            font-weight: bold;
            width: 10%;
        }
        .resultslink{
            font-family: 'Montserrat', sans-serif;
            color: black;
            font-size: 16pt;
        }
    </style>
</head>
<body>
<div id="header">
    <img src="pantrypal.png" id="masthead">
    <a class="account" href=""> my account</a>
</div>

<div id="resultsDiv">
    <?php
    echo "<h3>Recipes containing: " . $_REQUEST["ingred1"] . ",  " . $_REQUEST["ingred2"] . ",  " . $_REQUEST["ingred3"] ."</h3><br><br>";


    ?>

    <div class="HRecipe"> Recipe </div><div class="HDescr"> Description </div ><div class="HLink"> Recipe Link </div> <br><hr>

<?php
$sql = "
    SELECT *
    FROM lewischr_recipes.recipe r
    JOIN lewischr_recipes.recipe_ingredient ri ON r.ID = ri.recipe_ID
JOIN lewischr_recipes.ingredients i ON i.ID = ri.ingredient_ID
    WHERE i.ingredient IN ('" . $_REQUEST["ingred1"] . "' , '" . $_REQUEST["ingred2"] . "', '" . $_REQUEST["ingred3"] . "')";

//echo $sqli;

$results = $mysqli -> query($sql);

if(!$results){
    echo "<br>";
    echo "SQL error: " . $mysqli -> error;
}

while($currentrow = $results -> fetch_assoc()){
    echo "<div class='resultsRecipe'>" . $currentrow['recipename'] . "</div>" . "<div class='resultsDescr'>" . $currentrow['description'] . "</div>" . "<div class='resultsHyper'><a class='resultslink' href='". $currentrow['url']. "'>" . "link here" . "</a></div>".  "<br></nr><br>";
}
?>
</div>

</body>
</html>
