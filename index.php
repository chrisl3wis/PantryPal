<?php
require_once './header.php';

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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Pantry Pal</title>
    <style>
        #question{
            width: 50px;
            opacity: 0.8;
            position: fixed;
            bottom: 15px;
            right: -5px;
        }
        #question img{
            width: 25px;
        }
        @media screen and (max-width: 400px){
           #search_div{
               width: 240px;
               height: 450px;
           }
            .ingredientFill{
                width: 220px;
            }
            h1{
                font-size: 27pt;
            }

        }
    </style>
</head>
<body>

<div id="search_div">
    <h1>What's in Your <br> Pantry Today?</h1>
    <br>
    <form action="resultsBasic.php">
    <input type="text" class="ingredientFill" name="ingred1" placeholder="ingredient #1">
    <br><br><br>
    <input type="text" class="ingredientFill" name="ingred2" placeholder="ingredient #2">
    <br><br><br>
    <input type="text" class="ingredientFill" name="ingred3" placeholder="ingredient #3">
    <br><br>

    <a href="advancedSearch.php">advanced search >></a>
    <br><br><br>

    <input type="submit" class="search" value="search">
    </form>
</div>
<div id="question">
    <a href="PantryPalHowTo.php"><img src="images/question.png" alt="Questions?"></a>
</div>
</body>
</html>
