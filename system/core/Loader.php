<?php

	/*
	
		Loader
		
		The Loader class will load necessary classes for inclusion in framework
			files.
	
	*/
	
	class Loader {
		
		public function __construct() {
		
		}// end __Construct Function
		
		# requires requested file, and returns an instance of the required class
		public function &loadClass($class,$directory) {
			
			static $loaded_classes = array();
			
			if(isset($loaded_classes[$class])) {
				
				return $loaded_classes[$class];
			
			}
			
			$found_path = FALSE;
			
			$possible_paths = [APP_PATH,SYSTEM_PATH];
			
			foreach($possible_paths as $path) {
				
				if(file_exists($path.$directory.'/'.$class.'.php')) {
					
					require $path.$directory.'/'.$class.'.php';
					
					$found_path = TRUE;
					
					break;
				
				}
				
			}
			
			if($found_path === FALSE) {
				
				exit("Couldn't find the desired file. Check: ".SELF);
				
			}
		
			$loaded_classes[$class] = new $class();
			return $loaded_classes[$class];
		
		}// end Load_Class Function
	
		public function view() {
		
		
		
		}// end View Function
		
	
	}// end Loader Class
	
/* End of File "Loader.php" */
/* Location: "./system/core/Loader.php" */