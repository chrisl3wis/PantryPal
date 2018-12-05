<html>
<head>
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
    <link rel="stylesheet" type="text/css" href="style/generalStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat:400,700" rel="stylesheet">
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>
        All Recipes
    </title>
    <style>
        body {
            background: white !important;
        }
        #recipeBox{
            background-color: white;
            margin-top: 80px;
            padding: 30px;
            height: 40%;
        }
        #recipeList{
            width: 100%;
            clear: both;
        }
        .recipeRow{

            height: 45px;
            clear: both;
        }
        .recipeRow:hover{
            background-color: lightcyan;
            height: 45px;
            clear: both;
        }
        .recipeName{
            float: left;
            width: 20%;
            margin: 15px;
            clear: both;
        }
        .recipeDesc{
            float: left;
            width: 50%;
            margin: 15px;
        }
        .recipeEdit{
            float: left;
            width: 10%;
            margin: 15px;
            text-align: center;
        }
        .recipeDelete{
            float: left;
            width: 10%;
            margin: 15px;
            text-align: center;

        }
        .recipeEdit a {
            color: blue;
            font-size: 12pt;
        }

        .recipeDelete a{
            color: red;
            font-size: 12pt;
        }




    </style>
</head>
<body>
<?php
require_once './header.php';
?>
<div id="recipeBox">
<h1>All Recipes in Database</h1>
    <div id="recipeList">
        <!-- titles -->
        <div class="recipeName"><strong>Name</strong></div>
        <div class="recipeDesc"><strong>Description</strong></div>
        <div class="recipeEdit"><strong>Edit</strong></div>
        <div class="recipeDelete"><strong>Delete</strong></div>
        <div style="clear: both"></div>
        <!-- put loop here -->
        <div class="recipeRow">
        <div class="recipeName">Delicious Spaghetti</div>
        <div class="recipeDesc">Here is where the description would go right here yay</div>
        <div class="recipeEdit"><a href="">edit</a></div>
            <div class="recipeDelete"><a href="">remove</a></div>
    </div>
        <div class="recipeRow">
            <div class="recipeName">Delicious Spaghetti</div>
            <div class="recipeDesc">Here is where the description would go right here yay</div>
            <div class="recipeEdit"><a href="">edit</a></div>
            <div class="recipeDelete"><a href="">remove</a></div>
        </div>
        <div class="recipeRow">
            <div class="recipeName">Delicious Spaghetti</div>
            <div class="recipeDesc">Here is where the description would go right here yay</div>
            <div class="recipeEdit"><a href="">edit</a></div>
            <div class="recipeDelete"><a href="">remove</a></div>
        </div>



</div>
</div>
</body>

</html>