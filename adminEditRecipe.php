<?php
if (!isset($_REQUEST['recipeid'])){
    header("Location: adminRecipesList.php");
    exit;
}
require_once './header.php';




$host = "webdev.iyaserver.com";
$userid = "lewischr";
$userpw = "Iya6521484446";
$db = "lewischr_recipes";

$mysqli = new mysqli ($host, $userid, $userpw, $db);

if ($mysqli->connect_errno) {
    echo "db connection error" . $mysqli->connect_error;
    exit("STOPPING page");
}

$sql = 'SELECT * FROM lewischr_recipes.recipe
        WHERE ID='.$_REQUEST["recipeid"].' LIMIT 1';


$result = $mysqli->query($sql) or die($mysqli->error);
while ($row = $result->fetch_assoc()) {
    $ID = $row['ID'];
    $title = $row['title'];
    $desc = $row['description'];
    $url = $row['url'];
    $time = $row['cooktime'];
    $imgURL = $row['imgURL'];
}
?>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="style/generalStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Montserrat:400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <meta charset="UTF-8">
    <title>Pantry Pal-Edit Recipe</title>
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
            max-width: 700px;
            clear: both;
        }
        .dietCheck{
            float: left;
            width: 150px;
            margin-left: 20px;
            margin-right: 20px;
        }
        #meals{
            max-width: 700px;
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
        #success{
            background: rgba(160, 255, 166, 0.89);
            border-radius: 10px;
            padding: 15px;
            width: 400px;
            visibility: hidden;
        }
    </style>
    <script>

    </script>
</head>
<body>
<div id="content">
    <h1>Edit Recipe:<?=$title?></h1>
    <div id="success">
    </div>

    <form id="insertForm">
        <label for="title">Recipe Name: </label>
        <input type="hidden" name="recipeid" id="id" value="<?=$ID?>">
        <input type="text" name="title" id="title" placeholder="Recipe Title" value="<?=$title?>">

        <br>
        <label for="desc">Description:</label>
        <input type="text" name="desc" id="desc" placeholder="short and sweet please" value="<?=$desc?>">

        <br>
        <label for="url">Link to Recipe:</label>
        <input type="text" name="url" id="url" placeholder="URL" value="<?=$url?>">

        <br>

        <label for="time">Total Time (combine prep and cooking time), format as <em>MM</em>:</label>
        <input type="text" name="time" id="time" placeholder="minutes" value="<?=$time?>">

        <br>
        <label for="imgUrl">Link to Recipe Image:</label>
        <input type="text" name="imgUrl" id="imgUrl" placeholder="URL" value="<?=$imgURL?>">

        <br>
<?php //REVIEW[chris] yikeronies ?>
        <div class="ingredientList">
            <table id="ingredients">
            </table>
            <input type="text" name="ingr-entry" class="ing_input" id="ingr-entry" placeholder="Enter Ingredient">
            <input type="hidden" name="ingr_entry id" id="ingr-entry_id" value="" readonly>
            <button type="button" name="add" id="add" class="btn btn-success">Add Ingredient</button>
        </div>


        <div id="meals">
            <br><br>
            <h3>Meals this recipe can be used in:</h3>
            <?php
            $sql = "SELECT * FROM lewischr_recipes.meals";

            if($results = $mysqli->query($sql)) {
                while ($currentrow = $results->fetch_assoc()) {
                    $mealID = $currentrow['ID'];
                    $mealsql = "SELECT ID FROM lewischr_recipes.recipe_meal WHERE recipe_id=".$ID." AND meal_id=".$mealID;
                    $mealResult = $mysqli->query($mealsql) ;
                    $checked = $mealResult->fetch_assoc()
                        ? ' checked' : '';

                    echo "<div class='mealCheck'><input type='checkbox' id='meal".$currentrow['ID']."' name='meals[]' value='" . $currentrow['ID'] ."'". $checked. ">
                        <label for='meal".$currentrow['ID']."'>" . $currentrow['meal_type'] . "</label>";
                    var_dump($mealResult);

                    echo "</div>";
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
            <input  type="button" value="Submit">
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
        $("#ingr-entry").autocomplete({
            source: "./include/search_ingred.php",
            select: function( event, ui ) {
                event.preventDefault();
                $(this).val(ui.item.value);
                //var ingr_id = $(this).attr("id");
                $('#ingr-entry_id').val(ui.item.id);
            }
        });
    });

    //add ingredient rows
    $(document).ready(function(){
        let ingCnt=0;
        document.querySelector('#add').addEventListener("click", function() {
            ingCnt++;
            let ingrName=document.querySelector('#ingr-entry');
            let ingrID=document.querySelector('#ingr-entry_id');
            let idCol='<td><input type="hidden" name="ingr_ids[]" id="ingr'+ingCnt+'_id" value="'+ingrID.value +'" readonly></td>';

            if (ingrID.value==='') {
                idCol += '<td><button type="button" name="db_insert" id="' + ingCnt + '_db_insert" class="btn_insert">+</button>' +
                    '</td>';
            }

            $('#ingredients').append('<tr id="row'+ingCnt+'"><td><input type="text" name="ingr[]" class="ing_input" id="ingr'+ingCnt+'" value="'+ ingrName.value +'" readonly></td>' +
                idCol+
                '<td><button type="button" name="remove" id="'+ingCnt+'" class="btn_remove">X</button></td></tr>');

            ingrName.value="";
            ingrID.value="";
            let btnID= ingCnt+'_db_insert';
            console.log(btnID);
            document.getElementById(btnID).addEventListener("click", function() {
                let rowNum= this.id.substring(0,this.id.indexOf("_"));
                //console.log(rowNum);
                let new_ingr_id = "#ingr"+rowNum;
                let ingr_name= document.querySelector(new_ingr_id).value;
                //console.log(ingr_name);

                var request = $.ajax({
                    url: "./include/new-ingredient-ajax.php",
                    method: "POST",
                    data: { name : ingr_name },

                });

                request.done(function( msg ) {
                    document.querySelector(new_ingr_id+"_id").value=msg;
                    console.log(btnID);
                    $("#"+btnID).parent().remove();
                    //console.log(msg);
                });

                request.fail(function( jqXHR, textStatus ) {
                    alert( "Request failed: " + textStatus );
                });
            });
        });
        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });





        //submit
        $('#submit').click(function(){
            var request = $.ajax({
                url: "./include/update-recipe-ajax.php",
                method: "POST",
                data: $('#insertForm').serialize(),

            });

            request.done(function( msg ) {
                document.querySelector("#success").innerHTML=msg;
                document.querySelector("#success").style.visibility = "visible";
                $('#insertForm')[0].reset();
                document.querySelector("#ingredients").innerHTML="";


            });

            request.fail(function( jqXHR, textStatus, data) {
                console.log('jqXHR:');
                console.log(jqXHR);
                console.log('textStatus:');
                console.log(textStatus);
                console.log('data:');
                console.log(data);
            });
        });

    });




</script>
