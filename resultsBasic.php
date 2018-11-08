<?php

$host = "webdev.iyaserver.com";
$userid = "lewischr";
$userpw = "Iya6521484446";
$db = "lewischr_recipes";

$mysqli = new mysqli ($host, $userid, $userpw, $db);

if ($mysqli->connect_errno) {
    echo "db connection error" . $mysqli->connect_error;
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
        #resultsDiv {
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

        .searchResult {
            width: 250px;
            margin: 30px;
            background-color: rgb(255, 255, 255);
            border-radius: 10px;
            padding-bottom: 15px;
            -webkit-box-shadow: -1px 0px 7px 1px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: -1px 0px 7px 1px rgba(0, 0, 0, 0.1);
            box-shadow: -1px 0px 7px 1px rgba(0, 0, 0, 0.1);
            height: auto;
            float: left;
        }

        .recipeImage {
            width: 100%;
            margin-bottom: 0px;
            position: relative;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            font-size: 11pt;
        }

        .recipeInfo {
            width: 230px;
            margin: 10px;
            color: grey;

        }

        .recipeName {
            font-size: 16pt;
            line-height: 22pt;
            font-weight: bold;
            font-family: Lato, Helvetica, sans-serif;
            color: black;
        }

        .tags {
            padding: 2px 10px 2px 10px;
            background-color: rgb(98, 168, 214);
            border-radius: 10px;
            margin-top: 10px;
            margin-right: 5px;
            float: left;
            color: white;
            font-size: 10pt;
        }
        .outLink {
            height: 15px;
            float: right;
        }
    </style>
</head>
<body>
<?php
include_once 'header.php';
?>

<div id="resultsDiv">
    <?php
    if($_REQUEST) {
        echo "<h3>Recipes containing: " . $_REQUEST["ingred1"] . ",  " . $_REQUEST["ingred2"] . ",  " . $_REQUEST["ingred3"] . "</h3><br><br>";

        $sql = "SELECT * FROM lewischr_recipes.all_data_view
    WHERE ingredient IN ('" . $_REQUEST["ingred1"] . "' , '" . $_REQUEST["ingred2"] . "', '" . $_REQUEST["ingred3"] . "') GROUP BY title";
    } else {
        $sql = "SELECT * FROM lewischr_recipes.all_data_view WHERE 1 group by ID";
    }
    if ($result = $mysqli->query($sql)) {

        while ($row = $result->fetch_assoc()) {
            echo '<div class="searchResult">
            <img class="recipeImage" src="'.$row["imgURL"].'">
            <div class="recipeInfo">
            <span class="recipeName"><strong>' . $row['title'] . '</strong>
            <a href="'.$row["url"].'" target="_blank" ><img class="outLink" src="Asset%204.png"> </a> 
            <br></span>
            <em>' . $row['description'] . '</em>
            <br>';
            //echo '<div class="tags">'.$row["ID"].'</div>';

            $sqlMeals = "SELECT * FROM lewischr_recipes.recipe_meal_join WHERE mID=" . $row["ID"];
            //echo $sqlDiets;
            if ($mealTagResult = $mysqli->query($sqlMeals)) {
                while ($mealTagRow = $mealTagResult->fetch_assoc()) {
                    //echo '<div class="tags">'.$row["ID"].'</div>';
                    echo '<div class="tags">'.$mealTagRow["meal"].'</div>';
                    //var_dump($mysqli);
                }
            }
            else {
                var_dump($mysqli);
            }
            $sqlDiets = "SELECT * FROM lewischr_recipes.recipe_diet_join WHERE dID=" . $row["ID"];
            //echo $sqlDiets;
            if ($dietTagResult = $mysqli->query($sqlDiets)) {
                while ($dietTagRow = $dietTagResult->fetch_assoc()) {
                    //echo '<div class="tags">'.$row["ID"].'</div>';
                    echo '<div class="tags">'.$dietTagRow["diet"].'</div>';
                    //var_dump($mysqli);
                }
            }
            else {
                var_dump($mysqli);
            }
            echo '</div></div>';
        }
    }
    ?>
</div>

</body>
</html>
