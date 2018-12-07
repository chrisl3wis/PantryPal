<?php
require_once './header.php';

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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/generalStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat:400,700" rel="stylesheet">
    <script src="scripts/masonry.pkgd.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <title>Pantry Pal: Search Results</title>
    <style>
        body{
            background: white none;
        }
        #resultsDiv {
            background-color: white;
            height: auto;
            padding: 10px 0px 20px 10px;
            float: left;
            width: 100%;
            max-width: 1800px;

        }
        #resultsDiv:after {
            content: '';
            display: block;
            clear: both;
        }

        .searchResult {
            width: 250px;
            margin: 30px;
            background-color: rgb(255, 255, 255);
            border-radius: 10px;
            padding-bottom: 15px;
            -webkit-box-shadow: -1px 0 7px 1px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: -1px 0 7px 1px rgba(0, 0, 0, 0.1);
            box-shadow: -1px 0 7px 1px rgba(0, 0, 0, 0.1);
            height: auto;
            float: left;
            display: block;
            clear: both;
            box-sizing: content-box;
            position: relative;
            /*min-height: 350px;*/
        }

        .recipeImage {
            width: 100%;
            margin-bottom: 0;
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
            clear: both;

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
            background-color: #8AC1C6;
            border-radius: 10px;
            margin-top: 10px;
            margin-right: 5px;
            float: left;
            color: white;
            font-size: 10pt;
        }

        .resultsHeader{
            width: 100%;
            background-image:
        }
        .resultsHeader{
            background-image: url("images/mainBG.jpg");
            background-size: 140%;
            background-position-y: -500px;
            background-position-x: -30px;

            width: 100%;
            height: 400px;
        }
        .resultsHeaderText{
            color: white;
            padding-top: 160px;
            padding-left: 70px;
        }

        .saveRecipe{
            float: right;
            width: 20px;
            margin-left: 10px;
            margin-top: 10px;
            display: block;
        }

        @media screen and (max-width: 400px){
            .resultsHeader{
                background: none;
            }
            h1{
                color: black;
                margin-top: -50px;
            }
        }
    </style>
</head>
<body>
<div class="resultsHeader">
    <div class="resultsHeaderText">
        <h1>Recipes You Can Make...</h1>
    </div>

</div>
<div id="resultsDiv">
    <?php
    $usql = "SELECT * FROM lewischr_recipes.login WHERE email = '" . $fgmembersite->UserEmail() . "'";
    $ures = $mysqli->query($usql);
    $urow = $ures->fetch_assoc();
    $globalUserId = $urow['id'];

    $ingreds = $_REQUEST['ingreds'];
    for ($i = 0; $i<count($ingreds); $i++) {
        if(!empty($ingreds[$i])){
            $query.= "ingredient LIKE '%$ingreds[$i]%'";
            if (!empty($ingreds[$i+1])) $query .= " OR ";
        }
    }
    $query .= empty($query) ? " 1 " : "";

    $sql = "SELECT * FROM lewischr_recipes.all_data_view
    WHERE $query GROUP BY title";

    //    echo $sql;


    if ($result = $mysqli->query($sql)) {
        echo "<div id='numResults'>".$result->num_rows." results found </div>";

        while ($row = $result->fetch_assoc()) {
            echo '<a href="'.$row['url'].'" target="_blank" ><div class="searchResult"><div>
            <img class="recipeImage" alt="Recipe Image'.$row['title'].'" src="'.$row['imgURL'].'" >
            </div>
            <div class="recipeInfo">
            <span class="recipeName"><strong>' . $row['title'] . '</strong>
              
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
            $lsql = "SELECT * FROM lewischr_recipes.likes WHERE user_id =" . $globalUserId . " AND recipe_id =" . $row['ID'];
            $lres = $mysqli->query($lsql);
            if ($lres->fetch_assoc()) {
                echo '<a href="heart.php?heart=false&user_id=' . $globalUserId . '&recipe_id=' . $row['ID'] . '"><img class="saveRecipe" src="images/saved.png" alt="Saved"></a></div></div>';
            } else {
                echo '<a href="heart.php?heart=true&user_id=' . $globalUserId . '&recipe_id=' . $row['ID'] . '"><img class="saveRecipe" src="images/unsaved.png" alt="Not Saved"></a></div></div>';
            }
        }
    } else {
        var_dump($mysqli);
    }
    ?>
    <script src="scripts/masonry.pkgd.min.js"></script>
    <script>

        jQuery(window).on('load', function() {
            var $ = jQuery;

            let elem = document.querySelector('#resultsDiv');


            let msnry = new Masonry(elem, {

                itemSelector: '.searchResult',
                columnWidth: 160,
                gutterWidth: 20
            });
        });

    </script>
</div>

</body>
</html>