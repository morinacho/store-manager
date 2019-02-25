<?php  
	/**
	 * 
	 */
	class Users extends Controller{
		
		public function __construct(){
			$this->view('modules/users/index');	
		}

		public function index(){
			echo "hello users";
		}

	}

?>