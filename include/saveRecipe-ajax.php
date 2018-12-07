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

//POST format = { user_id : userID, recipe_id : recipeID, current_state : currentState }

if($_POST != '')
{
    if ($_POST['current_state'] === 'unsaved') {
        $sql = "INSERT INTO lewischr_recipes.likes (recipe_id, user_id) VALUES (" . $_POST['recipe_id'] . "," . $_POST['user_id'] . ")";
//        echo $sql;
        $mysqli->query($sql);
        echo "saved";
    } else {
        $find_sql = "SELECT * FROM lewischr_recipes.likes WHERE recipe_id=" . $_POST['recipe_id'] . " AND user_id=" . $_POST['user_id'];
        $find_result = $mysqli->query($find_sql);
        $find_row = $find_result->fetch_assoc();
        //echo $findrow["ID"];
        //echo $findsql;
        $sql = "DELETE FROM lewischr_recipes.likes WHERE ID=" . $find_row["ID"];
        $mysqli->query($sql);
        echo "unsaved";
    }
}
