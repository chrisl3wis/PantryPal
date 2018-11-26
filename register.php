<html>
<head>
    <title>Register for PantryPal</title>
    <link rel="stylesheet" type="text/css" href="generalStyle.css">
    <style>
        body{
            background-image: url("loginflatlay.png");
            background-size: 110%;
        }
        #registerbox{
            width: 400px;
            padding: 15px;
            margin: auto;
            margin-top: 11%;
            text-align: center;
            background-color: white;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            padding-bottom: 30px;
            -webkit-box-shadow: 0 0 74px 2px var(--main-black-a);
            -moz-box-shadow: 0 0 74px 2px var(--main-black-a);
            box-shadow: 0 0 74px 2px var(--main-black-a);

        }
        .registerFill{
            width: 300px;
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
include_once 'header.php';

?>
<div id="registerbox">
    <h1>Sign Up</h1>
    <form>
        <input type="text" class="registerFill" name="email" placeholder="email">
        <br><br>
        <input type="text" class="registerFill" name="user" placeholder="username">
        <br><br>
        <input type="text" class="registerFill" name="pw" placeholder="password"> <br>
        <br><br>
        <input type="submit" class="submit" value="create my account">
    </form>
</div>
</body>
</html>