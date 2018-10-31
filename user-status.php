<?php
	
	$configs = include('url-config.php');
	$url = $configs['baseUrlMain']."/user-status-master.php?redirecturi=".$configs['redirectUri'];
	header("Location: ".$url);		
?>
