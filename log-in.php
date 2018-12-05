<?PHP

require_once("./include/membersite_config.php");
require_once './header.php';


if(isset($_POST['submitted']))
{
    if($fgmembersite->Login())
    {
        $fgmembersite->RedirectToURL("./profile.php");
    }
}

    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
        <title>Login</title>
        <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
        <link rel="stylesheet" type="text/css" href="style/generalStyle.css">
        <script type='text/javascript' src='/scripts/gen_validatorv31.js'></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="STYLESHEET" type="text/css" href="style/textPages.css">
        <style type="text/css">
            /*!*#logo{*!*/
                /*!*width: 200px;*!*/
            /*!*}*!*/
            body {
                background: url("images/mainBG.jpg") repeat-y;
                background-size: cover;
            }
            .loginFill{
                width: 380px !important;

            font-family: 'Montserrat', sans-serif !important;
            font-style: italic;
            border: none;
            border-bottom: 1px solid var(--main-grey)!important;
            font-size: 12pt;
            padding-left: 10px;
            margin-bottom: 10px;
            /*background: #cccccc;*/

        }
        .passFill{
            width: 380px !important;

            font-family: 'Montserrat', sans-serif !important;
            border: none;
            border-bottom: 1px solid var(--main-grey)!important;
            font-size: 12pt;
            padding-left: 10px;
            margin-bottom: 10px;
            /*background: #cccccc;*/

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


            font-size: 10pt;
            color: #8AC1C6;

            }
            a:hover{
                text-decoration: underline;
            }
            .register {
                font-size: 10pt;
                color: grey;
                font-style: italic;
            }
            label{
                font-size: 11pt;  margin-top: 30px; font-weight: normal; font-style: italic; color: #bcbcbc;
            }
            svg{
                /*width: 50%;*/
                min-width: 800px;
                height: 100%;
                position: fixed;
                top: 0px;
                left: -100px;
                z-index: 0;
            }
            @media screen and (max-device-width: 450px){
                svg{
                    width: 0%; !important;
                }
                body{
                    background: white none;
                    background-size: 120%;
                    background-repeat: no-repeat;
                    padding: 10px;
                }
                .standardTitle {
                    width: 85%;
                    margin-top: 100px;
                    width: 300px;
                    margin-left: 10px;
                    padding-left: 0px;
                }
                .passFill{
                    width: 300px !important;
                }
                .loginFill{
                    width: 300px !important;
                }




            }

    </style>
</head>
<body>
<div class="standardTitle">
        <h1>Welcome!</h1>
        <form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>

            <input type='hidden' name='submitted' id='submitted' value='1'/>

            <!-- <div class='short_explanation'>* required fields</div>-->

            <div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
            <div class='container'>
                <label for='username' >Username :</label><br/>
                <input type='text' name='username' class="loginFill" id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
                <span id='login_username_errorloc' class='error'></span>
            </div>
            <br><br>
            <div class='container'>
                <label for='password' >Password :</label><br/>
                <input type='password' name='password' class="passFill" id='password' maxlength="50" /><br/>
                <span id='login_password_errorloc' class='error'></span>
            </div>
            <br>
            <div class='container'>
                <input type='submit' class="submit" name='Submit' value='Submit' />
            </div>
            <br>
            <br><div class='short_explanation register'><a href='./source/reset-pwd-req.php'>Forgot Your Password?</a></div>
            <br><div class='short_explanation register'>Don't have an account? <a href='register.php'>Sign up here.</a></div>

        </form>
    </div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 658.71 775">
    <defs>
        <style>.cls-1,.cls-2{fill:#fff;height: 100%}.cls-1{opacity:0.92;}.cls-2{opacity:0.72;}</style>
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
