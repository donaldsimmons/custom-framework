<?php

	/*
	
		Router 
		
		The Router class will interpret URLs and route application functionality
			according to URL request contents.
	
	*/
	
	class Router {
	
		public $routes = array();
		
		public $error_routes = array();
		
		public $class = '';
		
		public $method = 'index';
		
		public $directory = '';
		
		public function __construct($url_values) {
		
		}// end _Construct Function	
		
		public function set_route() {
			
			if(isset($_SERVER['PATH_INFO'])) {
			
				$path = $_SERVER['PATH_INFO'];
				
				$new_path = trim('/',$path);
				
				echo 'server';
			
			}else{
			
				$path = getenv('path_info');
				echo 'getenv';
			
			}
			
		}// end Set_Route Function
		
		public function get_route() {
			
			
			
		}// end Get_Route Function
		
		public function get_controller() {
			
			
			
		}// end Get_Controller Function
		
		public function get_method() {
			
			
			
		}// end Get_Method Function
		
		private function validate_uri() {
		
			
		
		}// end Validate_URI Function
	
	}// end Router Class

/* End of File "Router.php" */
/* Location: "./system/core/Router.php" */