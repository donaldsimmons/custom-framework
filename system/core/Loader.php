<?php

	/*
	
		Loader
		
		The Loader class will load nessary classes for inclusion in controllers.
	
	*/
	
	class Loader {
		
		public __construct() {
		
			$this->loaded_classes = array();
		
		}// end __Construct Function
		
		public function loadClass($class,$directory) {
			
			static $loaded_classes = array();
			
			if(!isset($loaded_classes[$class])) {
			
				return $loaded_classes[$class];
			
			}
		
		}// end Load_Class Function
	
		public function view() {
		
		
		
		}// end View Function
		
	
	}// end Loader Class
	
/* End of File "Loader.php" */
/* Location: "./system/core/Loader.php" */