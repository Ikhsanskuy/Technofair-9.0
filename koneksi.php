<?php


$host="localhost"; //host server
$user="root"; //user login
$pass ="root"; //password
$db ="tf9"; //name database


// $host="localhost"; //host server
// $user="technof4_kaesang"; //user login
// $pass ="ngobarwithkopy66"; //password
// $db ="technof4_tf9"; //name database


$conn = mysqli_connect($host, $user, $pass, $db) or die ("ERROR");

if (mysqli_connect_errno()) {
	echo mysqli_connect_errno();
}

// if ($_SERVER["HTTPS"] != "on") {
// 	header("Location:https://" .
// 		$_SERVER["HTTP_HOST"] .
// 		$_SERVER["REQUEST_URI"]);
// 	exit();
// }

?>