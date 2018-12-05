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
    <style type="text/css">
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
        </style>
</head>

<body>
<div id='fg_membersite_content'>
<div id="profilebox">
<h1>Hi There <?= $fgmembersite->UserFullName(); ?>!</h1>
    <a href="savedRecipes.php">Your Saved Recipes</a> <br><br>
    <a href="mailto:help@pantrypal.com">Contact Us</a> <br><br>
    <a href="change-pwd.php">Change password</a> <br><br>
    <a href="logout.php">Log Out</a>
</div>
</div>
</body>
</html>