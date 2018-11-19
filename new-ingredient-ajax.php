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


        if($_POST != '')
        {
            $sql="INSERT INTO lewischr_recipes.ingredients (ID, ingredient ) 
VALUES (NULL, '".$_POST["name"]."')";
            //echo "<hr>SQL:<br>" . $sql;



            if($results = $mysqli->query($sql)) {
                $newID = $mysqli->insert_id;
                echo $newID;
            }else{
                exit();
            }
            //echo $_POST["name"];
        }

?>