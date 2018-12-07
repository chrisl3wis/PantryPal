<?php
require_once './header.php';

if(!$fgmembersite->CheckAdminLogin())
{
    $fgmembersite->RedirectToURL("profile.php");
    exit;
}

$host = "webdev.iyaserver.com";
$userid = "lewischr";
$userpw = "Iya6521484446";
$db = "lewischr_recipes";

$mysqli = new mysqli ($host, $userid, $userpw, $db);

if ($mysqli->connect_errno) {
    echo "db connection error" . $mysqli->connect_error;
    exit("STOPPING page");
}
?>
<html lang="en-us">
<head>
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
    <link rel="stylesheet" type="text/css" href="style/generalStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat:400,700" rel="stylesheet">
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>
        All Users
    </title>
    <style>
        body {
            background: white !important;
        }
        #userBox{
            background-color: white;
            margin-top: 80px;
            padding: 30px;
            height: 40%;
        }
        #userList{
            width: 100%;
            clear: both;
        }
        .userRow{

            height: 45px;
            clear: both;
        }
        .userRow:hover{
            background-color: lightcyan;
            height: 45px;
            clear: both;
        }
        .userID{
            float: left;
            width: 5%;
            margin: 10px;
            clear: both;
        }
        .userName{
            float: left;
            width: 20%;
            margin: 15px;
        }
        .userDesc{
            float: left;
            width: 17%;
            margin: 15px;
        }
        .userEmail{
            float: left;
            width: 22%;
            margin: 15px;
        }
        .userEdit{
            float: left;
            width: 15%;
            margin: 15px;
        }
        .userDelete{
            float: left;
            width: 10%;
            margin: 15px;
            text-align: center;

        }
        .userEdit a {
            color: blue;
            font-size: 12pt;
        }

        .userDelete a{
            color: red;
            font-size: 12pt;
        }




    </style>
</head>
<body>
<?php
require_once './header.php';
?>
<div id="userBox">
    <h1>All Users in Database</h1>
    <div id="userList">
        <!-- titles -->
        <div class="userID"><strong>Name</strong></div>
        <div class="userName"><strong>Name</strong></div>
        <div class="userDesc"><strong>Username</strong></div>
        <div class="userEmail"><strong>Email</strong></div>
        <div class="userEdit"><strong>Admin Level</strong></div>
        <div class="userDelete"><strong>Delete</strong></div>
        <div style="clear: both"></div>
        <!-- put loop here -->
        <?php

        $sql = "SELECT * FROM lewischr_recipes.login
        WHERE 1";

        $result = $mysqli->query($sql) or die($mysqli->error);
        while ($row = $result->fetch_assoc()){
            echo '<div class="userRow">
            <div class="userID">' . $row['id'] . '</div>
            <div class="userName">' . $row['forename'] . ' '. $row['surname'] . '</div>
            <div class="userDesc">' . $row['username'] . '</div>
            <div class="userEmail">' . $row['email'] . '</div>
            <div class="userEdit"><a href="adminEditRecipe.php?userid=' . $row['id'] . '">edit</a></div>
            <div class="userDelete"><a href="adminEditRecipe.php?delete=true&userid=' . $row['id'] . '">remove</a></div>
        </div>';
        }

        ?>



    </div>
</div>
</body>

</html>