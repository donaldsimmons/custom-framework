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
			
			/*
				
				uses "&loadClass" vs "loadClass" so that function returns reference to
					the object returned instead of the value
					
				this means the actual loaded class object is returned, not just the
					value of the object
			
			*/
			
			# uses static array to maintain array values for already loaded classes,
			#	even after program execution leaves this function's scope
			static $loaded_classes = array();
			
			
			# if class is already loaded, don't load again - return loaded object
			if(isset($loaded_classes[$class])) {
				
				return $loaded_classes[$class];
			
			}
			
			
			$found_path = FALSE;
			
			$possible_paths = [APP_PATH,SYSTEM_PATH];
			
			# check each directory option for the request directory and file
			foreach($possible_paths as $path) {
				
				if(file_exists($path.$directory.'/'.$class.'.php')) {
					
					
					# if found, require the file, and indicate that it has been found
					require $path.$directory.'/'.$class.'.php';
					
					$found_path = TRUE;
					
					break;
				
				}
				
			}
			
			
			# if the requested class couldn't be located, exit script execution/send message
			if($found_path === FALSE) {
				
				exit("Couldn't find the desired file. Check: ".SELF);
				
			}
		
			# store the loaded class and return the new instance for use
			$loaded_classes[$class] = new $class();
			return $loaded_classes[$class];
		
		}// end Load_Class Function
	
		public function view() {
		
		
		
		}// end View Function
		
	
	}// end Loader Class
	
/* End of File "Loader.php" */
/* Location: "./system/core/Loader.php" */