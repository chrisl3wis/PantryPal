
<?php

echo "<hr>";
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
} else {
    //echo "connection SUCCESSFUL";
}


?>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="generalStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Pantry Pal</title>
</head>
<body>
<div id="header">
    <img src="pantrypal.png" id="masthead">
    <a class="account" href="account.html"> my account</a>
</div>
<div id="searchdiv">
    <h1>What's in Your <br> Pantry Today?</h1>
    <br>
    <form action="resultsBasic.php">
    <input type="text" class="ingredientFill" name="ingred1" placeholder="ingredient #1">
    <br><br><br>
    <input type="text" class="ingredientFill" name="ingred2" placeholder="ingredient #2">
    <br><br><br>
    <input type="text" class="ingredientFill" name="ingred3" placeholder="ingredient #3">
    <br><br>

    <a href="nothingyet.html">advanced search >></a>
    <br><br><br>

    <input type="submit" class="search" value="search">
    </form>
</div>
</body>
</html>
