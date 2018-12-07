<?php
require_once './header.php';

/*if(!$fgmembersite->CheckAdminLogin())
{
    $fgmembersite->RedirectToURL("profile.php");
    exit;
}*/

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

<html lang="en-us">
<head>
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
    <link rel="stylesheet" type="text/css" href="style/generalStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat:400,700" rel="stylesheet">
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>
        All Recipes
    </title>
    <style>
        body {
            background: white !important;
        }
        #recipeBox{
            background-color: white;
            margin-top: 80px;
            padding: 30px;
            height: 40%;
        }
        #recipeList{
            width: 100%;
            clear: both;
        }
        .recipeRow{

            height: 45px;
            clear: both;
        }
        .recipeRow:hover{
            background-color: lightcyan;
            height: 45px;
            clear: both;
        }
        .recipeID{
            float: left;
            width: 5%;
            margin: 10px;
            clear: both;
        }
        .recipeName{
            float: left;
            width: 15%;
            margin: 10px;
        }
        .recipeDesc{
            float: left;
            width: 45%;
            margin: 1px;
        }
        .recipeEdit{
            float: left;
            width: 8%;
            margin: 10px;
            text-align: center;
        }
        .recipeDelete{
            float: left;
            width: 8%;
            margin: 10px;
            text-align: center;

        }
        .recipeEdit a {
            color: blue;
            font-size: 12pt;
        }

        .recipeDelete a{
            color: red;
            font-size: 12pt;
        }
        .nextpos{
            float: right;
            color: #231f20;
        }
        .nextPos:hover{
            color: #8AC1C6;
        }
        .pageButton{
            color: #231f20;
        }
        .pageButton:hover{
            color: #8AC1C6;
        }





    </style>
</head>
<body>
<div id="recipeBox">

        <?php

        $sql = "SELECT * FROM lewischr_recipes.recipe
        WHERE 1";

        $result = $mysqli->query($sql) or die($mysqli->error);


        if(empty($_REQUEST["start"])) {
            $start=1;
        }
        else {
            $start = $_REQUEST["start"];
        }

        $end = $start + 9;

        if ($result->num_rows < $end) {
            $end = $result->num_rows;
        }

        $counter = $start;

        $result->data_seek($start-1);

        $searchstring = "&title=" . $_REQUEST['title'] . "&description=" . $_REQUEST['description'];



        if($start != 1)
        {
            echo "<a  class = 'pageButton' href='adminRecipesList.php?start=" . ($start-10) . $searchstring .
                "'>Previous Records</a> ";
        }
        if($end < $result->num_rows) {
            echo "<a class = 'nextpos'  href='adminRecipesList.php?start=" . ($start + 10) .
                $searchstring .
                "'>Next Records</a>";
        }
        echo "<br><br>";

        ?>
    <h1>All Recipes in Database</h1>
    <div id="recipeList">
        <!-- titles -->
        <div class="recipeID"><strong>ID</strong></div>
        <div class="recipeName"><strong>Name</strong></div>
        <div class="recipeDesc"><strong>Description</strong></div>
        <div class="recipeEdit"><strong>Edit</strong></div>
        <div class="recipeDelete"><strong>Delete</strong></div>
        <div style="clear: both"></div>

        <?php

        while ($row = $result->fetch_assoc()){
            echo '<div class="recipeRow">
            <div class="recipeID">' . $row['ID'] . '</div>
            <div class="recipeName">' . $row['title'] . '</div>
            <div class="recipeDesc">' . $row['description'] . '</div>
            <div class="recipeEdit"><a href="adminEditRecipe.php?recipeid=' . $row['ID'] . '">edit</a></div>
            <div class="recipeDelete"><a href="adminEditRecipe.php?delete=true&recipeid=' . $row['ID'] . '">remove</a></div>
        </div>';

            if ($counter == $end){
                break;
            }
            $counter++;
        }

        ?>



    </div>
</div>
</body>

</html>