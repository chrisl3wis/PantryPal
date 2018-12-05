<br><br><br><br><br><br><br><br><br><br><br><br><br><p></p>
<?php
	
session_start();

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

if ($_REQUEST['heart'] == 'true') {
	$sql = "INSERT INTO lewischr_recipes.likes (recipe_id, user_id) VALUES (" . $_REQUEST['recipe_id'] . "," . $_REQUEST['user_id'] . ")";
	echo $sql;
	$mysqli->query($sql);
	echo "inserted";
} else {
	$findsql = "SELECT * FROM lewischr_recipes.likes WHERE recipe_id=" . $_REQUEST['recipe_id'] . " AND user_id=" . $_REQUEST['user_id'];
	$findresult = $mysqli->query($findsql);
	$findrow = $findresult->fetch_assoc();
	//echo $findrow["ID"];
	//echo $findsql;
	$sql = "DELETE FROM lewischr_recipes.likes WHERE ID=" . $findrow["ID"];
	$mysqli->query($sql);
	echo "deleted";
}

if(isset($_SERVER['HTTP_REFERER'])) {
 header('Location: '.$_SERVER['HTTP_REFERER']);  
} 
else {
 header('Location: index.php');  
}

?>