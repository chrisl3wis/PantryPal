<?PHP
require_once("./include/membersite_config.php");
require_once './header.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <link rel="stylesheet" href="pantryStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        .resultsHeader{
            background-image: url("images/mainBG.jpg");
            background-size: 120%;
            background-position-y: -450px;
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
        /*h1{*/
            /*text-align: left;*/
            /*padding-left: 400px;*/
            /*padding-top: 50px;*/
        /*}*/
        .column {
            float: left;
            width: 30%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        @media screen and (max-device-width: 450px){
            svg{
                width: 0%; !important;
            }
            body{
                background: url("images/mainBG.jpg") repeat-y;
                background-size: 0%;
                background-repeat: no-repeat;
            }
            .standardTitle {
                width: 90%;
            }
            #profilebox{
                background-color: white;
                width: 90%;
                height: 75%;
                padding: 120px 50px 50px;

            }

        }
    </style>
    <title>
        About Us
    </title>
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
        <h1>About Us</h1>
    </div>
</div>
<div class="column" style="padding-left: 200px; text-align: left; line-height: 200%; padding-top: 80px;">
    <div style="background-color: #badee2; border-radius: 25px; padding: 25px; box-shadow: 2px 2px 5px 1px rgba(0,0,0,0.15);">
        <p style="margin: auto">PantryPal was created by a team of four college sophomores who just moved into their apartments and never know what to cook. Looking up recipes is always an option, but after that there is always the issue of going to get the ingredients needed. We were looking for a solution that helped us find recipes that used the ingredients we already have, so we didn't have to go through the hassle of buying them after. That's when PantryPal was born to help us, and many other college students, cook awesome meals!!</p>
    </div>
</div>
    <br>
    <div style=" padding: 30px 75px 50px 0px; float: center; text-align: center; margin: auto">
        <br><h2>Team</h2>
        <img style="width: 750px;" src="Pantry.png">
    </div>
    <div style=" padding: 30px 30px 50px 30px; float: center; text-align: center; margin: auto">
        <br> &copy; PantryPal Inc.<br>
    </div>
</body>
</html>

<!--background-image: linear-gradient(#badee2, #69ccd7)