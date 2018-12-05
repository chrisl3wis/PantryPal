<?php
require_once './header.php';
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/generalStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Pantry Pal</title>
    <style>
        body{
            background-image: none;
            text-align: center;
        }

        #advBox{
            width: 800px;
            margin: auto;
            margin-top: 10%;
        }
        .ingred{
            width: 250px;
            font-family: 'Montserrat', sans-serif !important;
            font-style: italic;
            border: none !important;
            border-bottom: 1px solid var(--main-grey) !important;
            font-size: 11pt !important;
            padding-left: 10px;
            color: black !important;
        }
        .ingredInput{
            float: left;
            margin-left: 10px;
        }
        .filterTag{
            padding: 2px 10px 2px 10px;
            background-color: #dbdde0;
            border-radius: 5px;
            margin-top: 10px;
            margin-right: 5px;
            float: left;
            color: #9E9E9E;
            font-size: 13pt;
            margin-left: 30px;
            width: 150px;
            height: 25px;
            text-align: center;
            display: block;
            cursor: pointer;
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
        .container{
            float: right;
        }
        @media screen and (max-width: 400px){
            body{
                text-align: left;
            }
            h1{
                font-size: 24pt;
                margin-left: -400px;
                margin-top: 80px;
            }
            h3{
                margin-left: 20px;
            }
            .ingred{
                width: 200px;


            }
            .ingredInput{
                float: none;
                margin-left: 20px;
            }
            .filterTag{
                float: none;
                margin-left: 20px;
            }
        }

    </style>
</head>
<body>
<?php
include_once './header.php';
?>
<div id="advBox">
    <h1>Advanced Search</h1>
    <h3 style="text-align: left;">Ingredients</h3><br>
    <form>
        <div class="ingredInput"><input class="ingred" type="text" name="ingredient1" placeholder = "Ingredient 1"></div>
        <div class="ingredInput"><input class="ingred"  type="text" name="ingredient2" placeholder = "Ingredient 2"> </div>
        <div class="ingredInput"><input class="ingred"  type="text" name="ingredient3" placeholder = "Ingredient 3"></div>
        <br><br>
        <h3 style="text-align: left;">Filters</h3>
        <div id="filters">
            <div class="filterTag">
                diet  &nbsp; ▾
            </div>
            <div class="filterTag">
                meal  &nbsp; ▾
            </div>
            <div class="filterTag">
                time  &nbsp; ▾
            </div></div>
        <br><br><br><br>
        <div class='container'>
            <input type='submit' class="submit" name='Submit' value='Search' />
        </div>
</div>
</body>
</html>