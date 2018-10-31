<?php
	
	$configs = include('url-config.php');

	if(! isset($_GET['status'])){
		echo("Could not fetch user status");
	} else {
		$login_status= $_GET['status'];
		echo("Status: ". $_GET['status']);

		if($login_status === 'logged_in'){
			$url = $configs['baseUrlCurrent']."/?auth=sso";
			header("Location: ".$url);
		} else {
			$url = $configs['baseUrlCurrent']."/login/";
			header("Location: ".$url);
		}
	}

		
?>
