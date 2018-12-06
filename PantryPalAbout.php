<?PHP
require_once("./include/membersite_config.php");
require_once './header.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
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

        .ingredientFill{
            width: 350px;
            font-family: 'Montserrat', sans-serif;
            font-style: italic;
            border: none;
            border-bottom: 1px solid var(--main-grey);
            font-size: 11pt;
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

        #search_div{
            width: 450px;
            height: 580px;
            float: left;
            position: relative;
            top: 160px;
            left: 8%;
            z-index: 10;
            background-color: white;
            border-radius: 30px;
            padding: 10px 50px 10px 50px;
            -webkit-box-shadow: 0 0 74px 2px var(--main-black-a);
            -moz-box-shadow: 0 0 74px 2px var(--main-black-a);
            box-shadow: 0 0 74px 2px var(--main-black-a);
        }
        .search{
            background-color: transparent;
            border: none;
            color: var(--main-black);
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            font-family: 'Lato', sans-serif;
            float: right;
            margin-right: 40px;
        }
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
            padding-top: 120px;
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
            #profilebox{
                background-color: white;
                width: 90%;
                height: 75%;
                padding: 120px 50px 50px;

            }
            .column {
                float: left;
                width: 90%;
                text-align: left; float: center; margin: auto; line-height: 140%; margin-top: -110px; padding-left: 25px;
            }
            .textbox{
                background-color: #badee2; border-radius: 10px; font-size: 10pt; float: left; margin: auto; width: 90%; margin-bottom: 20px;
            }
            .team{
                padding: 0px 0px 0px 0px; float: center; text-align: center; margin: auto;
            }
            .footer{
                float: center; text-align: center; margin: auto; padding: 0px 30px 50px 30px;
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
            #image{
                width: 100%;
                padding-left: 18px;
                padding-top: 10px;
            }
            .footer{
                padding: 30px 0px 50px 30px; float: center; text-align: center; margin: auto; margin-top: -20px; font-size: 10pt;
            }
        }
    </style>
    <title>
        About Us
    </title>
</head>
<div>

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
    <div class="resultsHeaderText">
        <h1>About Us</h1>
    </div>
</div>
<div class="standardTitle">
    <div class="column">
        <div class="textbox">
            <p style="margin: auto">PantryPal was created by a team of four college sophomores who just moved into their apartments and never know what to cook. Looking up recipes is always an option, but after that there is always the issue of going to get the ingredients needed. We were looking for a solution that helped us find recipes that used the ingredients we already have, so we didn't have to go through the hassle of buying them after. That's when PantryPal was born to help us, and many other college students, cook awesome meals!!</p>
        </div>
    </div>
    <br>
    <div class="team">
        <br><h2>Team</h2>
        <img id="image" src="images/Pantry.png">
    </div>
    <div class="footer">
        <br> &copy; PantryPal Inc.<br>
    </div>
</div>

</body>
</html>

<!--background-image: linear-gradient(#badee2, #69ccd7)