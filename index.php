<?php

	$system_path = "system";
	
	$application_path = "application";
	
	if(realpath($system_path) !== False) {
	
		$system_path = realpath($system_path).'/';
	
	}
	
	if(realpath($application_path) !== FALSE) {
	
		$application_path = realpath($application_path).'/';
	
	}
	
	if(!is_dir($system_path)) {
	
		echo 'The path to your "system" folder is not set correctly. Please refer to: "'.pathinfo(__FILE__,PATHINFO_BASENAME).'" to resolve this issue.';
	
	}
	
	define("SELF",pathinfo(__FILE__,PATHINFO_BASENAME));

	define("SYSTEM_PATH",str_replace("\\","/",$system_path));
	define("APP_PATH",str_replace("\\","/",$application_path));
	