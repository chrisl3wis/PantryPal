<?PHP
require_once("./include/membersite_config.php");
require_once './header.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        :root{
            --main-grey: #BCBCBC;
            --main-black: #231f20;
            --main-black-a: rgba(35,31,32,.15);
        }

        #header{
            height: 60px;
            width: 100%;
            background-color: white;
            top: 0;
            position: fixed;
            z-index: 10;

        }

        .column {
            flex: 25%;

        }
        .row{
            display: flex;
        }

        body {
            background-size: 100%;
            background: url("mainBG.jpg") no-repeat;
            background-position-y: -200px;
            padding: 0px;
            margin: 0px;
            font-family: 'Montserrat', sans-serif;
        }

        p{
            line-height: 150% !important;
        }

        h1{
            font-family: 'Lato', sans-serif;
            font-size: 36pt;
            text-align: center;
            margin: auto;
        }
        h3{
            font-family: 'Lato', sans-serif;
        }

        a{
            font-family: 'Montserrat', sans-serif;
            text-decoration: none;
            font-size: 10pt;
            color: var(--main-grey);
        }
        a:hover{
            text-decoration: underline;
        }
        ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: var(--main-grey);
            opacity: 1; /* Firefox */
        }

        .search:hover{
            text-decoration: underline;
        }
        input:focus,
        select:focus,
        textarea:focus,
        button:focus {
            outline: none;
        }
        #masthead{
            width: 150px;
            margin-left: 20px;
            display: block;
            cursor: pointer;
        }
        .account{
            font-family: 'Montserrat', sans-serif;
            text-decoration: none;
            font-size: 10pt;
            color: var(--main-grey);
            float: right;
            margin-right: 30px;
            margin-top: -37px;

        }
        .account:hover{
            text-decoration: none;
            color: rgb(138, 138, 138);
        }
        .resultsHeader{
            background-image: url("images/mainBG.jpg");
            background-size: 120%;
            background-position-y: -800px;
            background-position-x: -30px;
            width: 100%;
            height: 300px;
            margin-bottom: 50px;
            background-repeat: no-repeat;
            background-position: fixed;
        }
        .resultsHeaderText{
            text-align: left;
            color: white;
            padding-top: 120px;
            padding-left: 0px;
        }
        .column {
            float: left;
            width: 30%;
            padding-left: 200px; text-align: left; line-height: 200%; padding-top: 80px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        .textbox{
            background-color: #badee2; border-radius: 25px; padding: 25px;
        }
        .team{
            float: center; text-align: center; margin: auto;
        }
        .footer{
            padding: 80px 30px 50px 30px; float: center; text-align: center; margin: auto;
        }
        #image{
            width: 50%;
        }
        .bottombar{
            background-color:#badee2; width: 100%; padding:30px 50px 10px 0px; float: center; text-align: center; margin: auto; margin-top: 50px;
        }
        .howtorow{
            padding-right:30px; padding-left:30px;
        }
        .row1{
            width:850px; height: 400px; margin: auto;
        }
        .row2{
            width:850px; height: 510px; margin: auto;
        }
        .row3{
            width:850px; height: 600px; margin: auto;
        }
        #img1{
            width: 400px; float: left; border-radius: 20px; margin: 0px 50px 0px 0px; box-shadow: 2px 2px 5px 1px rgba(0,0,0,0.15);
        }
        #img2{
            width: 400px; float: right; border-radius: 20px; margin: 0px 0px 0px 50px;
        }
        #img3{
            width: 400px; float: left; border-radius: 20px; box-shadow:3px 3px 10px 0px #e8e8e8; margin: 0px 50px 0px 0px;
        }
        #txt1{
            line-height: 150%; padding-top: 150px;
        }
        #txt2{
            line-height: 150%; padding-top: 180px; text-align: right;
        }
        #txt3{
            line-height: 150%; padding-top: 190px;
        }

        @media screen and (max-device-width: 450px){
            svg{
                width: 0%; !important;
            }
            body{
                background: url("images/mainBG.jpg") repeat-y;
                background-size: 120%;
                background-repeat: no-repeat;
            }
            .standardTitle {
                width: 90%;
            }
            h1{
                font-size: 24pt;
                padding-left: 30px;
                margin-top: -35px;
            }
            h2{
                text-align: center;
                margin: auto;
                font-size: 14pt;
                padding-left: 30px;
            }
            .footer{
                padding: 50px 0px 50px 30px; float: center; text-align: center; margin: auto; margin-top: -20px; font-size: 10pt;
            }
            .resultsHeader{
                margin-bottom: 0px;
            }
            .resultsHeaderText{
                text-align: left;
                color: white;
                padding-top: 100px;
                width: 60%;
                padding-left: 0px;
                margin-left: -15px;
            }
            .row1{
                width:100%px; margin: auto;
            }
            .row2{
                width:100%px; margin: auto;
            }
            .row3{
                width:100%; margin: auto;
            }
            #img1{
                width: 300px; border-radius: 20px; box-shadow: 2px 2px 5px 1px rgba(0,0,0,0.15); float: center; margin: auto; margin-top: -40px; margin-bottom: 30px;
            }
            #img2{
                width: 300px; border-radius: 20px; float: left; margin: auto; margin-top: 100px; margin-bottom: 30px;
            }
            #img3{
                width: 300px; border-radius: 20px; box-shadow: 2px 2px 5px 1px rgba(0,0,0,0.15); float: center; margin: auto; margin-top: 230px; margin-bottom: 30px;
            }
            #txt1{
                line-height: 150%; width: 35%; float: center; margin-top: 10px; margin-left: 5px;
            }
            #txt2{
                line-height: 150%; padding-top: 180px; width: 35%; margin-top: 0px; margin-left: 5px; text-align: left;
            }
            #txt3{
                line-height: 150%; padding-top: 180px; width: 105%; margin-top: 0px; margin-left: 5px; text-align: left;
            }
            .bottombar{
                background-color:#badee2; width: 100%; padding:30px 50px 10px 0px; float: center; text-align: center; margin: auto; margin-top: 400px;
            }
        }
    </style>
    <title>How To Use PantryPal</title>
</head>
<body>

<div id="header">
    <a href="index.php"><img src="images/pantrypal.png" id="masthead" alt="PantryPal"></a>
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
    <div class="resultsHeaderText"">
        <h1>How To Use PantryPal</h1>
    </div>
</div>
<div class="standardTitle">
    <div class="howtorow">
        <div class="row1">
            <img id="img1" src="Ingredients.png">
            <p id="txt1">Start by choosing a few ingredients! Look in your pantry, fridge, cabinets, etc. to find what food you have to cook with. This can vary from main proteins like chicken, to vegetables like broccoli, seasonings like sesame, and more!</p>
        </div>
    </div>
    <div class="howtorow">
        <div class="row2">
            <img id="img2" src="Chicken.png">
            <p id="txt2">Then pick a recipe that you like! All of them should match the ingredients that you searched and now you just have to choose what's best. For example, here is a Sesame Chicken "card" that you can take a look at. Click the arrow on the right to read more, and get the actual recipe.</p>
        </div>
    </div>
    <div class="howtorow">
        <div class="row3">
            <img id="img3" src="Recipe.png">
            <p id="txt3">After you click on the arrow, the recipe on it's original site will pop up with the exact ingredients, directions, and sometimes reviews. You can read more about the recipe and start cooking yourself! Some of the recipes will require a few extra ingredients on top of what you entered, but hopefully this will help give you a good starting point.</p>
        </div>
    </div><br>
    <div class="bottombar">
        <h2>Happy cooking :)</h2><br>
    </div>
    <div class="footer">
        &copy; PantryPal Inc.<br>
    </div>
</div>

</body>
</html>

<!--background-image: linear-gradient(#badee2, #69ccd7)