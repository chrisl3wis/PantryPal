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
        #content{

            padding-top: 60px;
            padding-left: 70px;
        }
        #submit{
            clear: both;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<?php
include_once 'header.php';

?>
<div id="content">
    <h1>Add New Recipe</h1>
    <form action="insert-recipe.php">

        <div class="ingredientList">
            <table id="ingredients">
            </table>
            <input type="text" name="ingr-entry" class="ing_input" id="ingr-entry" placeholder="Enter Ingredient">
            <input type="text" name="ingr_entry id" id="ingr-entry_id" value="" readonly>
            <button type="button" name="add" id="add" class="btn btn-success">Add Ingredient</button>
        </div>

        <br>
        <div id="submit"><br>
            <input  type="submit">
        </div>
    </form>
</div>
</body>
</html>

<script>
    //auto complete

    $(function() {
        $("#ingr-entry").autocomplete({
            source: "search_ingred.php",
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
            let idCol='<td><input type="text" name="ingr_ids[]" id="ingr'+ingCnt+'_id" value="'+ingrID.value +'" readonly></td>';

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
                let new_ingr_id = "#ingr"+rowNum
                let ingr_name= document.querySelector(new_ingr_id).value
                //console.log(ingr_name);

                var request = $.ajax({
                    url: "new-ingredient-ajax.php",
                    method: "POST",
                    data: { name : ingr_name },

                });

                request.done(function( msg ) {
                    document.querySelector(new_ingr_id+"_id").value=msg;
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
    });




</script>
