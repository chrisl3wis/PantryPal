<html>
<head>
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
    <link rel="stylesheet" type="text/css" href="style/generalStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat:400,700" rel="stylesheet">
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>
        Edit Recipe
    </title>
    <style>
        body {
            background: white !important;
        }
        #editBox{
            margin-top: 80px;
            padding: 30px;
        }
        .fillWidth{
            width: 300px;
            height: 30px;
        }





    </style>
</head>
<body>
<?php
require_once './header.php';
?>

<div id="editBox">
<h2>Edit Recipe: Recipe Name</h2>
    <em style="color: gray;">leave field blank if you don't want to change it :)</em> <br><br>
    <form>
        Recipe Name: <input type="text" class="fillWidth"> <br><br>
        Recipe Description: <input type="text" class="fillWidth"> <br><br>
        Cook Time: <input type="text" class="fillWidth"> <br><br>
        Link to Recipe: <input type="text" class="fillWidth"> <br><br>
        Ingredients: <strong>put the thing here that is on the add recipe page</strong> <br><br>
        Meal Type: <strong>put the thing here that is on the add recipe page</strong>  <br><br>
        Link to Recipe Image: <input type="text" class="fillWidth"> <br><br>
        <input type = "submit">
    </form>
</div>

</body>

</html>