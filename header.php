<?PHP
require_once("./source/include/membersite_config.php");

//if(!$fgmembersite->CheckLogin())
//{
//    $fgmembersite->RedirectToURL("login.php");
//    exit;
//}
?>
<div id="header">
    <a href="searchBasic.php"><img src="pantrypal.png" id="masthead"></a>
    <a class="account" href="login-home.php"><?php
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