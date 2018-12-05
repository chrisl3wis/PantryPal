<?PHP
require_once("./include/membersite_config.php");
require_once './header.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <link rel="stylesheet" href="./style/pantryStyle.css">
    <style>
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
    </style>
    <title>Feedback</title>
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
        <h1>Feedback</h1>
    </div>
</div>
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
</body>
</html>
