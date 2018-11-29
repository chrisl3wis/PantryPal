<?PHP
require_once("./source/include/membersite_config.php");
include_once 'header.php';

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
      <link rel="STYLESHEET" type="text/css" href="./source/style/fg_membersite.css">
    <link rel="stylesheet" type="text/css" href="generalStyle.css">

</head>
<body>
<div id='fg_membersite_content'>
<h2>Home Page</h2>
Welcome back <?= $fgmembersite->UserFullName(); ?>!

<p><a href='change-pwd.php'>Change password</a></p>

<!--<p><a href='access-controlled.php'>A sample 'members-only' page</a></p>-->
<br><br><br>
<p><a href='logout.php'>Logout</a></p>
</div>
</body>
</html>
