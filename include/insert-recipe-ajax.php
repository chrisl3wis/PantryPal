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
if(empty(trim($_POST['title']))) {
    echo "You must enter data.";
    exit();

}

$qCount=0;

//var_dump($_POST);

// REQUEST=title, desc, url, time,imgUrl, (ing[]) meals[], diets[]
$sql="INSERT INTO lewischr_recipes.recipe (ID, title, description, url, cooktime, imgURL ) 
VALUES (NULL, '".$_POST["title"]."', '".$_POST["desc"]."', '".$_POST["url"]."', '".$_POST["time"]."', '".$_POST["imgUrl"]."')";
//echo "<hr>SQL:<br>" . $sql;



if($results = $mysqli->query($sql)) {
    $newID = $mysqli->insert_id;
    //echo "New recipe for " . $_POST["title"] . " added. "." The new record has the ID of ".$newID;
    $qCount++;
}else{
    exit();
}

$ingr_ids=$_POST["ingr_ids"];

//echo "<hr>Ingredients SQL:<br>";
for ($i = 0; $i<count($ingr_ids); $i++) {
    $ingrSQL = "INSERT INTO lewischr_recipes.recipe_ingredient (ID, recipe_id, ingredient_ID) VALUES (NULL, '" . $newID . "', '" . $ingr_ids[$i] . "')";
    //echo $ingrSQL;
    if($results = $mysqli->query($ingrSQL)) {
        $qCount++;
    }else{
        //echo "error ";
        //var_dump($mysqli);
        exit();
    }

}

$meals=$_POST["meals"];

//echo "<hr>Meals SQL:<br>";
for ($i = 0; $i<count($meals); $i++) {
    $mealSQL = "INSERT INTO lewischr_recipes.recipe_meal (ID, recipe_id, meal_id) VALUES (NULL, '" . $newID . "', '" . $meals[$i] . "')";
    //echo $mealSQL;
    if($results = $mysqli->query($mealSQL)) {
        $qCount++;
    }else{
        //echo "error ";
        //var_dump($mysqli);
        exit();
    }

}
$diets=$_POST["diets"];
//echo "<hr>Diets SQL:<br>";
for ($i = 0; $i<count($diets); $i++) {
    $dietSQL = "INSERT INTO lewischr_recipes.recipe_diet (ID, recipe_id, diet_id) VALUES (NULL, '" . $newID . "', '" . $diets[$i] . "')";
    //echo $dietSQL;
    if($results = $mysqli->query($dietSQL)) {
        $qCount++;
    }else{
        //echo "error ";
        //var_dump($mysqli);
        exit();
    }
}

return "New recipe \"" . $_POST["title"] . "\" with ID ".$newID." added. <br>Completed ".$qCount." queries.";




