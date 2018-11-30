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

// Get search term
$searchTerm = $_GET['term'];

$sql="SELECT * FROM lewischr_recipes.ingredients WHERE ingredient LIKE '%".$searchTerm."%' ORDER BY ID DESC";



// Generate skills data array
$skillData = array();

if ($results = $mysqli->query($sql)) {

    while ($row = $results->fetch_assoc()){
        $data['id'] = $row['ID'];
        $data['value'] = $row['ingredient'];
        array_push($skillData, $data);
    }
}

// Return results as json encoded array
echo json_encode($skillData);



