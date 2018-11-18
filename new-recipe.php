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
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="generalStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat:400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <meta charset="UTF-8">
    <title>Pantry Pal-Add Recipe</title>
    <style>
        body {
            background-image: none;
            background-color: white;
        }

        #resultsDiv {
            background-color: white;
            height: auto;
            padding: 10px;
            float: left;
            width: 80%;

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

        #filters {
            width: 200px;
            padding: 25px;
            float: left;
            margin-left: 30px;
            margin-top: 30px;
            position: -webkit-sticky;
            position: sticky;
            top: 60px;

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
            background-color: #8AC1C6;
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

        .resultsHeader {
            width: 100%;
            background-image:
        }

        .resultsHeader {
            background-image: url("mainBG.jpg");
            background-size: 140%;
            background-position-y: -500px;
            background-position-x: -30px;
            width: 100%;
            height: 400px;
        }

        .resultsHeaderText {
            color: white;
            padding-top: 160px;
            padding-left: 70px;
        }

        .filterTag {
            padding: 2px 10px 2px 10px;
            background-color: #F4F4F4;
            border-radius: 5px;
            margin-top: 10px;
            margin-right: 5px;
            float: left;
            color: #9E9E9E;
            font-size: 10pt;
        }
        .mealCheck{
            float: left;
            width: 150px;
            margin-left: 20px;
            margin-right: 20px;
        }
        #diets{
            max-width: 500px;
            clear: both;
        }
        .dietCheck{
            float: left;
            width: 150px;
            margin-left: 20px;
            margin-right: 20px;
        }
        #meals{
            max-width: 500px;
            clear: both;
        }
        #content{

            padding-top: 60px;
            padding-left: 70px;
        }
        #submit{
            clear: both;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<?php
include_once 'header.php';
//REVIEW[chris]  Insert: Title, Desc, URL, Time, ingredients, diets, meals
//REVIEW[chris]  New ingredients, meals

?>
<script>
    $(function() {
        $("#ing_input").autocomplete({
            source: "search_ingred.php",
            select: function( event, ui ) {
                event.preventDefault();
                $("#ing_input").val(ui.item.id);
            }
        });
    });
</script>
<div id="content">
<h1>Add New Recipe</h1>

<form action="insert-recipe.php">
    <label for="title">Add a new recipe: </label>
    <input type="text" name="title" id="title" placeholder="Recipe Name">

    <br>
    <label for="desc">Description:</label>
    <input type="text" name="desc" id="desc" placeholder="short and sweet please">

    <br>
    <label for="url">Link to Recipe:</label>
    <input type="text" name="url" id="url" placeholder="URL">

    <br>

    <label for="time">Total Time (combine prep and cooking time), format as <em>HH:MM:SS</em>:</label>
    <input type="text" name="time" id="time" placeholder="HH:MM:SS">
    <?//REVIEW[chris] implement js auto-formatting?>

    <br>
    <label for="imgUrl">Link to Recipe Image:</label>
    <input type="text" name="imgUrl" id="imgUrl" placeholder="URL">

    <br>
    <label for="ing_input">--Add ingredients:</label>
    <input type="text" name="ing" id="ing_input" placeholder="cheese">
    <?//REVIEW[chris] not working yet...need multiple?>

    <br><br>
    <h3>Meals this recipe can be used in</h3>
    <div id="meals">
        <?php
        $sql = "SELECT * FROM lewischr_recipes.meals";

        if($results = $mysqli->query($sql)) {
            while ($currentrow = $results->fetch_assoc()) {
                echo "<div class='mealCheck'><input type='checkbox' id='meal".$currentrow['ID']."' name='meals[]' value='" . $currentrow['ID'] . "'> 
                        <label for='meal".$currentrow['ID']."'>" . $currentrow['meal_type'] . "</label>
                        </div>";
            }
        }
        ?>
    </div>


    <div id="diets">
        <br><br>
        <h3>Diets this recipe follows</h3>
        <?php
        $sql = "SELECT * FROM lewischr_recipes.diets";

        if($results = $mysqli->query($sql)) {
            while ($currentrow = $results->fetch_assoc()) {
                echo "<div class='dietCheck'><input type='checkbox' id='diet".$currentrow['ID']."' name='diets[]' value='" . $currentrow['ID'] . "'> 
                        <label for='diet".$currentrow['ID']."'>" . $currentrow['diet'] . "</label>
                        </div>";
            }

        }
        ?>
    </div>

    <br>
    <div id="submit"><br>
        <input  type="submit">
        <?//REVIEW[chris] validate data before submit, post or something to hide values too? add hidden validated input ?>
    </div>




    <br>
</form>
</div>
</body>
</html>

