<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
    if($fgmembersite->RegisterUser())
    {
        $fgmembersite->RedirectToURL("./thank-you.html");
    }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Register for PantryPal</title>
    <link rel="stylesheet" type="text/css" href="style/generalStyle.css">
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
    <link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
    <script src="scripts/pwdwidget.js" type="text/javascript"></script>
    <style type="text/css">
        body{
            background-image: url("images/loginflatlay.png");
            background-size: 110%;
        }
        #registerbox{
            width: 400px;
            margin: 7% auto auto;
            text-align: center;
            background-color: white;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            padding: 15px 15px 30px;
            -webkit-box-shadow: 0 0 74px 2px var(--main-black-a);
            -moz-box-shadow: 0 0 74px 2px var(--main-black-a);
            box-shadow: 0 0 74px 2px var(--main-black-a);

        }
        .registerFill{
            width: 250px;
            /*height: 45px;*/
            font-family: 'Montserrat', sans-serif !important;;
            font-style: italic;
            border: none !important;
            border-bottom: 1px solid var(--main-grey) !important;
            font-size: 11pt !important;
            padding-left: 10px;
        color: black !important;
            /*background: #cccccc;*/


        }
        .pwdfield{
            width: 250px;
            /*height: 45px;*/
            font-family: 'Montserrat', sans-serif !important;
            border: none !important;
            border-bottom: 1px solid var(--main-grey) !important;
            font-size: 11pt !important;
            padding-left: 10px;
            color: black !important;
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
            width: 150px;
            height: 35px;
            cursor: hand;
        }
        .submit:hover{
            color: #8AC1C6;
            background-color: white;
            border: #8AC1C6 2px solid;
        }
        h1{
            color: #231f20;
        }
    </style>
</head>
<body>
<?php
include_once './header.php';

?>
<div id="registerbox">
    <h1>Sign Up</h1>
    <div id='fg_membersite'>
        <form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>


                <input type='hidden' name='submitted' id='submitted' value='1'/>



                <label>
                    <input type='text'  class='spmhidip' name='<?=$fgmembersite->GetSpamTrapInputName() ?>' />
                </label>


                <div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
                <div class='container'>
                    <label for='forename' class='info' style='font-size: 11pt;  margin-top: 30px; font-weight: normal; font-style: italic; color: #bcbcbc;'> Your First Name </label><br/>
                    <input type='text' name='forename' class="registerFill" id='forename'  value='<?php echo $fgmembersite->SafeDisplay('forename') ?>' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
            <br>
                <div class='container'>
                    <label for='surename' style='font-size: 11pt;  margin-top: 30px; font-weight: normal; font-style: italic; color: #bcbcbc;' >Your Last Name </label><br/>
                    <input type='text' name='surename' class="registerFill" id='surename' value='<?php echo $fgmembersite->SafeDisplay('surename') ?>' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
            <br>
                <div class='container'>
                    <label for='email'style='font-size: 11pt;  margin-top: 30px; font-weight: normal; font-style: italic; color: #bcbcbc;' >Email Address</label><br/>
                    <input type='text' name='email' class="registerFill" id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
            <br>
                <div class='container'>
                    <label for='username' style='font-size: 11pt;  margin-top: 30px; font-weight: normal; font-style: italic; color: #bcbcbc;' >UserName</label><br/>
                    <input type='text' name='username' class="registerFill" id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container' style='margin-left: -25px;'>
                    <label for='password' style='float: left; margin-left: 190px;font-size: 11pt; margin-top: 30px; font-weight: normal; font-style: italic; color: #bcbcbc;' >Password</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <noscript>
                        <input type='password' name='password' class="registerFill" id='password'  maxlength="50" />
                    </noscript>
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>
                <br>

                <div class='container'>
                    <input type='submit' class="submit" name='Submit' value='create my account' />
                </div>
            <!--<div class='short_explanation'>* required fields</div>-->


        </form>
        <!-- client-side Form Validations:
        Uses the excellent form validation script from JavaScript-coder.com-->

        <script type='text/javascript'>
            // <![CDATA[
            var pwdwidget = new PasswordWidget('thepwddiv','password');
            pwdwidget.MakePWDWidget();

            // ]]>
        </script>
    </div>
</body>
</html>