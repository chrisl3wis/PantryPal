<?PHP
require_once("initialize.php");
require_once("fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName("PantryPal");

//Provide your admin name here
$fgmembersite->SetAdminName("admin");

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail("lewischr@usc.edu");

//Provide your database login details here:
//hostname, user name, password and database name
$fgmembersite->InitDB("webdev.iyaserver.com", "lewischr", "Iya6521484446", "lewischr_recipes");

//For better security. Get a random string from this link: http://tinyurl.com/randstr
$fgmembersite->SetRandomKey("QTcJpb9KRFmq887");


?>