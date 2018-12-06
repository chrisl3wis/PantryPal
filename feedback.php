<?PHP
require_once("./include/membersite_config.php");
require_once './header.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <link rel="stylesheet" href="./style/staticStyle.css">
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
            background-position-y: -600px;
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

    </style>
    <title>Feedback</title>
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
    <div class="resultsHeaderText" style="padding-top: 120px;">
        <h1>Feedback</h1>
    </div>
</div>
<div class="standardTitle">
    <div style="width: 50%; padding:30px 30px 30px 0px; float: center; text-align: left; margin: auto"">
    <form action="mailto:pantrypal.dev2@gmail.com">
        <div class="label"> Name :
            <input type="text" style="width: 200px; padding: 10px; height: 30px; border-radius: 5px; -moz-box-shadow:inset 0 0 0px #000000; -webkit-box-shadow: inset 0 0 0px #000000; border: 1px solid gray; box-shadow:inset 0 0 0px #000000;" name="fullname" class="medtext" placeholder="John Smith" required="1" title="First Last">
        </div><br>
        <div class="label"> Email :
            <input type="text" style="width: 200px; border: 1px solid gray; padding: 10px; height: 30px; border-radius: 5px" name="email" class="medtext" placeholder="Johnsmith@mail.com" required="1">
        </div><br>
        What do you think of PantryPal? <br><br>
        <div style="padding-left: 30px;">
            <div class="label" style="padding: 10px;">
                <form> Site Design (1 = low, 5 = high) : &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="rate1" value="1">  1 &nbsp;
                    <input type="radio" name="rate1" value="2">  2 &nbsp;
                    <input type="radio" name="rate1" value="3">  3 &nbsp;
                    <input type="radio" name="rate1" value="4">  4 &nbsp;
                    <input type="radio" name="rate1" value="5" checked>  5
                </form>
            </div>
            <div style="padding-top: 5px; padding-left: 10px">
                <form> Site Quality (1 = low, 5 = high) : &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="rate2" value="1">  1 &nbsp;
                    <input type="radio" name="rate2" value="2">  2 &nbsp;
                    <input type="radio" name="rate2" value="3">  3 &nbsp;
                    <input type="radio" name="rate2" value="4">  4 &nbsp;
                    <input type="radio" name="rate2" value="5" checked>  5
                </form>
            </div>
            <div style="padding-left: 10px;">
                <form> Easy to Use (1 = hard, 5 = easy) : &nbsp;&nbsp;
                    <input type="radio" name="rate3" value="1">  1 &nbsp;
                    <input type="radio" name="rate3" value="2">  2 &nbsp;
                    <input type="radio" name="rate3" value="3">  3 &nbsp;
                    <input type="radio" name="rate3" value="4">  4 &nbsp;
                    <input type="radio" name="rate3" value="5" checked>  5
                </form>
            </div>
            <div class="label" style="width:100%; padding-left: 10px;">
                <form> Recipes (1 = bad, 5 = great) :   &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="rate4" value="1">  1 &nbsp;
                    <input type="radio" name="rate4" value="2">  2 &nbsp;
                    <input type="radio" name="rate4" value="3">  3 &nbsp;
                    <input type="radio" name="rate4" value="4">  4 &nbsp;
                    <input type="radio" name="rate4" value="5" checked>  5
                </form>
            </div>
        </div><br>
        <div class="label">
            <textarea style="resize: none; width: 100%; padding: 10px; height: 60px; border-radius: 5px; border: 1px solid gray" name="email" placeholder="Additional Comments?"></textarea>
        </div><br>
        <input type="submit" class="button" value="Submit" style=" width: 70px" action="mailto:pantrypal.dev2@gmail.com">
    </form>
</div>
<div style="padding: 0px 30px 50px 30px; float: center; text-align: center; margin: auto">
    &copy; PantryPal Inc.<br>
</div>
</div>

</body>
</html>
