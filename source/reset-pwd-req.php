<?PHP
require_once("../include/membersite_config.php");
require_once './header2.php';

$emailsent = false;
if(isset($_POST['submitted']))
{
   if($fgmembersite->EmailResetPasswordLink())
   {
        $fgmembersite->RedirectToURL("reset-pwd-link-sent.html");
        exit;
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Reset Password Request</title>
    <link rel="STYLESHEET" type="text/css" href="../style/fg_membersite.css" />
    <link rel="STYLESHEET" type="text/css" href="../style/textPages.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type='text/javascript' src='../scripts/gen_validatorv31.js'></script>
    <style>
        body {
            background: url("../images/loginflatlay.png") repeat-y;
            background-size: cover;
            font-family: 'Montserrat', sans-serif;
        }
        svg{
            /*width: 50%;*/
            min-width: 800px; !important;
            height: 100%;
            position: fixed;
            top: 0px;
            left: -100px;
            z-index: 0;
        }
        @media screen and (max-device-width: 600px){
            svg{
                width: 0%; !important;
            }
            body{
                background: url("../images/loginflatlay.png") repeat-y;
                background-size: 120%;
                background-repeat: no-repeat;
            }
            .standardTitle {
                width: 90%;
                background-color: white;
            }

        }
        </style>
</head>
<body>
<div class="standardTitle">
    <!-- Form Code Start -->
    <div id='fg_membersite'>
        <form id='resetreq' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
            <fieldset style="border: none; margin-left: -70px; margin-top: 130px;">
                <h2 style="font-size: 20pt;">Reset Password</h2>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* required fields</div>

                <div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
                <div class='container'>
                    <label for='email' >Your Email*:</label><br/>
                    <input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
                    <span id='resetreq_email_errorloc' class='error'></span>
                </div>
                <div class='short_explanation'>A link to reset your password will be sent to the email address</div>
                <div class='container'>
                    <input type='submit' name='Submit' value='Submit' />
                </div>

            </fieldset>
        </form>
        <!-- client-side Form Validations:
        Uses the excellent form validation script from JavaScript-coder.com-->
</div>


<script type='text/javascript'>
// <![CDATA[

const frmvalidator = new Validator("resetreq");
frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("email","req","Please provide the email address used to sign-up");
    frmvalidator.addValidation("email","email","Please provide the email address used to sign-up");

// ]]>
</script>

</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 658.71 775">
    <defs>
        <style>.cls-1,.cls-2{fill:#fff;}.cls-1{opacity:0.92;}.cls-2{opacity:0.72;}</style>
    </defs>
    <title>Asset 1</title>
    <g id="Layer_2" data-name="Layer 2">
        <g id="Layer_1-2" data-name="Layer 1">
            <path class="cls-1" d="M613,396c.9-156.77,60.36-210.21,21-318A280.34,280.34,0,0,0,590,0H0V771H590l11-10a671.69,671.69,0,0,0,26-125C639.38,523.35,612.39,502.14,613,396Z"></path>
            <path class="cls-2" d="M613,357c12.44-49.28,36.44-83.91,44-164,3.19-33.78,1.37-53.64-1-68-9.64-58.36-40.65-99.46-60-121H6V775H589.11l6.89-9.3c14-27.43,32.7-71.46,40-127.7C653.3,504.75,584.94,468.14,613,357Z"></path>
        </g>
    </g>
</svg>
</body>
</html>