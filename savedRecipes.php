<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <link rel="stylesheet" type="text/css" href="style/generalStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat:400,700" rel="stylesheet">
    <style type="text/css">
        body{
            background-image: none;
        }
        .filterTag{
            padding: 2px 10px 2px 10px;
            background-color: #dbdde0;
            border-radius: 5px;
            margin-top: 10px;
            margin-right: 5px;
            float: left;
            color: #9E9E9E;
            font-size: 10pt;
            margin-left: 30px;
            width: 100px;
            text-align: center;
        }

        #savedCont{
            padding: 50px;
        }
        .resultsHeader{
            background-image: url("images/mainBG.jpg");
            background-size: 140%;
            background-position-y: -200px;
            background-position-x: -30px;

            width: 100%;
            height: 200px;
        }
        .resultsHeaderText{
            text-align: center;
            color: white;
            padding-top: 70px;
            padding-left: 70px;
        }
        #filterCont{
            background-color: #F2F1F1;
            width: 100%;
            height: 150px;

            padding-top: 30px;
        }
        #filterText{
            margin: auto;
            width:600px;
            color: #9E9C9C;

        }
        .ingredient{
            height: 25px;
            border: none;
            padding-left: 10px;
            background-color: #E6E6E6;
            width: 120px;
            margin-left: 10px;
        }
        .more{
            font-size: 10pt;
        }

        .searchResult{
            width: 250px;
            margin: 30px;
            background-color: rgb(255, 255, 255);
            border-radius: 10px;
            padding-bottom: 15px;
            -webkit-box-shadow: -1px 0px 7px 1px rgba(0,0,0,0.1);
            -moz-box-shadow: -1px 0px 7px 1px rgba(0,0,0,0.1);
            box-shadow: -1px 0px 7px 1px rgba(0,0,0,0.1);
            height: auto;
            float: left;
        }
        .recipeImage{
            width: 100%;
            margin-bottom: 0px;
            position: relative;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        body{
            font-family: 'Montserrat', sans-serif;
            font-size: 11pt;
        }
        .recipeInfo{
            width: 230px;
            margin: 10px;
            color: grey;

        }
        .recipeName{
            font-size: 16pt;
            line-height: 22pt;
            font-weight: bold;
            font-family: Lato, sans-serif;
            color: black;
            text-decoration: none;

        }

        .tags{
            padding: 2px 10px 2px 10px;
            background-color: rgb(98, 168, 214);
            border-radius: 10px;
            margin-top: 10px;
            margin-right: 5px;
            float: left;
            color: white;
            font-size: 10pt;
        }



    </style>
    <title>Saved Recipes</title>
</head>
<body>
<?php
include_once './header.php';
?>
<div class="resultsHeader">
    <div class="resultsHeaderText">
        <h1>Your Saved Recipes</h1>
    </div>

</div>
<div id="filterCont">
<div id="filterText">
 <form action="">
Filter by Ingredient: <input class="ingredient" type="text" name="ing1" placeholder="ingredient 1">
        <input class="ingredient" type="text" name="ing2" placeholder="ingredient 2">
        <input class="ingredient" type="text" name="ing3" placeholder="ingredient 3">
 </form>
    <hr>
        <span class="more">MORE FILTERS</span><br>
        <div class="filterTag">
            diet  &nbsp; ▾
        </div>
        <div class="filterTag">
            meal  &nbsp; ▾
        </div>
        <div class="filterTag">
            time  &nbsp; ▾
        </div>


</div>
</div>
<div id="savedCont">
    <div class="searchResult">
        <img class="recipeImage" src="pestopasta.jpg" alt="pesto">
        <div class="recipeInfo">
            <span class="recipeName"><strong>Pesto Pasta</strong><br></span>
            <em>recipe description goes right here</em>
            <br>
            <div class="tags">vegan</div><div class="tags">dinner</div>
        </div>


    </div>
    <div class="searchResult">
        <img class="recipeImage" src="pestopasta.jpg" alt="pesto">
        <div class="recipeInfo">
            <span class="recipeName"><strong>Pesto Pasta</strong><br></span>
            <em>recipe description goes right here</em>
            <br>
            <div class="tags">vegan</div><div class="tags">dinner</div>
        </div>


    </div>

    <div class="searchResult">
        <img class="recipeImage" src="pestopasta.jpg" alt="pesto">
        <div class="recipeInfo">
            <span class="recipeName"><strong>Pesto Pasta</strong><br></span>
            <em>recipe description goes right here</em>
            <br>
            <div class="tags">vegan</div><div class="tags">dinner</div>
        </div>

    </div>

    <div class="searchResult">
        <img class="recipeImage" src="pestopasta.jpg" alt="pesto">
        <div class="recipeInfo">
            <span class="recipeName"><strong>Pesto Pasta</strong><br></span>
            <em>recipe description goes right here</em>
            <br>
            <div class="tags">vegan</div><div class="tags">dinner</div>
        </div>
</div>

    <div class="searchResult">
        <img class="recipeImage" src="pestopasta.jpg" alt="pesto">
        <div class="recipeInfo">
            <span class="recipeName"><strong>Pesto Pasta</strong><br></span>
            <em>recipe description goes right here</em>
            <br>
            <div class="tags">vegan</div><div class="tags">dinner</div>
        </div>
</body>

</html>