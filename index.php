
<?php

echo "<hr>";
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
    <link rel="stylesheet" type="text/css" href="style/generalStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Pantry Pal</title>
</head>
<body>
<?php
include_once './header.php';
?>
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
</body>
</html>
