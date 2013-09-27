<?php

	$system_path = "system";
	
	$application_folder = "application";
	
	if(realpath($system_path) !== False) {
	
		$system_path = realpath($system_path).'/';
	
	}
	
	if(!is_dir($system_path)) {
	
		echo 'The path to your "system" folder is not set correctly. Please refer to: "'.pathinfo(__FILE__,PATHINFO_BASENAME).'" to resolve this issue.';
	
	}
	
	define("SELF",pathinfo(__FILE__,PATHINFO_BASENAME));

	define("SYS_PATH",str_replace("\\","/",$system_path));
	define("APP_PATH",BASE_PATH.'/'.$application_folder.'/');
	
	var_dump(APP_PATH);