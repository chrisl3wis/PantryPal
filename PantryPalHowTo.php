<?PHP
require_once("./include/membersite_config.php");
require_once './header.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <link rel="stylesheet" href="pantryStyle.css">
    <style>
        .resultsHeader{
            background-image: url("images/mainBG.jpg");
            background-size: 120%;
            background-position-y: -800px;
            background-position-x: -30px;
            width: 100%;
            height: 300px;
            background-repeat: no-repeat;
            background-position: fixed;
        }
        .resultsHeaderText{
            text-align: left;
            color: white;
            padding-top: 70px;
            padding-left: 0px;
        }
        body{
            background: none;
        }
    </style>
    <title>How To Use PantryPal</title>
</head>
<body>

<div id="header">
    <a href="index.php"><img src="include/pantrypal.png" id="masthead" alt="PantryPal"></a>
    <a class="account" href="profile.php"><?php
        if(!$fgmembersite->CheckLogin())
        {
            echo "log in";
        }
        else{
            echo "welcome back, ". $fgmembersite->UserFullName();
        }
        ?></a>
    <!--Maybe if signed in have "Hello, Chris"-->
</div><br><br><br>
<div class="resultsHeader">
    <div class="resultsHeaderText" style="padding-top: 120px;">
        <h1>How To Use PantryPal</h1>
    </div>
</div>
<!--<div style="background-color:#badee2; width: 100%; padding:50px 50px 50px 0px">-->
<!--    <h1>How To Use PantryPal!</h1><br>-->
<!--    <p style="text-align: center; margin: auto; width: 750px">Welcome to the site! Navigating should be pretty easy, but here are some simple tips.</p>-->
<!--    <br>-->
<!--</div>-->
<div style=" padding: 50px 30px 30px 30px">
    <div style="width:850px; height: 400px; margin: auto">
        <img style="width: 400px; float: left; border-radius: 20px; margin: 0px 50px 0px 0px; box-shadow: 2px 2px 5px 1px rgba(0,0,0,0.15);" src="Ingredients.png">
        <p style="line-height: 150%; padding-top: 150px">Start by choosing a few ingredients! Look in your pantry, fridge, cabinets, etc. to find what food you have to cook with. This can vary from main proteins like chicken, to vegetables like broccoli, seasonings like sesame, and more!</p>
    </div>
</div>
<div style=" padding: 0px 30px 0px 30px">
    <div style="width:850px; height: 510px; margin: auto">
        <img style="height: 500px; float: right; margin: 0px 0px 0px 50px" src="Chicken.png">
        <p style="line-height: 150%; padding-top: 180px; text-align: right">Then pick a recipe that you like! All of them should match the ingredients that you searched and now you just have to choose what's best. For example, here is a Sesame Chicken "card" that you can take a look at. Click the arrow on the right to read more, and get the actual recipe.</p>
    </div>
</div>
<div style=" padding: 0px 30px 30px 30px">
    <div style="width:850px; height: 600px; margin: auto">
        <img style="width: 400px; float: left; border-radius: 20px; box-shadow:3px 3px 10px 0px #e8e8e8; margin: 0px 50px 0px 0px" src="Recipe.png">
        <p style="line-height: 150%; padding-top: 190px">After you click on the arrow, the recipe on it's original site will pop up with the exact ingredients, directions, and sometimes reviews. You can read more about the recipe and start cooking yourself! Some of the recipes will require a few extra ingredients on top of what you entered, but hopefully this will help give you a good starting point.</p>
    </div>
</div>
<div style="background-color:#badee2; width: 100%; padding:30px 50px 10px 0px; float: center; text-align: center; margin: auto"">
<h2>Happy cooking :)</h2><br>
</div>
<div style=" padding: 30px 30px 50px 30px; float: center; text-align: center; margin: auto">
    <br> &copy; PantryPal Inc.<br>
</div>
</body>
</html>

<!--background-image: linear-gradient(#badee2, #69ccd7)