<?PHP
require_once("./include/membersite_config.php");
require_once './header.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Thank you!</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
    <link rel="STYLESHEET" type="text/css" href="style/textPages.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background: url("images/loginflatlay.png") repeat-y;
            background-size: cover;
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
                background: url("images/loginflatlay.png") repeat-y;
                background-size: 120%;
                background-repeat: no-repeat;
            }
            .standardTitle {
                width: 85%;
            }
        }
    </style>
</head>
<body><br><br><br><br><br>
<div class="standardTitle">
    <h2>Thanks for registering!</h2>
    Your registration is now complete.
<p>
<a href='log-in.php'>Click here to login</a>
</p>
</div>
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
