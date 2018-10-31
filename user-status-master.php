<?php 

include('wp-load.php');

global $current_user;
$current_user = wp_get_current_user();
//Exception thrown if redirecturi is not present
$redirecturi= $_GET['redirecturi'];
if($current_user->ID == ''){
	header("Location: ".$redirecturi."?status=logged_out");
} else {
	header("Location: ".$redirecturi."?status=logged_in");

}

?>