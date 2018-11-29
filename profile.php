<html>
<head>
    <link rel="stylesheet" type="text/css" href="generalStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat:400,700" rel="stylesheet">
    <style>
        .resultsHeader{
            background-image: url("mainBG.jpg");
            background-size: 140%;
            background-position-y: -200px;
            background-position-x: -30px;

            width: 100%;
            height: 200px;
        }
        .resultsHeaderText{
            text-align: center;
            color: white;
            padding-top: 70px;
            padding-left: 70px;
        }

        a {
            color: gray;
            font-size: 24px;
        }
        #profilebox{
            padding: 50px;
            background-color: white;
            width: 40%;
            height: 75%;
            padding-top: 220px;

        }
        </style>
</head>

<body>
<?php
include_once 'header.php';
?>

<div id="profilebox">
<h1>Hi There!</h1>
    <a href="savedRecipes.php">Your Saved Recipes</a> <br><br>
    <a href="mailto:help@pantrypal.com">Contact Us</a> <br><br>
    <a href=""> Edit Settings</a> <br><br>
    <a href="">Log Out</a>
</div>
</body>
</html>