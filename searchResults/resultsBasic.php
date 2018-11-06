
<?php

$host = "webdev.iyaserver.com";
$userid = "mvergeld";
$userpw = "Iya4341973099";
$db = "mvergeld_recipes";

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
        #resultsdiv{
            width: 80%;
            background-color: white;
            height: auto;
            min-height: 600px;
            margin: auto;
            margin-top: 100px;
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
        .resultsHyper
            width: 10%;
            float: left;

        }
        .headerresults{
            float: left;
            font-weight: bold;

        }
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
    <a class="account" href="account.html"> my account</a>
</div>

<div id="resultsdiv">
    <?php
    echo "<h3>Recipes containing: " . $_REQUEST["ingred1"] . ",  " . $_REQUEST["ingred2"] . ",  " . $_REQUEST["ingred3"] ."</h3><br><br>";


    ?>

    <div class="HRecipe"> Recipe </div><div class="HDescr"> Description </div ><div class="HLink"> Recipe Link </div> <br><hr>

<?php
$sqli = "
    SELECT *
    FROM recipe
    JOIN recipe_ingredient ON recipe.recipe_id = recipe_ingredient.recipe_ID
JOIN ingredients ON ingredients.ingredient_id = recipe_ingredient.ingredient_ID
    WHERE ingredients.name IN ('" . $_REQUEST["ingred1"] . "' , '" . $_REQUEST["ingred2"] . "', '" . $_REQUEST["ingred3"] . "')";

//echo $sqli;

$results = $mysqli -> query($sqli);

if(!$results){
    echo "<br>";
    echo "SQL error: " . $mysqli -> error;
} else {
    /*echo "<br>";
    echo "<br>";
    echo "query successful";
    echo "<br>";*/
}

while($currentrow = $results -> fetch_assoc()){
    echo "<div class='resultsRecipe'>" . $currentrow['recipename'] . "</div>" . "<div class='resultsDescr'>" . $currentrow['description'] . "</div>" . "<div class='resultsHyper'><a class='resultslink' href='". $currentrow['url']. "'>" . "link here" . "</a></div>".  "<br></nr><br>";
}
?>
</div>

</body>
</html>
