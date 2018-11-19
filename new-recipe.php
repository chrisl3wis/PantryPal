<?php

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
<html lang="en">
<head>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="generalStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat:400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <meta charset="UTF-8">
    <title>Pantry Pal-Add Recipe</title>
    <style>
        body {
            background-image: unset;
            font-family: 'Montserrat', sans-serif;
            font-size: 11pt;
        }
        .mealCheck{
            float: left;
            width: 150px;
            margin-left: 20px;
            margin-right: 20px;
        }
        #diets{
            max-width: 500px;
            clear: both;
        }
        .dietCheck{
            float: left;
            width: 150px;
            margin-left: 20px;
            margin-right: 20px;
        }
        #meals{
            max-width: 500px;
            clear: both;
        }
        #content{

            padding-top: 60px;
            padding-left: 70px;
        }
        #submit{
            clear: both;
            margin-top: 20px;
        }
    </style>
    <script>

    </script>
</head>
<body>

<?php
include_once 'header.php';

?>

<div id="content">
    <h1>Add New Recipe</h1>

    <form action="insert-recipe.php">
        <label for="title">Recipe Name: </label>
        <input type="text" name="title" id="title" placeholder="Recipe Title">

        <br>
        <label for="desc">Description:</label>
        <input type="text" name="desc" id="desc" placeholder="short and sweet please">

        <br>
        <label for="url">Link to Recipe:</label>
        <input type="text" name="url" id="url" placeholder="URL">

        <br>

        <label for="time">Total Time (combine prep and cooking time), format as <em>HH:MM:SS</em>:</label>
        <input type="text" name="time" id="time" placeholder="HH:MM:SS">
        <?php //REVIEW[chris] implement js auto-formatting?>

        <br>
        <label for="imgUrl">Link to Recipe Image:</label>
        <input type="text" name="imgUrl" id="imgUrl" placeholder="URL">

        <br>

        <div class="ingredientList">
            <table id="ingredients">
                <tr id="row1">
                    <td><input type="text" name="ingr[]" class="ing_input" id="ingr1" placeholder="Enter Ingredient">
                        <input type="hidden" name="ingr_ids[]" id="ingr1_id" value="">
                    </td>
                    <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                </tr>
            </table>
            <?php //REVIEW[chris] implement way to add new ingredients?>
        </div>

        <br><br>
        <h3>Meals this recipe can be used in:</h3>
        <div id="meals">
            <?php
            $sql = "SELECT * FROM lewischr_recipes.meals";

            if($results = $mysqli->query($sql)) {
                while ($currentrow = $results->fetch_assoc()) {
                    echo "<div class='mealCheck'><input type='checkbox' id='meal".$currentrow['ID']."' name='meals[]' value='" . $currentrow['ID'] . "'> 
                        <label for='meal".$currentrow['ID']."'>" . $currentrow['meal_type'] . "</label>
                        </div>";
                }
            }
            ?>
        </div>


        <div id="diets">
            <br><br>
            <h3>Diets this recipe follows:</h3>
            <?php
            $sql = "SELECT * FROM lewischr_recipes.diets";

            if($results = $mysqli->query($sql)) {
                while ($currentrow = $results->fetch_assoc()) {
                    echo "<div class='dietCheck'><input type='checkbox' id='diet".$currentrow['ID']."' name='diets[]' value='" . $currentrow['ID'] . "'> 
                        <label for='diet".$currentrow['ID']."'>" . $currentrow['diet'] . "</label>
                        </div>";
                }

            }
            ?>
        </div>

        <br>
        <div id="submit"><br>
            <input  type="submit">
            <?php //REVIEW[chris] validate data before submit, post or something to hide values too? add hidden validated input ?>
        </div>




        <br>
    </form>
</div>
</body>
</html>

<script>
    //auto complete

    $(function() {
        $(".ing_input").autocomplete({
            source: "search_ingred.php",
            select: function( event, ui ) {
                event.preventDefault();
                $(this).val(ui.item.value);
                var ingr_id = $(this).attr("id");
                $('#'+ingr_id+'_id').val(ui.item.id);
            }
        });
    });

    //add ingredient rows
    $(document).ready(function(){
        var ingCnt=1;
        $('#add').click(function(){
            ingCnt++;
            $('#ingredients').append('<tr id="row'+ingCnt+'"><td>' +
                '<input type="text" name="ingr[]" class="ing_input" id="ingr'+ingCnt+'" placeholder="Enter Ingredient">' +
                '<input type="hidden" name="ingr_ids[]" id="ingr'+ingCnt+'_id" value=""></td>' +
                '<td><button type="button" name="remove" id="'+ingCnt+'" class="btn_remove">X</button></td></tr>');
            new add_auto(ingCnt);
        });
        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });
        $('#submit').click(function(){
            $.ajax({
                url:"test-ing/name.php",
                method:"POST",
                data:$('#add_name').serialize(),
                success:function(data)
                {
                    alert(data);
                    $('#add_name')[0].reset();
                }
            });
        });
    });
    function add_auto(ingCnt) {

            $(function() {
                $("#ingr"+ingCnt).autocomplete({
                    source: "search_ingred.php",
                    select: function( event, ui ) {
                        event.preventDefault();
                        $(this).val(ui.item.value);
                        var ingr_id = $(this).attr("id");
                        $('#'+ingr_id+'_id').val(ui.item.id);
                    }
                });
            });
    }


</script>
