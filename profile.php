<?PHP
require_once("./include/membersite_config.php");
include_once './header.php';

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("log-in.php");
    exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Home page</title>
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
    <link rel="stylesheet" type="text/css" href="style/generalStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
<<<<<<< HEAD
        .resultsHeader{
            background-image: url("images/mainBG.jpg");
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

=======
>>>>>>> 1eff42a7279b04d302024bed446946c0318bb737
        a {
            color: gray;
            font-size: 24px;
        }
        #profilebox{
            background-color: white;
            width: 40%;
            height: 75%;
            padding: 220px 50px 50px;

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
</head>

<body>
<div id='fg_membersite_content'>
<div id="profilebox">
<h1>Hi There <?= $fgmembersite->UserFullName(); ?>!</h1>
    <a href="savedRecipes.php">Your Saved Recipes</a> <br><br>
    <a href="new-recipe.php">Add Recipes</a> <br><br>
    <a href="mailto:help@pantrypal.com">Contact Us</a> <br><br>
    <a href="change-pwd.php">Change password</a> <br><br>

    <a href="logout.php">Log Out</a>
</div>
</div>
</body>
</html>