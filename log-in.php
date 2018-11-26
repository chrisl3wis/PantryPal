<html>
<head>
    <title>Log In</title>
    <link rel="stylesheet" type="text/css" href="generalStyle.css">
    <style>
        #loginTitle{
            width: 500px;
            text-align: left;
            margin-top: 28vh;
            z-index: 10;
            position: absolute;
            margin-left: 5%;
        }
        #logo{
            width: 200px;
        }
        body{
            background-image: url("loginflatlay.png");
            background-size: 110%;
        }
        .loginFill{
            width: 380px;
            height: 45px;
            font-family: 'Montserrat', sans-serif;
            font-style: italic;
            border: none;
            border-bottom: 1px solid var(--main-grey);
            font-size: 11pt;
            padding-left: 10px;

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
        .register{
            font-size: 10pt;
            color: grey;
            font-style: italic;
        }
        svg{
            width: 50%;
            position: fixed;
            top: 0px;
            z-index: 0;
        }
    </style>
</head>
<body>
<?php
include_once 'header.php';

?>
<div id="loginTitle">
<h1>Welcome!</h1>
 <form>
     <input type="text" class="loginFill" name="user" placeholder="username">
     <br><br>
     <input type="text" class="loginFill" name="pw" placeholder="password"> <br>
     <br><br>
     <input type="submit" class="submit" value="log in">
     <br>
     <br>
     <span class="register">don't have an account? sign up <a href="register.php">here</a></span>
 </form>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 658.71 775"><defs><style>.cls-1,.cls-2{fill:#fff;}.cls-1{opacity:0.92;}.cls-2{opacity:0.72;}</style></defs><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M613,396c.9-156.77,60.36-210.21,21-318A280.34,280.34,0,0,0,590,0H0V771H590l11-10a671.69,671.69,0,0,0,26-125C639.38,523.35,612.39,502.14,613,396Z"/><path class="cls-2" d="M613,357c12.44-49.28,36.44-83.91,44-164,3.19-33.78,1.37-53.64-1-68-9.64-58.36-40.65-99.46-60-121H6V775H589.11l6.89-9.3c14-27.43,32.7-71.46,40-127.7C653.3,504.75,584.94,468.14,613,357Z"/></g></g></svg>

</body>
</html>