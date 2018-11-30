<?PHP
require_once("./include/membersite_config.php");

//if(!$fgmembersite->CheckLogin())
//{
//    $fgmembersite->RedirectToURL("login.php");
//    exit;
//}
?>
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
</div>