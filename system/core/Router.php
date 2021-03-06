<?php

	/*
	
		Router 
		
		The Router class will interpret URLs and route application functionality
			according to URL request contents.
	
	*/
	
	class Router {
	
		public $routes = array();
		
		public $error_routes = array();
		
		public $controller = '';
		
		public $method = 'index';
		
		public $arguments = array();
		
		public $directory = '';
		
		private $uri_string;
		
		public function __construct($url_values) {
		
		}// end _Construct Function	
		
		public function set_route() {
			
			# check for passed in controller/method options from URL
			if(isset($_SERVER['PATH_INFO'])) {
			
				$path = $_SERVER['PATH_INFO'];
			
			}else{
			
				$path = getenv('path_info');
			
			}
			
			$this->determine_uri($path);
			
			
		}// end Set_Route Function
		
		public function get_route() {
			
			
			
		}// end Get_Route Function
		
		public function get_controller() {
			
			
			
		}// end Get_Controller Function
		
		public function get_method() {
			
			
			
		}// end Get_Method Function
		
		private function determine_uri($path) {
		
			if(trim($path,'/') == '') {
			
				$this->controller = 'default';
				$this->method = 'index';
				
			
			}else{
			
				
				
			}
		
		}
		
		private function validate_uri() {
		
			
		
		}// end Validate_URI Function
		
	
	}// end Router Class

/* End of File "Router.php" */
/* Location: "./system/core/Router.php" */