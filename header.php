<?PHP
require_once("./include/membersite_config.php");
?>
<link rel="stylesheet" type="text/css" href="style/generalStyle.css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat" rel="stylesheet">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130385982-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-130385982-1');
</script>


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
</div>
