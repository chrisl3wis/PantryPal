<?PHP
require_once("./include/membersite_config.php");
require_once ('./header.php');

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("log-in.php");
    exit;
}

if(isset($_POST['submitted']))
{
   if($fgmembersite->ChangePassword($_POST['oldpwd'], $_POST['newpwd']))
   {
        $fgmembersite->RedirectToURL("changed-pwd.html");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Change password</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
      <script src="scripts/pwdwidget.js" type="text/javascript"></script>
    <style type="text/css">
        fieldset{
            width: 500px;
            text-align: left;
            margin-top: 28vh;
            z-index: 10;
            position: absolute;
            margin-left: 5%;
            background: #EEEEEE;
        }
        /*#logo{*/
        /*width: 200px;*/
        /*}*/
        body{
            background: url("images/loginflatlay.png") repeat-y;
            background-size: cover;
            height: max-content;
        }
        input{
            /*width: 380px;*/

            font-family: 'Montserrat', sans-serif;
            font-style: italic;
            border: none;
            /*border-bottom: 1px solid var(--main-grey);*/
            font-size: 11pt;
            padding-left: 10px;
            margin-bottom: 10px;
            background: #cccccc;

        }
        .submit{
            font-family: 'Montserrat', sans-serif;
            background-color: #8AC1C6;
            color: white;
            font-size: 11pt;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            border: none;
            width: 75px;
            height: 35px;
            cursor: hand;
        }
        .submit:hover{
            color: #8AC1C6;
            background-color: white;
            border: #8AC1C6 2px solid;
        }
        a{

            text-decoration: underline;
            font-size: 10pt;
            color: #8AC1C6;

        }

    </style>
</head>
<body>

<!-- Form Code Start -->
<div id='fg_membersite'>
<form id='changepwd' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Change Password</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='oldpwd' >Old Password*:</label><br/>
    <div class='pwdwidgetdiv' id='oldpwddiv' ></div><br/>
    <noscript>
    <input type='password' name='oldpwd' id='oldpwd' maxlength="50" />
    </noscript>    
    <span id='changepwd_oldpwd_errorloc' class='error'></span>
</div>

<div class='container'>
    <label for='newpwd' >New Password*:</label><br/>
    <div class='pwdwidgetdiv' id='newpwddiv' ></div>
    <noscript>
    <input type='password' name='newpwd' id='newpwd' maxlength="50">
    </noscript>
    <br>
    <span id='changepwd_newpwd_errorloc' class='error'></span>
</div>

<br/><br/><br/>
<div class='container'>
    <input type='submit' class="submit" name='Submit' value='Submit'>
</div>

</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[
    var oldpwdwidget = new PasswordWidget('oldpwddiv','oldpwd');
    oldpwdwidget.enableGenerate = false;
    oldpwdwidget.enableShowStrength=false;
    oldpwdwidget.enableShowStrengthStr =false;
    oldpwdwidget.MakePWDWidget();
    
    var newpwdwidget = new PasswordWidget('newpwddiv','newpwd');
    newpwdwidget.MakePWDWidget();
    
    
    var frmvalidator  = new Validator("changepwd");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("oldpwd","req","Please provide your old password");
    
    frmvalidator.addValidation("newpwd","req","Please provide your new password");

// ]]>
</script>

<p>
<a href='profile.php'>Home</a>
</p>

</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->

</body>
</html>