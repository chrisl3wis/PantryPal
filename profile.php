<?PHP
require_once("./include/membersite_config.php");
require_once './header.php';

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("log-in.php");
    exit;
}

$admin=$fgmembersite->CheckAdminLogin();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Home page</title>
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
    <link rel="stylesheet" type="text/css" href="style/generalStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">

        #additional {
            font-size: 11pt;
            position: absolute;
            bottom: 25px;
        }
        #additional a{
            font-size: 11pt;
            color: gray;
            opacity: 0.6;
        }

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
        #logout{
            font-weight: bold;
            color: darkgray;
        }
        @media screen and (max-width: 400px){
            body{
                background: none;
            }
            body{
                background: none;
            }
            #profilebox{
                width: 100%;
            }
            h1{
                margin-top: -120px;
                margin-right: 100px;
            }
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
        <a href="change-pwd.php">Change password</a> <br><br>

        <?php
        if ($admin) {
            echo "<div id='fg_membersite_content'>".
                "<div id='adminbox'>".
                "<h1>Admin Tasks</h1>".
                "<a href='adminRecipesList.php' class='fontSize'>All Recipes List/Edit Recipes</a> <br><br>".
                "<a href='adminUserList.php' class='fontSize'>User List</a> <br><br>".
                "</div>".
                "</div><br><br>";
        }
        ?>

        <a id='logout' href="logout.php">Log Out</a>

        <br><br><br>
        <div id="additional">
            <a href="mailto:pantrypal.dev2@gmail.com">Contact Us</a> <br>
            <a href="about.php">About PantryPal</a> <br>
        </div>
    </div>
</div>
</body>
</html>