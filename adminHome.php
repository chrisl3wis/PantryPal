<html>
<head>
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
    <link rel="stylesheet" type="text/css" href="style/generalStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat:400,700" rel="stylesheet">
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <style>
        a {
            color: gray;
            font-size: 30pt;
        }
        #adminbox{
            background-color: white;
            width: 40%;
            height: 75%;
            padding: 220px 50px 50px;
        }
        .fontSize{
            font-size: 22pt;
        }
    </style>
</head>'
<body>

<?php
require_once './header.php';
?>
<div id='fg_membersite_content'>
    <div id="adminbox">
        <h1>Hi There <?= $fgmembersite->UserFullName(); ?>!</h1>
        <a href="" class="fontSize">All Recipes List/Edit Recipes</a> <br><br>
        <a href="" class="fontSize">User List</a> <br><br>
        <a href="new-recipe.php" class="fontSize">Add Recipes</a> <br><br>
    </div>
</div>
</body>
</html>